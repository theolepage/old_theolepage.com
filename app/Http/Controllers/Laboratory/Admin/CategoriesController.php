<?php

namespace App\Http\Controllers\Laboratory\Admin;

use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends AdminController {

    protected $resource = 'categories';

    protected $model = Category::class;

    /**
     * Creates a category.
     *
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        $this->model::create($request->validated());

        return redirect()
            ->route('admin.' . $this->resource . '.index')
            ->with('success', 'Category created successfully.');
    }

    /**
     * Updates a category.
     *
     * @param CategoryRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CategoryRequest $request, int $id)
    {
        $this->model::findOrFail($id)->update($request->validated());

        return redirect()
            ->route('admin.' . $this->resource . '.index')
            ->with('success', 'Category updated successfully.');
    }

    /**
     * Deletes a category.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id)
    {
        $this->model::findOrFail($id)->delete();

        return redirect()
            ->route('admin.' . $this->resource . '.index')
            ->with('success', 'Category deleted successfully.');
    }

}
