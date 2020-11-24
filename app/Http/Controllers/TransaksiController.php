<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
use App\Repositories\TransaksiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Invoice_detail;
use App\Models\Customer;
use App\Models\Produk;
use App\Models\status_pembayaran;
use App\Models\Transaksi;
// use Uuid;
use Flash;
use Response;

class TransaksiController extends AppBaseController
{
    /** @var  TransaksiRepository */
    private $transaksiRepository;

    public function __construct(TransaksiRepository $transaksiRepo)
    {
        $this->transaksiRepository = $transaksiRepo;
    }

    /**
     * Display a listing of the Transaksi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $transaksi  = Transaksi::with(['totalins', 'pembayarans'])->orderBy('id', 'ASC')->paginate(10);
        // $tampil = Invoice::orderBy('total','asc')->get();
        // $pembayarans = Status_pembayaran::orderBy('nama_status','asc')->get();
        return view('transaksis.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new Transaksi.
     *
     * @return Response
     */
    public function add()
    {
        $title = 'Pembayaran';
        $kode_invoice = Invoice::orderBy('id','asc')->get();
        $kode_pembayaran = Status_pembayaran::orderBy('nama_status','asc')->get();

        return view('transaksis.create',compact('title','kode_invoice','kode_pembayaran'));
    }

    /**
     * Store a newly created Transaksi in storage.
     *
     * @param CreateTransaksiRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'kode_invoice'=>'required',
            'kode_pembayaran'=>'required',
            'deskripsi_transaksi'=>'required',
            // 'batas_pambayaran'=>'required'
        ]);

        Transaksi::create($request->all());
        // Transaksi::insert($data);
        \Session::flash('sukses','Transaksi berhasil ditambah');
        return redirect('/add');
    }


    public function naik_status($id){
        try {
            $transaksi = Transaksi::find($id);
            $id_status = $transaksi->kode_pemnbayaran;
            $urutan_status = $transaksi->pembayarans->urutan;
 
            $urutan_baru = $urutan_status + 1;
            $status_baru = status_pembayaran::where('urutan',$urutan_baru)->first();
 
            Transaksi::where('id',$id)->update([
                'kode_pembayaran'=>$status_baru->id
            ]);
 
            \Session::flash('sukses','Status berhasil dinaikkan');
 
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }
 
        return redirect()->back();
    }


    /**
     * Display the specified Transaksi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transaksi = $this->transaksiRepository->find($id);

        if (empty($transaksi)) {
            Flash::error('Transaksi not found');

            return redirect(route('transaksis.index'));
        }

        return view('transaksis.show')->with('transaksi', $transaksi);
    }

    /**
     * Show the form for editing the specified Transaksi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trans = Transaksi::find($id);
        $title = "Edit Transaksi";
        $kode_invoice = Invoice::orderBy('id','ASC')->get();
        $kode_pembayaran = status_pembayaran::orderBy('nama_status')->get();
        
        return view('transaksis.edit', compact('title','kode_invoice', 'kode_pembayaran', 'trans'));
    }

    /**
     * Update the specified Transaksi in storage.
     *
     * @param int $id
     * @param UpdateTransaksiRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'kode_invoices'=>'required',
            'kode_pembayaran'=>'required',
            'batas_pembayaran'=>'required',
            'deskripsi_transaksi'=>'required',
            
        ]);


        $data['kode_invoices']=$request->kode_invoices;
        $data['kode_pembayaran']=$request->kode_pembayaran;
        $data['batas_pembayaran']=$request->batas_pembayaran;
        $data['deskripsi_transaksi']=$request->deskripsi_transaksi;
        $data['updated_at']=date('Y-m-d H:i:s');

        Transaksi::where('id',$id)->update($data);
 
        \Session::flash('sukses','Transaksi berhasil diupdate');
 
        return redirect('transaksi-pesanan');

    }

    /**
     * Remove the specified Transaksi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect()->back()->with(['success' => 'Data telah dihapus']);
    }
}
