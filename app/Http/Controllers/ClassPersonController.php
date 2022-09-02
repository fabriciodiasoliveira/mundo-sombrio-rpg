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
        $data = $request->all();
        $this->model->store($data);
        return redirect()->route('admin.class')->with('success', 'Uma classe inserida.');
    }
    public function show($id)
    {
        $class = $this->model->get_class_person($id);
        return view('class.show', compact('class'));
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        $this->model->remove($id);
        return redirect()->route('admin.class')->with('success', 'Uma classe removida.');
    }
}
