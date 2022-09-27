<?php

namespace App\Http\Controllers;

use App\Http\Services\Stereotype_Service;
use App\Models\Stereotype;
use Illuminate\Http\Request;

class StereotypeController extends Controller
{
    private $model_stereotype;
    private $service;
    public function __construct() {
        $this->model_stereotype = new Stereotype();
        $this->service = new Stereotype_Service();
    }

     public function index()
    {
        $stereotypes = $this->model_stereotype->get_all_class_persons();
        return view('stereotype.index', compact('stereotypes'));
    }
    public function create()
    {
        return view('stereotype.create');
    }
    public function store(Request $request)
    {
        $options = $request->all();
        $this->model_stereotype->store($options);
        return redirect()->route('admin.stereotype')->with('success', 'Um estereótipo inserido.');
    }
    public function show($id)
    {
        $stereotype = $this->model_stereotype->get_class_person($id);
        return view('stereotype.show', compact('stereotype'));
    }
    public function edit($id)
    {
        $stereotype = $this->model_stereotype->get_class_person($id);
        return view('stereotype.edit', compact('stereotype'));
    }
    public function update(Request $request, $id)
    {
        $options = $request->all();
        $this->model_stereotype->update_wingout_model($id, $options);
        return redirect()->route('admin.stereotype')->with('success', 'Um estereótipo alterado.');
    }
    public function destroy($id)
    {
        $this->model_stereotype->remove($id);
        return redirect()->route('admin.stereotype')->with('success', 'Um estereótipo removido.');
    }
}
