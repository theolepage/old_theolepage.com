<?php

namespace App\Http\Controllers\Laboratory\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected $resource;

    protected $model;

    /**
     * Returns an Admin view.
     *
     * @param $view
     * @param $data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($view, $data)
    {
        return view($view, $data)->with('resource', $this->resource);
    }

    /**
     * Lists all elements.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $items = $this->model::all();
        return $this->view('laboratory.admin.index', compact('items'));
    }

    /**
     * Renders the view for creating an element.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $item = new $this->model();
        return $this->view('laboratory.admin.create', compact('item'));
    }

    /**
     * Renders view for editing an element.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $item = $this->model::findOrFail($id);
        return $this->view('laboratory.admin.edit', compact('item'));
    }

}
