<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAgenceRequest;
use App\Http\Requests\UpdateAgenceRequest;
use App\Repositories\AgenceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AgenceController extends AppBaseController
{
    /** @var  AgenceRepository */
    private $agenceRepository;

    public function __construct(AgenceRepository $agenceRepo)
    {
        $this->agenceRepository = $agenceRepo;
    }

    /**
     * Display a listing of the Agence.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->agenceRepository->pushCriteria(new RequestCriteria($request));
        $agences = $this->agenceRepository->all();

        return view('agences.index')
            ->with('agences', $agences);
    }

    /**
     * Show the form for creating a new Agence.
     *
     * @return Response
     */
    public function create()
    {
        return view('agences.create');
    }

    /**
     * Store a newly created Agence in storage.
     *
     * @param CreateAgenceRequest $request
     *
     * @return Response
     */
    public function store(CreateAgenceRequest $request)
    {
        $input = $request->all();

        $agence = $this->agenceRepository->create($input);

        Flash::success('Agence saved successfully.');

        return redirect(route('agences.index'));
    }

    /**
     * Display the specified Agence.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $agence = $this->agenceRepository->findWithoutFail($id);

        if (empty($agence)) {
            Flash::error('Agence not found');

            return redirect(route('agences.index'));
        }

        return view('agences.show')->with('agence', $agence);
    }

    /**
     * Show the form for editing the specified Agence.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $agence = $this->agenceRepository->findWithoutFail($id);

        if (empty($agence)) {
            Flash::error('Agence not found');

            return redirect(route('agences.index'));
        }

        return view('agences.edit')->with('agence', $agence);
    }

    /**
     * Update the specified Agence in storage.
     *
     * @param  int              $id
     * @param UpdateAgenceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAgenceRequest $request)
    {
        $agence = $this->agenceRepository->findWithoutFail($id);

        if (empty($agence)) {
            Flash::error('Agence not found');

            return redirect(route('agences.index'));
        }

        $agence = $this->agenceRepository->update($request->all(), $id);

        Flash::success('Agence updated successfully.');

        return redirect(route('agences.index'));
    }

    /**
     * Remove the specified Agence from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $agence = $this->agenceRepository->findWithoutFail($id);

        if (empty($agence)) {
            Flash::error('Agence not found');

            return redirect(route('agences.index'));
        }

        $this->agenceRepository->delete($id);

        Flash::success('Agence deleted successfully.');

        return redirect(route('agences.index'));
    }
}
