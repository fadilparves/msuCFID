<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesubContentTwoRepositoryRequest;
use App\Http\Requests\UpdatesubContentTwoRepositoryRequest;
use App\Repositories\subContentTwoRepositoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\subContentTwoRepository;

class subContentTwoRepositoryController extends AppBaseController
{
    private $subContentTwoRepositoryRepository;

    public function __construct(subContentTwoRepositoryRepository $subContentTwoRepositoryRepo)
    {
        $this->subContentTwoRepositoryRepository = $subContentTwoRepositoryRepo;
    }

    public function index(Request $request)
    {
        $this->subContentTwoRepositoryRepository->pushCriteria(new RequestCriteria($request));
        $subContentTwoRepositories = $this->subContentTwoRepositoryRepository->all();

        return view('sub_content_two_repositories.index')
            ->with('subContentTwoRepositories', $subContentTwoRepositories);
    }

 
    public function create($sub_content_one_id)
    {
        //$last_sub_number = $this->subContentTwoRepositoryRepository->orderBy('created_at', 'desc')->first();
        $scoid = $sub_content_one_id;
        $last_sub_number = subContentTwoRepository::where('sub_content_one_id', $sub_content_one_id)->orderBy('created_at', 'desc')->first();
        return view('sub_content_two_repositories.create')->with('last_sub_number', $last_sub_number)->with('scoid', $scoid);
    }

 
    public function store(CreatesubContentTwoRepositoryRequest $request)
    {
        $input = $request->all();

        $subContentTwoRepository = $this->subContentTwoRepositoryRepository->create($input);

        Flash::success('Sub Content Two Repository saved successfully.');

        return redirect()->route('subContentOnes.show', ['id' => $subContentTwoRepository->sub_content_one_id]);
    }


    public function show($id)
    {
        $subContentTwoRepository = $this->subContentTwoRepositoryRepository->findWithoutFail($id);

        if (empty($subContentTwoRepository)) {
            Flash::error('Sub Content Two Repository not found');

            return redirect(route('subContentTwoRepositories.index'));
        }

        return view('sub_content_two_repositories.show')->with('subContentTwoRepository', $subContentTwoRepository);
    }


    public function edit($id)
    {
        $subContentTwoRepository = $this->subContentTwoRepositoryRepository->findWithoutFail($id);

        if (empty($subContentTwoRepository)) {
            Flash::error('Sub Content Two Repository not found');

            return redirect(route('subContentTwoRepositories.index'));
        }

        return view('sub_content_two_repositories.edit')->with('subContentTwoRepository', $subContentTwoRepository);
    }

 
    public function update($id, UpdatesubContentTwoRepositoryRequest $request)
    {
        $subContentTwoRepository = $this->subContentTwoRepositoryRepository->findWithoutFail($id);

        if (empty($subContentTwoRepository)) {
            Flash::error('Sub Content Two Repository not found');

            return redirect(route('subContentTwoRepositories.index'));
        }

        $subContentTwoRepository = $this->subContentTwoRepositoryRepository->update($request->all(), $id);

        Flash::success('Sub Content Two Repository updated successfully.');

        return redirect()->route('subContentOnes.show', ['id' => $subContentTwoRepository->sub_content_one_id]);
    }


    public function destroy($id)
    {
        $subContentTwoRepository = $this->subContentTwoRepositoryRepository->findWithoutFail($id);

        if (empty($subContentTwoRepository)) {
            Flash::error('Sub Content Two Repository not found');

            return redirect(route('subContentTwoRepositories.index'));
        }

        $this->subContentTwoRepositoryRepository->delete($id);

        Flash::success('Sub Content Two Repository deleted successfully.');

        return redirect()->route('subContentOnes.show', ['id' => $subContentTwoRepository->sub_content_one_id]);
    }
}
