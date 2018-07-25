<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTraitementRequest;
use App\Http\Requests\UpdateTraitementRequest;
use App\Repositories\TraitementRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TraitementController extends AppBaseController
{
    /** @var  TraitementRepository */
    private $traitementRepository;

    public function __construct(TraitementRepository $traitementRepo)
    {
        $this->traitementRepository = $traitementRepo;
    }

    /**
     * Display a listing of the Traitement.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->traitementRepository->pushCriteria(new RequestCriteria($request));
        $traitements = $this->traitementRepository->all();

        return view('traitements.index')
            ->with('traitements', $traitements);
    }

    /**
     * Show the form for creating a new Traitement.
     *
     * @return Response
     */
    public function create()
    {
        return view('traitements.create');
    }

    /**
     * Store a newly created Traitement in storage.
     *
     * @param CreateTraitementRequest $request
     *
     * @return Response
     */
    public function store(CreateTraitementRequest $request)
    {
        $input = $request->all();

        $traitement = $this->traitementRepository->create($input);

        Flash::success('Traitement saved successfully.');

        return redirect(route('traitements.index'));
    }

    /**
     * Display the specified Traitement.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $traitement = $this->traitementRepository->findWithoutFail($id);

        if (empty($traitement)) {
            Flash::error('Traitement not found');

            return redirect(route('traitements.index'));
        }

        return view('traitements.show')->with('traitement', $traitement);
    }

    /**
     * Show the form for editing the specified Traitement.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $traitement = $this->traitementRepository->findWithoutFail($id);

        if (empty($traitement)) {
            Flash::error('Traitement not found');

            return redirect(route('traitements.index'));
        }

        return view('traitements.edit')->with('traitement', $traitement);
    }

    /**
     * Update the specified Traitement in storage.
     *
     * @param  int              $id
     * @param UpdateTraitementRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTraitementRequest $request)
    {
        $traitement = $this->traitementRepository->findWithoutFail($id);

        if (empty($traitement)) {
            Flash::error('Traitement not found');

            return redirect(route('traitements.index'));
        }

        $traitement = $this->traitementRepository->update($request->all(), $id);

        Flash::success('Traitement updated successfully.');

        return redirect(route('traitements.index'));
    }

    /**
     * Remove the specified Traitement from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $traitement = $this->traitementRepository->findWithoutFail($id);

        if (empty($traitement)) {
            Flash::error('Traitement not found');

            return redirect(route('traitements.index'));
        }

        $this->traitementRepository->delete($id);

        Flash::success('Traitement deleted successfully.');

        return redirect(route('traitements.index'));
    }
}
