<?php

namespace App\Http\Controllers;

use App\Http\Services\Character_Service;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
}
