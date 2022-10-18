<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Class_Person;
use Auth;
class HomeController extends Controller
{
    private $model;
    private $model_character;
    public function __construct()
    {
        $this->model = new Class_Person();
        $this->model_character = new Character();
    }
    public function index()
    {
        $classes = $this->model->get_all_class_persons();
        if(Auth::user()){
            $characters = $this->model_character->get_all_characters_player(Auth::user()->id);
            return view('welcome', compact('classes', 'characters'));
        } else {
            return view('welcome', compact('classes'));
        }
    }
}
