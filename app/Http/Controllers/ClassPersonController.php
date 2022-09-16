<?php

namespace App\Http\Controllers;

use App\Models\Class_Person;
use Illuminate\Http\Request;

class ClassPersonController extends Controller
{
    private $model;
    public function __construct() {
        $this->model = new Class_Person();
    }

    public function index()
    {
        $classes = $this->model->get_all_class_persons();
        return view('class.index', compact('classes'));
    }
    public function create()
    {
        return view('class.create');
    }
    public function store(Request $request)
    {
        $options = $request->all();
        $this->model->store($options);
        return redirect()->route('admin.class')->with('success', 'Uma classe inserida.');
    }
    public function show($id)
    {
        $class = $this->model->get_class_person($id);
        $factions = $this->model->get_all_factions($id);
        return view('class.show', compact('class', 'factions'));
    }
    public function edit($id)
    {
        $class = $this->model->get_class_person($id);
        $characteristics = $this->model->get_all_characteristics($id);
//        return view('class.edit', compact('class'));
        return view('class.showvar', compact('characteristics'));
    }
    public function update(Request $request, $id)
    {
        $options = $request->all();
        $this->model->update_wingout_model($id, $options);
        return redirect()->route('admin.class')->with('success', 'Uma classe alterada.');
    }
    public function destroy($id)
    {
        $this->model->remove($id);
        return redirect()->route('admin.class')->with('success', 'Uma classe removida.');
    }
}
