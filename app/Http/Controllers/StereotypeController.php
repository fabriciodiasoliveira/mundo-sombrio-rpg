<?php

namespace App\Http\Controllers;

use App\Http\Services\Stereotype_Service;
use App\Models\Class_Person;
use App\Models\Stereotype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StereotypeController extends Controller
{
    //
    private $model_stereotype;
    private $model_class_person;
    private $service;
    public function __construct() {
        $this->model_stereotype = new Stereotype();
        $this->model_class_person = new Class_Person();
        $this->service = new Stereotype_Service();
    }

     public function index()
    {
        $stereotypes = $this->model_stereotype->get_all_stereotypes_with_class_information();
        Log::notice('Obtida a lista de estereótipos');
        return view('stereotype.index', compact('stereotypes'));
    }
    public function create()
    {
        $classes = $this->model_class_person->get_all_class_persons();
        return view('stereotype.create', compact('classes'));
    }
    public function store(Request $request)
    {
        $options = $request->all();
        $id = $this->model_stereotype->store($options);
        Log::notice('Estereótipo armazenado');
        $stereotype = $this->model_stereotype->get_stereotype($id);
        return redirect()->route('admin.stereotype.edit', $stereotype->id)->with('success', 'Um estereótipo inserido.');
    }
    public function show($id)
    {
        $stereotype = $this->model_stereotype->get_stereotype($id);
        return view('stereotype.show', compact('stereotype'));
    }
    public function edit($id)
    {
        $stereotype = $this->model_stereotype->get_stereotype($id);
        $factions = $this->service->get_all_factions($id);
        $class = $this->model_class_person->get_class_person($stereotype->class_id);
        if($stereotype->faction_id == 0){
            Log::notice('Iniciada a edição do estereótipo - selecionando facções');
            return view('stereotype.edit', compact('stereotype', 'factions', 'class'));
        }
        else{
            $stereotype_id = $stereotype->id;
            $faction_id = $stereotype->faction_id;
            Log::notice('Iniciada a edição do estereótipo - redirecionando para a edição de ficha');
            return redirect()->route('admin.stereotype.edit_card', ['stereotype_id'=>$stereotype_id, 'faction_id'=>$faction_id])->with('success', 'Um estereótipo alterado.');
        }
    }
    public function update(Request $request, $id)
    {
        $options = $request->all();
        $this->model_stereotype->update_wingout_model($id, $options);
        $stereotype = $this->model_stereotype->get_stereotype($id);
        Log::notice('Atualizado o estereótipo');
        return redirect()->route('admin.stereotype.edit', $stereotype->id)->with('success', 'Um estereótipo alterado.');
    }
    public function destroy($id)
    {
        $this->model_stereotype->remove($id);
        return redirect()->route('admin.stereotype')->with('success', 'Um estereótipo removido.');
    }
    //Demais métodos
    
    public function edit_card($stereotype_id, $faction_id){
        Log::notice('Início da edição da ficha');
        $array = [];
        $stereotype = $this->model_stereotype->get_stereotype($stereotype_id);
        if($stereotype->generated == 0){
            $this->service->create_new_characteristic_stereotypes($stereotype_id);
            $array['generated'] = 1;
            $array['faction_id'] = $faction_id;
            $this->model_stereotype->update_wingout_model($stereotype_id, $array);
        }
        $card = $this->service->get_all_characteristic_stereotypes_for_card($stereotype_id, $faction_id);
        return view('stereotype.edit_card', compact('card'));
    }
}
