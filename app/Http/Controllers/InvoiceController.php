<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Repositories\InvoiceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Invoice_detail;
use App\Models\Produk;
use PDF;
use Flash;
use Response;

class InvoiceController extends AppBaseController
{
    /** @var  InvoiceRepository */
    private $invoiceRepository;

    public function __construct(InvoiceRepository $invoiceRepo)
    {
        $this->invoiceRepository = $invoiceRepo;
    }

    /**
     * Display a listing of the Invoice.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $invoice  = Invoice::with(['customer', 'detail'])->orderBy('id', 'ASC')->paginate(10);
        return view('invoices.index', compact('invoice'));
    }

    /**
     * Show the form for creating a new Invoice.
     *
     * @return Response
     */
    public function select()
    {
        $customers = Customer::orderBy('created_at','DESC')->get();
        return view('invoices.select',['customers'=>$customers]);
    }

    public function save(Request $request)
    {
        $this->validate($request,[
            'customer_id'=>'required|exists:customers,id'
        ]);

        try{
            $invoice = Invoice::create([
                'customer_id'=>$request->customer_id,
                'total'=>0
            ]);
            return redirect(route('invoice.create',['id'=>$invoice->id]));
        }catch(\Exception $e){
            return redirect()->back()->with(['error'=>$e->getMessage()]);
        }
    }

      /**
     * Show the form for editing the specified Invoice.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invoice = Invoice::with(['customer','detail','detail.produk'])->find($id);
        $produks = Produk::orderBy('nama_produk','ASC')->get();
        return view('invoices.create',compact('invoice','produks'));
    }
    /**
     * Store a newly created Invoice in storage.
     *
     * @param CreateInvoiceRequest $request
     *
     * @return Response
     */
    public function store(CreateInvoiceRequest $request)
    {
        $input = $request->all();

        $invoice = $this->invoiceRepository->create($input);

        Flash::success('Invoice saved successfully.');

        return redirect(route('invoices.index'));
    }

    /**
     * Display the specified Invoice.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invoice = $this->invoiceRepository->find($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        return view('invoices.show')->with('invoice', $invoice);
    }
    /**
     * Update the specified Invoice in storage.
     *
     * @param int $id
     * @param UpdateInvoiceRequest $request
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'produk_id'=>'required|exists:produks,id',
            'qty'=>'required|integer'
        ]);

        try{
            $invoice = Invoice::find($id);
            $produk = Produk::find($request->produk_id);
            $invoice_detail = $invoice->detail()->where('produk_id',$produk->id)->first();
            
            if ($invoice_detail){
                $invoice_detail->update([
                    'qty'=>$invoice_detail->qty+$request->qty
                ]);
            }else{
                Invoice_detail::create([
                    'invoice_id'=>$invoice->id,
                    'produk_id'=>$request->produk_id,
                    'harga_produk'=>$produk->harga_produk,
                    //'due_date'=>$invoice->due_date,
                    'qty'=>$request->qty
                ]);
            }
                return redirect()->back()->with(['succes'=>'produk telah ditambahkan']);
            }catch (\Exception $e){
                return redirect()->back()->with(['error'=>$e->getmessage()]);
            }
        }    

    public function hapus($id)
    {
        $detail=Invoice_detail::find($id)->first();
        $detail->delete();
        return redirect()->back()->with(['success'=>'Produk berhasil dihapus.']);
    }

    /**
     * Remove the specified Invoice from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        $invoice->delete();
        return redirect()->back()->with(['success' => 'Data telah dihapus']);
    }

    public function generateInvoice($id)
    {
        $invoice=Invoice::with(['customer','detail','detail.produk'])->find($id);
        $pdf=PDF::loadview('invoices.print',compact('invoice'))->setPaper('a4','landscape');
        return $pdf->stream('my.pdf',array('Attachment'=>0));
    }
}
