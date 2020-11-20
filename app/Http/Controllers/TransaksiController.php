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
        $transaksi  = Transaksi::with(['customer', 'detail'])->orderBy('id', 'ASC')->paginate(10);
        return view('transaksis.index', compact('transaksi'));
        // $transaksis = $this->transaksiRepository->all();
        // return view('transaksis.index')
        //     ->with('transaksis', $transaksis);
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
            'batas_pambayaran'=>'required'
        ]);

        $data['id']=\Uuid::generate(4);
        $data['kode_invoice']='request'->kode_invoice;
        $data['kode_pembayaran']='request'->kode_pembayaran;
        $data['deskripsi_transaksi']='request'->deskripsi_transaksi;
        $data['batas_pembayaran']='request'->batas_pembayaran;
        $data['created_at']=date('Y-m-d H:i:s');
        $date['update_at']=date('Y-m-d H:i:s');

        Transaksi::insert($data);
        \Session::flash('sukses','Transaksi berhasil ditambah');
        return redirect('/create');
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
        $transaksi = $this->transaksiRepository->find($id);

        if (empty($transaksi)) {
            Flash::error('Transaksi not found');

            return redirect(route('transaksis.index'));
        }

        return view('transaksis.edit')->with('transaksi', $transaksi);
    }

    /**
     * Update the specified Transaksi in storage.
     *
     * @param int $id
     * @param UpdateTransaksiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTransaksiRequest $request)
    {
        $transaksi = $this->transaksiRepository->find($id);

        if (empty($transaksi)) {
            Flash::error('Transaksi not found');

            return redirect(route('transaksis.index'));
        }

        $transaksi = $this->transaksiRepository->update($request->all(), $id);

        Flash::success('Transaksi updated successfully.');

        return redirect(route('transaksis.index'));
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
        $transaksi = $this->transaksiRepository->find($id);

        if (empty($transaksi)) {
            Flash::error('Transaksi not found');

            return redirect(route('transaksis.index'));
        }

        $this->transaksiRepository->delete($id);

        Flash::success('Transaksi deleted successfully.');

        return redirect(route('transaksis.index'));
    }
}
