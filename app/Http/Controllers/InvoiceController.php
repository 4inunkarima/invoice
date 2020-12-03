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
use App\User;
use App\Models\Transaksi;
use PDF;
use Flash;
use Response;
use DB;

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
        $invoice  = Invoice::with(['customer', 'detail'])->orderBy('id', 'ASC')->get();
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
    public function add($id)
    {
        $invoice = Invoice::with(['customer','detail','detail.produk'])->find($id);
        $produks = Produk::orderBy('nama_produk','ASC')->get();
        $user = User::orderBy('name','ASC')->get();
        return view('invoices.create',compact('invoice','produks','user'));
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
                    'qty'=>$request->qty
                ]);
            }
                return redirect()->back()->with(['succes'=>'produk telah ditambahkan']);
            }catch (\Exception $e){
                return redirect()->back()->with(['error'=>$e->getmessage()]);
            }
        }    


    public function ubah($id)
    {
        $row = Invoice::find($id);
        $invoice_detail = Invoice_detail::orderBy('id')->get();
        $produk = Produk::orderBy('id')->get();
            
        return view('invoices.ubah', compact('invoice_detail', 'produk', 'row'));
    }

    public function ganti($id, Request $request)
    {
        $this->validate($request,[
            'kode_invoice'=>'required',
            'kode_pembayaran'=>'required',
            'batas_pembayaran'=>'required',
            'deskripsi_transaksi'=>'required',
            
        ]);

        $data['kode_invoice']=$request->kode_invoice;
        $data['kode_pembayaran']=$request->kode_pembayaran;
        $data['batas_pembayaran']=$request->batas_pembayaran;
        $data['deskripsi_transaksi']=$request->deskripsi_transaksi;
        $data['updated_at']=date('Y-m-d H:i:s');

        Transaksi::where('id',$id)->update($data);
 
        \Session::flash('sukses','Transaksi berhasil diupdate');
 
        return redirect('/show');
    }

    public function hapus($id)
    {
        $detail=Invoice_detail::find($id);
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
        return redirect(route('invoices.index'))->with(['success' => 'Data telah dihapus']);
    }

    public function generateInvoice($id)
    {
        $invoice=Invoice::with(['customer','detail','detail.produk'])->find($id);
        $pdf=PDF::loadview('invoices.print',compact('invoice'))->setPaper('a4','landscape');
        return $pdf->stream('my.pdf',array('Attachment'=>0));
    }

    public function loadData(Request $request)
    {
        if ($request->has('q')) {
            $cari = $request->q;
            $data = DB::table('customers')->select('id', 'email','alamat')->where('email','alamat', 'LIKE', '%$cari%')->get();
            return response()->json($data);
        }
    }
}
