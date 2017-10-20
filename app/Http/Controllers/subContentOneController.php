<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesubContentOneRequest;
use App\Http\Requests\UpdatesubContentOneRequest;
use App\Repositories\subContentOneRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Auth;
use DB;


class subContentOneController extends AppBaseController
{
    /** @var  subContentOneRepository */
    private $subContentOneRepository;

    public function __construct(subContentOneRepository $subContentOneRepo)
    {
        $this->subContentOneRepository = $subContentOneRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the subContentOne.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->subContentOneRepository->pushCriteria(new RequestCriteria($request));
        $subContentOnes = $this->subContentOneRepository->all();

        return view('sub_content_ones.index')
            ->with('subContentOnes', $subContentOnes);
    }

    /**
     * Show the form for creating a new subContentOne.
     *
     * @return Response
     */
    public function create()
    {
        $last_sub_number = $this->subContentOneRepository->orderBy('created_at', 'desc')->first();
        return view('sub_content_ones.create')->with('last_sub_number', $last_sub_number);
    }

    /**
     * Store a newly created subContentOne in storage.
     *
     * @param CreatesubContentOneRequest $request
     *
     * @return Response
     */
    public function store(CreatesubContentOneRequest $request)
    {
        $input = $request->all();

        $subContentOne = $this->subContentOneRepository->create($input);

        Flash::success('Sub Content One saved successfully.');

        return redirect(route('subContentOnes.index'));
    }

    /**
     * Display the specified subContentOne.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subContentOne = $this->subContentOneRepository->findWithoutFail($id);
        $subContentTwoRepositories = \App\Models\subContentTwoRepository::where('sub_content_one_id', $id)->get();

        if (empty($subContentOne)) {
            Flash::error('Sub Content One not found');

            return redirect(route('subContentOnes.index'));
        }

        return view('sub_content_ones.show')->with('subContentOne', $subContentOne)->with('subContentTwoRepositories', $subContentTwoRepositories);
    }

    /**
     * Show the form for editing the specified subContentOne.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subContentOne = $this->subContentOneRepository->findWithoutFail($id);

        if (empty($subContentOne)) {
            Flash::error('Sub Content One not found');

            return redirect(route('subContentOnes.index'));
        }

        return view('sub_content_ones.edit')->with('subContentOne', $subContentOne);
    }

    /**
     * Update the specified subContentOne in storage.
     *
     * @param  int              $id
     * @param UpdatesubContentOneRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesubContentOneRequest $request)
    {
        $subContentOne = $this->subContentOneRepository->findWithoutFail($id);

        if (empty($subContentOne)) {
            Flash::error('Sub Content One not found');

            return redirect(route('subContentOnes.index'));
        }

        $subContentOne = $this->subContentOneRepository->update($request->all(), $id);

        Flash::success('Sub Content One updated successfully.');

        return redirect(route('subContentOnes.index'));
    }

    /**
     * Remove the specified subContentOne from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subContentOne = $this->subContentOneRepository->findWithoutFail($id);

        if (empty($subContentOne)) {
            Flash::error('Sub Content One not found');

            return redirect(route('subContentOnes.index'));
        }

        $this->subContentOneRepository->delete($id);

        Flash::success('Sub Content One deleted successfully.');

        return redirect(route('subContentOnes.index'));
    }
}
