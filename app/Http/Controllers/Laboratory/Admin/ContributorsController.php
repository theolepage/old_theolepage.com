<?php

namespace App\Http\Controllers\Laboratory\Admin;

use App\Contributor;
use App\Http\Requests\ContributorRequest;

class ContributorsController extends AdminController {

    protected $resource = 'contributors';

    protected $model = Contributor::class;

    /**
     * Creates a contributor.
     *
     * @param ContributorRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContributorRequest $request)
    {
        $this->model::create($request->validated());

        return redirect()
            ->route('admin.' . $this->resource . '.index')
            ->with('success', 'Contributor created successfully.');
    }

    /**
     * Updates a contributor.
     *
     * @param ContributorRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ContributorRequest $request, int $id)
    {
        $this->model::findOrFail($id)->update($request->validated());

        return redirect()
            ->route('admin.' . $this->resource . '.index')
            ->with('success', 'Contributor updated successfully.');
    }

    /**
     * Deletes an contributor.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id)
    {
        $this->model::findOrFail($id)->delete();

        return redirect()
            ->route('admin.' . $this->resource . '.index')
            ->with('success', 'Contributor deleted successfully.');
    }

}
