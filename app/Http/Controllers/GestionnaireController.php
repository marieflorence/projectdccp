<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGestionnaireRequest;
use App\Http\Requests\UpdateGestionnaireRequest;
use App\Repositories\GestionnaireRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GestionnaireController extends AppBaseController
{
    /** @var  GestionnaireRepository */
    private $gestionnaireRepository;

    public function __construct(GestionnaireRepository $gestionnaireRepo)
    {
        $this->gestionnaireRepository = $gestionnaireRepo;
    }

    /**
     * Display a listing of the Gestionnaire.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->gestionnaireRepository->pushCriteria(new RequestCriteria($request));
        $gestionnaires = $this->gestionnaireRepository->all();

        return view('gestionnaires.index')
            ->with('gestionnaires', $gestionnaires);
    }

    /**
     * Show the form for creating a new Gestionnaire.
     *
     * @return Response
     */
    public function create()
    {
        return view('gestionnaires.create');
    }

    /**
     * Store a newly created Gestionnaire in storage.
     *
     * @param CreateGestionnaireRequest $request
     *
     * @return Response
     */
    public function store(CreateGestionnaireRequest $request)
    {
        $input = $request->all();

        $gestionnaire = $this->gestionnaireRepository->create($input);

        Flash::success('Gestionnaire saved successfully.');

        return redirect(route('gestionnaires.index'));
    }

    /**
     * Display the specified Gestionnaire.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gestionnaire = $this->gestionnaireRepository->findWithoutFail($id);

        if (empty($gestionnaire)) {
            Flash::error('Gestionnaire not found');

            return redirect(route('gestionnaires.index'));
        }

        return view('gestionnaires.show')->with('gestionnaire', $gestionnaire);
    }

    /**
     * Show the form for editing the specified Gestionnaire.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gestionnaire = $this->gestionnaireRepository->findWithoutFail($id);

        if (empty($gestionnaire)) {
            Flash::error('Gestionnaire not found');

            return redirect(route('gestionnaires.index'));
        }

        return view('gestionnaires.edit')->with('gestionnaire', $gestionnaire);
    }

    /**
     * Update the specified Gestionnaire in storage.
     *
     * @param  int              $id
     * @param UpdateGestionnaireRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGestionnaireRequest $request)
    {
        $gestionnaire = $this->gestionnaireRepository->findWithoutFail($id);

        if (empty($gestionnaire)) {
            Flash::error('Gestionnaire not found');

            return redirect(route('gestionnaires.index'));
        }

        $gestionnaire = $this->gestionnaireRepository->update($request->all(), $id);

        Flash::success('Gestionnaire updated successfully.');

        return redirect(route('gestionnaires.index'));
    }

    /**
     * Remove the specified Gestionnaire from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gestionnaire = $this->gestionnaireRepository->findWithoutFail($id);

        if (empty($gestionnaire)) {
            Flash::error('Gestionnaire not found');

            return redirect(route('gestionnaires.index'));
        }

        $this->gestionnaireRepository->delete($id);

        Flash::success('Gestionnaire deleted successfully.');

        return redirect(route('gestionnaires.index'));
    }
}
