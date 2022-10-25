<?php

namespace App\Http\Controllers;

use App\Http\Services\Character_Service;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Auth;

class CharacterController extends Controller
{
    private $model;
    private $service;
    public function __construct() {
        $this->model = new Character();
        $this->service = new Character_Service();
    }
    //Métodos comuns
    public function index()
    {
        $characters = $this->model->get_all_characters();
        Log::notice('Obtida a lista de personagens');
        return view('class.index', compact('characters'));
    }
    public function create($class_id)
    {
        $class_person = $this->service->get_class_person($class_id);
        return view('character.create', compact('class_id', 'class_person'));
    }
    public function store(Request $request)
    {
        $options = [];
        $options['name'] = $request['name'];
        $options['description'] = $request['description'];
        $options['stereotype_id'] = $this->service->store_stereotype($request);
        $options['user_id'] = Auth::user()->id;
        $character_id = $this->model->store($options);
        $character = $this->model->get_character_player($character_id);
//        return redirect()->route('character.edit', $character->id)->with('success', 'Um personagem inserido.');
        return redirect()->route('home')->with('success', 'personagem criado.');
    }
    public function show($id)
    {
        $character = $this->model->get_character($id);
        return view('class.show', compact('class', 'factions'));
    }
    public function edit($id)
    {
        $character = $this->model->get_character($id);
        return view('class.edit', compact('class', 'characteristics'));
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
    //Demais métodos
    public function get_all_characters_player(){
        $characters = $this->model->get_all_characters_player(Auth::user()->id);
        return view('character.index', compact('characters'));
    }
}
