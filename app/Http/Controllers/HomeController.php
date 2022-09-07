<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Class_Person;
use App\Models\Characteristic;
class HomeController extends Controller
{
    private $model;
    private $model_characteristic;
    public function __construct()
    {
        $this->model = new Class_Person();
        $this->model_characteristic = new Characteristic();
    }
    public function index()
    {
        $classes = $this->model->get_all_class_persons();
        $characteristics = $this->model_characteristic->get_all_characteristics_class(2);
        dd($characteristics);
        return view('welcome', compact('classes'));
    }
}
