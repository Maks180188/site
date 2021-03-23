<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubstanceRequest;
use App\Http\Requests\UpdateSubstanceRequest;
use App\Repositories\SubstanceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SubstanceController extends AppBaseController
{
    /** @var  SubstanceRepository */
    private $substanceRepository;

    public function __construct(SubstanceRepository $substanceRepo)
    {
        $this->substanceRepository = $substanceRepo;
    }

    /**
     * Display a listing of the Substance.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $substances = $this->substanceRepository->all();

        return view('substances.index')
            ->with('substances', $substances);
    }

    /**
     * Show the form for creating a new Substance.
     *
     * @return Response
     */
    public function create()
    {
        return view('substances.create');
    }

    /**
     * Store a newly created Substance in storage.
     *
     * @param CreateSubstanceRequest $request
     *
     * @return Response
     */
    public function store(CreateSubstanceRequest $request)
    {
        $input = $request->all();

        $substance = $this->substanceRepository->create($input);

        Flash::success('Substance saved successfully.');

        return redirect(route('substances.index'));
    }

    /**
     * Display the specified Substance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $substance = $this->substanceRepository->find($id);

        if (empty($substance)) {
            Flash::error('Substance not found');

            return redirect(route('substances.index'));
        }

        return view('substances.show')->with('substance', $substance);
    }

    /**
     * Show the form for editing the specified Substance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $substance = $this->substanceRepository->find($id);

        if (empty($substance)) {
            Flash::error('Substance not found');

            return redirect(route('substances.index'));
        }

        return view('substances.edit')->with('substance', $substance);
    }

    /**
     * Update the specified Substance in storage.
     *
     * @param int $id
     * @param UpdateSubstanceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubstanceRequest $request)
    {
        $substance = $this->substanceRepository->find($id);

        if (empty($substance)) {
            Flash::error('Substance not found');

            return redirect(route('substances.index'));
        }

        $substance = $this->substanceRepository->update($request->all(), $id);

        Flash::success('Substance updated successfully.');

        return redirect(route('substances.index'));
    }

    /**
     * Remove the specified Substance from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $substance = $this->substanceRepository->find($id);

        if (empty($substance)) {
            Flash::error('Substance not found');

            return redirect(route('substances.index'));
        }

        $this->substanceRepository->delete($id);

        Flash::success('Substance deleted successfully.');

        return redirect(route('substances.index'));
    }
}
