<?php

namespace App\Http\Controllers;

use App\Models\Characteristic_Stereotype;
use Illuminate\Http\Request;

class CharacteristicStereotypeController extends Controller {

    private $model_characteristic_stereotype;

    public function __construct() {
        $this->model_characteristic_stereotype = new Characteristic_Stereotype();
    }
public function index()
    {
        $stereotypes = $this->model_characteristic_stereotype->get_all_characteristic_Stereotypes();
        return view('stereotype.index', compact('stereotypes'));
    }
    public function create()
    {
        return view('stereotype.create');
    }
    public function store(Request $request)
    {
        $options = $request->all();
        $this->model_characteristic_stereotype->store($options);
        return redirect()->route('admin.class')->with('success', 'Uma definição de estereótipo inserida.');
    }
    public function show($id)
    {
        $characteristic_stereotype = $this->model_characteristic_stereotype->get_characteristic_Stereotype($id);
        return view('stereotype.show', compact('class', 'factions'));
    }
    public function edit($id)
    {
        $characteristic_stereotype = $this->model_characteristic_stereotype->get_characteristic_Stereotype($id);
        return view('stereotype.edit', compact('characteristic_stereotype'));
    }
    public function update(Request $request, $id)
    {
        $options = $request->all();
        $this->model_characteristic_stereotype->update_wingout_model($id, $options);
        $characteristic_stereotype = $this->model_characteristic_stereotype->get_characteristic_Stereotype($id);
        return $characteristic_stereotype->value;
    }
    public function destroy($id)
    {
        $this->model_characteristic_stereotype->remove($id);
        return redirect()->route('admin.class')->with('success', 'Uma classe removida.');
    }
    //Demais métodos
    public function show_value($id)
    {
        $characteristic_stereotype = $this->model_characteristic_stereotype->get_characteristic_Stereotype($id);
        return $characteristic_stereotype->value;
    }
}
