<?php

namespace App\Http\Controllers;

use App\Http\Services\Stereotype_Service;
use App\Models\Class_Person;
use App\Models\Stereotype;
use Illuminate\Http\Request;

class StereotypeController extends Controller
{
    private $model_stereotype;
    private $model_class_person;
    private $service;
    public function __construct() {
        $this->model_stereotype = new Stereotype();
        $this->model_class_person = new Class_Person();
        $this->service = new Stereotype_Service();
    }

     public function index()
    {
        $stereotypes = $this->model_stereotype->get_all_stereotypes_with_class_information();
        return view('stereotype.index', compact('stereotypes'));
    }
    public function create()
    {
        $classes = $this->model_class_person->get_all_class_persons();
        return view('stereotype.create', compact('classes'));
    }
    public function store(Request $request)
    {
        $options = $request->all();
        $id = $this->model_stereotype->store($options);
        $this->service->create_new_characteristic_stereotypes($id);
        $stereotype = $this->model_stereotype->get_stereotype($id);
        return redirect()->route('admin.stereotype.edit', $stereotype->id)->with('success', 'Um estereótipo inserido.');
    }
    public function show($id)
    {
        $stereotype = $this->model_stereotype->get_stereotype($id);
        return view('stereotype.show', compact('stereotype'));
    }
    public function edit($id)
    {
        $stereotype = $this->model_stereotype->get_stereotype($id);
        $factions = $this->service->get_all_factions($id);
        $class = $this->model_class_person->get_class_person($stereotype->class_id);
        return view('stereotype.edit', compact('stereotype', 'factions', 'class'));
    }
    public function update(Request $request, $id)
    {
        $options = $request->all();
        $this->model_stereotype->update_wingout_model($id, $options);
        $stereotype = $this->model_stereotype->get_stereotype($id);
        return redirect()->route('admin.stereotype.edit', $stereotype->id)->with('success', 'Um estereótipo alterado.');
    }
    public function destroy($id)
    {
        $this->model_stereotype->remove($id);
        return redirect()->route('admin.stereotype')->with('success', 'Um estereótipo removido.');
    }
}
