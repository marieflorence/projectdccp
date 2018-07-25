<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfilRequest;
use App\Http\Requests\UpdateProfilRequest;
use App\Repositories\ProfilRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProfilController extends AppBaseController
{
    /** @var  ProfilRepository */
    private $profilRepository;

    public function __construct(ProfilRepository $profilRepo)
    {
        $this->profilRepository = $profilRepo;
    }

    /**
     * Display a listing of the Profil.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->profilRepository->pushCriteria(new RequestCriteria($request));
        $profils = $this->profilRepository->all();

        return view('profils.index')
            ->with('profils', $profils);
    }

    /**
     * Show the form for creating a new Profil.
     *
     * @return Response
     */
    public function create()
    {
        return view('profils.create');
    }

    /**
     * Store a newly created Profil in storage.
     *
     * @param CreateProfilRequest $request
     *
     * @return Response
     */
    public function store(CreateProfilRequest $request)
    {
        $input = $request->all();

        $profil = $this->profilRepository->create($input);

        Flash::success('Profil saved successfully.');

        return redirect(route('profils.index'));
    }

    /**
     * Display the specified Profil.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $profil = $this->profilRepository->findWithoutFail($id);

        if (empty($profil)) {
            Flash::error('Profil not found');

            return redirect(route('profils.index'));
        }

        return view('profils.show')->with('profil', $profil);
    }

    /**
     * Show the form for editing the specified Profil.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $profil = $this->profilRepository->findWithoutFail($id);

        if (empty($profil)) {
            Flash::error('Profil not found');

            return redirect(route('profils.index'));
        }

        return view('profils.edit')->with('profil', $profil);
    }

    /**
     * Update the specified Profil in storage.
     *
     * @param  int              $id
     * @param UpdateProfilRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProfilRequest $request)
    {
        $profil = $this->profilRepository->findWithoutFail($id);

        if (empty($profil)) {
            Flash::error('Profil not found');

            return redirect(route('profils.index'));
        }

        $profil = $this->profilRepository->update($request->all(), $id);

        Flash::success('Profil updated successfully.');

        return redirect(route('profils.index'));
    }

    /**
     * Remove the specified Profil from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $profil = $this->profilRepository->findWithoutFail($id);

        if (empty($profil)) {
            Flash::error('Profil not found');

            return redirect(route('profils.index'));
        }

        $this->profilRepository->delete($id);

        Flash::success('Profil deleted successfully.');

        return redirect(route('profils.index'));
    }
}
