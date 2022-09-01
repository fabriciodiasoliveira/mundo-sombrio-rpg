<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Class_Person;
class HomeController extends Controller
{
    private $model;
    public function __construct()
    {
        $this->model = new Class_Person();
    }
    public function index()
    {
        $classes = $this->model->get_all_class_persons();
        return view('welcome', compact('classes'));
    }
}
