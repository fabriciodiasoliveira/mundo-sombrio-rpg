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
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        $class = $this->model->get_class_person($id);
        return view('class.show', compact('class'));
    }
    public function show_one($id)
    {
        $class = $this->model->get_class_person($id);
        return view('components.class.show', compact('class'));
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
        //
    }
}
