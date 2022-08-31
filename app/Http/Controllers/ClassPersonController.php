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
    public function show(Class_Person $class_Person)
    {
        //
    }
    public function edit(Class_Person $class_Person)
    {
        //
    }
    public function update(Request $request, Class_Person $class_Person)
    {
        //
    }
    public function destroy(Class_Person $class_Person)
    {
        //
    }
}
