<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProspectsRequest;
use App\Http\Requests\UpdateProspectsRequest;
use App\Repositories\ProspectsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProspectsController extends AppBaseController
{
    /** @var  ProspectsRepository */
    private $prospectsRepository;

    public function __construct(ProspectsRepository $prospectsRepo)
    {
        $this->prospectsRepository = $prospectsRepo;
    }

    /**
     * Display a listing of the Prospects.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->prospectsRepository->pushCriteria(new RequestCriteria($request));
        $prospects = $this->prospectsRepository->all();

        return view('prospects.index')
            ->with('prospects', $prospects);
    }

    /**
     * Show the form for creating a new Prospects.
     *
     * @return Response
     */
    public function create()
    {
        return view('prospects.create');
    }

    /**
     * Store a newly created Prospects in storage.
     *
     * @param CreateProspectsRequest $request
     *
     * @return Response
     */
    public function store(CreateProspectsRequest $request)
    {
        $input = $request->all();

        $prospects = $this->prospectsRepository->create($input);

        Flash::success('Prospects saved successfully.');

        return redirect(route('prospects.index'));
    }

    /**
     * Display the specified Prospects.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prospects = $this->prospectsRepository->findWithoutFail($id);

        if (empty($prospects)) {
            Flash::error('Prospects not found');

            return redirect(route('prospects.index'));
        }

        return view('prospects.show')->with('prospects', $prospects);
    }

    /**
     * Show the form for editing the specified Prospects.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prospects = $this->prospectsRepository->findWithoutFail($id);

        if (empty($prospects)) {
            Flash::error('Prospects not found');

            return redirect(route('prospects.index'));
        }

        return view('prospects.edit')->with('prospects', $prospects);
    }

    /**
     * Update the specified Prospects in storage.
     *
     * @param  int              $id
     * @param UpdateProspectsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProspectsRequest $request)
    {
        $prospects = $this->prospectsRepository->findWithoutFail($id);

        if (empty($prospects)) {
            Flash::error('Prospects not found');

            return redirect(route('prospects.index'));
        }

        $prospects = $this->prospectsRepository->update($request->all(), $id);

        Flash::success('Prospects updated successfully.');

        return redirect(route('prospects.index'));
    }

    /**
     * Remove the specified Prospects from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prospects = $this->prospectsRepository->findWithoutFail($id);

        if (empty($prospects)) {
            Flash::error('Prospects not found');

            return redirect(route('prospects.index'));
        }

        $this->prospectsRepository->delete($id);

        Flash::success('Prospects deleted successfully.');

        return redirect(route('prospects.index'));
    }
}
