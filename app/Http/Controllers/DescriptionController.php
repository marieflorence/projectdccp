<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDescriptionRequest;
use App\Http\Requests\UpdateDescriptionRequest;
use App\Repositories\DescriptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DescriptionController extends AppBaseController
{
    /** @var  DescriptionRepository */
    private $descriptionRepository;

    public function __construct(DescriptionRepository $descriptionRepo)
    {
        $this->descriptionRepository = $descriptionRepo;
    }

    /**
     * Display a listing of the Description.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->descriptionRepository->pushCriteria(new RequestCriteria($request));
        $descriptions = $this->descriptionRepository->all();

        return view('descriptions.index')
            ->with('descriptions', $descriptions);
    }

    /**
     * Show the form for creating a new Description.
     *
     * @return Response
     */
    public function create()
    {
        return view('descriptions.create');
    }

    /**
     * Store a newly created Description in storage.
     *
     * @param CreateDescriptionRequest $request
     *
     * @return Response
     */
    public function store(CreateDescriptionRequest $request)
    {
        $input = $request->all();

        $description = $this->descriptionRepository->create($input);

        Flash::success('Description saved successfully.');

        return redirect(route('descriptions.index'));
    }

    /**
     * Display the specified Description.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $description = $this->descriptionRepository->findWithoutFail($id);

        if (empty($description)) {
            Flash::error('Description not found');

            return redirect(route('descriptions.index'));
        }

        return view('descriptions.show')->with('description', $description);
    }

    /**
     * Show the form for editing the specified Description.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $description = $this->descriptionRepository->findWithoutFail($id);

        if (empty($description)) {
            Flash::error('Description not found');

            return redirect(route('descriptions.index'));
        }

        return view('descriptions.edit')->with('description', $description);
    }

    /**
     * Update the specified Description in storage.
     *
     * @param  int              $id
     * @param UpdateDescriptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDescriptionRequest $request)
    {
        $description = $this->descriptionRepository->findWithoutFail($id);

        if (empty($description)) {
            Flash::error('Description not found');

            return redirect(route('descriptions.index'));
        }

        $description = $this->descriptionRepository->update($request->all(), $id);

        Flash::success('Description updated successfully.');

        return redirect(route('descriptions.index'));
    }

    /**
     * Remove the specified Description from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $description = $this->descriptionRepository->findWithoutFail($id);

        if (empty($description)) {
            Flash::error('Description not found');

            return redirect(route('descriptions.index'));
        }

        $this->descriptionRepository->delete($id);

        Flash::success('Description deleted successfully.');

        return redirect(route('descriptions.index'));
    }
}
