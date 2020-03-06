<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiosRequest;
use App\Http\Requests\UpdateServiosRequest;
use App\Repositories\ServiosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ServiosController extends AppBaseController
{
    /** @var  ServiosRepository */
    private $serviosRepository;

    public function __construct(ServiosRepository $serviosRepo)
    {
        $this->serviosRepository = $serviosRepo;
    }

    /**
     * Display a listing of the Servios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $servios = $this->serviosRepository->paginate(10);

        return view('servios.index')
            ->with('servios', $servios);
    }

    /**
     * Show the form for creating a new Servios.
     *
     * @return Response
     */
    public function create()
    {
        return view('servios.create');
    }

    /**
     * Store a newly created Servios in storage.
     *
     * @param CreateServiosRequest $request
     *
     * @return Response
     */
    public function store(CreateServiosRequest $request)
    {
        $input = $request->all();

        $servios = $this->serviosRepository->create($input);

        Flash::success('Servios saved successfully.');

        return redirect(route('servios.index'));
    }

    /**
     * Display the specified Servios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servios = $this->serviosRepository->find($id);

        if (empty($servios)) {
            Flash::error('Servios not found');

            return redirect(route('servios.index'));
        }

        return view('servios.show')->with('servios', $servios);
    }

    /**
     * Show the form for editing the specified Servios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servios = $this->serviosRepository->find($id);

        if (empty($servios)) {
            Flash::error('Servios not found');

            return redirect(route('servios.index'));
        }

        return view('servios.edit')->with('servios', $servios);
    }

    /**
     * Update the specified Servios in storage.
     *
     * @param int $id
     * @param UpdateServiosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiosRequest $request)
    {
        $servios = $this->serviosRepository->find($id);

        if (empty($servios)) {
            Flash::error('Servios not found');

            return redirect(route('servios.index'));
        }

        $servios = $this->serviosRepository->update($request->all(), $id);

        Flash::success('Servios updated successfully.');

        return redirect(route('servios.index'));
    }

    /**
     * Remove the specified Servios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servios = $this->serviosRepository->find($id);

        if (empty($servios)) {
            Flash::error('Servios not found');

            return redirect(route('servios.index'));
        }

        $this->serviosRepository->delete($id);

        Flash::success('Servios deleted successfully.');

        return redirect(route('servios.index'));
    }
}
