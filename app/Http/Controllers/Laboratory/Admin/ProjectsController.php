<?php

namespace App\Http\Controllers\Laboratory\Admin;

use App\Category;
use App\Contributor;
use App\Http\Requests\ProjectRequest;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends AdminController {

    protected $resource = 'projects';
    protected $model = Project::class;

    private function collectionToArray($objects)
    {
        $result = [];
        foreach ($objects as $object)
        {
            $result[$object->id] = $object->name;
        }
        return $result;
    }



    /**
     * Renders the view for creating a project.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return parent::create()
            ->with('categories', $this->collectionToArray(Category::all()))
            ->with('contributors', $this->collectionToArray(Contributor::all()));
    }

    /**
     * Creates a project.
     *
     * @param ProjectRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProjectRequest $request)
    {
        $item = $this->model::create($request->validated());
        $item->contributors()->sync($request->get('contributors'));

        return redirect()
            ->route('admin.' . $this->resource . '.index')
            ->with('success', 'Project created successfully.');
    }

    /**
     * Renders view for editing a project.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $currentContributors = [];
        foreach (Project::findOrFail($id)->contributors as $contributor)
        {
            $currentContributors[] = $contributor->id;
        }

        return parent::edit($id)
            ->with('currentContributors', $currentContributors)
            ->with('categories', $this->collectionToArray(Category::all()))
            ->with('contributors', $this->collectionToArray(Contributor::all()));
    }

    /**
     * Updates an project.
     *
     * @param ProjectRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProjectRequest $request, int $id)
    {
        $project = $this->model::findOrFail($id);
        $project->update($request->validated());
        $project->contributors()->sync($request->get('contributors'));

        return redirect()
            ->route('admin.' . $this->resource . '.index')
            ->with('success', 'Project updated successfully.');
    }

    /**
     * Deletes an project.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id)
    {
        $this->model::findOrFail($id)->delete();

        return redirect()
            ->route('admin.' . $this->resource . '.index')
            ->with('success', 'Project deleted successfully.');
    }

}
