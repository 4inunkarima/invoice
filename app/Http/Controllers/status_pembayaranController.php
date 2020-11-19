<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createstatus_pembayaranRequest;
use App\Http\Requests\Updatestatus_pembayaranRequest;
use App\Repositories\status_pembayaranRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class status_pembayaranController extends AppBaseController
{
    /** @var  status_pembayaranRepository */
    private $statusPembayaranRepository;

    public function __construct(status_pembayaranRepository $statusPembayaranRepo)
    {
        $this->statusPembayaranRepository = $statusPembayaranRepo;
    }

    /**
     * Display a listing of the status_pembayaran.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $statusPembayarans = $this->statusPembayaranRepository->all();

        return view('status_pembayarans.index')
            ->with('statusPembayarans', $statusPembayarans);
    }

    /**
     * Show the form for creating a new status_pembayaran.
     *
     * @return Response
     */
    public function create()
    {
        return view('status_pembayarans.create');
    }

    /**
     * Store a newly created status_pembayaran in storage.
     *
     * @param Createstatus_pembayaranRequest $request
     *
     * @return Response
     */
    public function store(Createstatus_pembayaranRequest $request)
    {
        $input = $request->all();

        $statusPembayaran = $this->statusPembayaranRepository->create($input);

        Flash::success('Status Pembayaran saved successfully.');

        return redirect(route('statusPembayarans.index'));
    }

    /**
     * Display the specified status_pembayaran.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $statusPembayaran = $this->statusPembayaranRepository->find($id);

        if (empty($statusPembayaran)) {
            Flash::error('Status Pembayaran not found');

            return redirect(route('statusPembayarans.index'));
        }

        return view('status_pembayarans.show')->with('statusPembayaran', $statusPembayaran);
    }

    /**
     * Show the form for editing the specified status_pembayaran.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $statusPembayaran = $this->statusPembayaranRepository->find($id);

        if (empty($statusPembayaran)) {
            Flash::error('Status Pembayaran not found');

            return redirect(route('statusPembayarans.index'));
        }

        return view('status_pembayarans.edit')->with('statusPembayaran', $statusPembayaran);
    }

    /**
     * Update the specified status_pembayaran in storage.
     *
     * @param int $id
     * @param Updatestatus_pembayaranRequest $request
     *
     * @return Response
     */
    public function update($id, Updatestatus_pembayaranRequest $request)
    {
        $statusPembayaran = $this->statusPembayaranRepository->find($id);

        if (empty($statusPembayaran)) {
            Flash::error('Status Pembayaran not found');

            return redirect(route('statusPembayarans.index'));
        }

        $statusPembayaran = $this->statusPembayaranRepository->update($request->all(), $id);

        Flash::success('Status Pembayaran updated successfully.');

        return redirect(route('statusPembayarans.index'));
    }

    /**
     * Remove the specified status_pembayaran from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $statusPembayaran = $this->statusPembayaranRepository->find($id);

        if (empty($statusPembayaran)) {
            Flash::error('Status Pembayaran not found');

            return redirect(route('statusPembayarans.index'));
        }

        $this->statusPembayaranRepository->delete($id);

        Flash::success('Status Pembayaran deleted successfully.');

        return redirect(route('statusPembayarans.index'));
    }
}
