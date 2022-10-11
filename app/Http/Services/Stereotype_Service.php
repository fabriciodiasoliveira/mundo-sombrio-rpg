<?php

namespace App\Http\Services;

use App\Models\Characteristic;
use App\Models\Characteristic_Stereotype;
use App\Models\Class_Person;
use App\Models\Faction;
use App\Models\Stereotype;
use Illuminate\Support\Facades\Log;

class Stereotype_Service {

    //Valores padrão das características
    private $physical = 1;
    private $mental = 2;
    private $social = 3;
    private $talents = 4;
    private $skills = 5;
    private $knowledge = 6;
    private $general = 7;
    private $virtues = 8;
    //Models
    private $model_stereotype;
    private $model_characteristic;
    private $model_characteristic_stereotype;
    private $model_factions;
    private $model_class_person;

    public function __construct() {
        $this->model_stereotype = new Stereotype();
        $this->model_characteristic_stereotype = new Characteristic_Stereotype();
        $this->model_characteristic = new Characteristic();
        $this->model_factions = new Faction();
        $this->model_class_person = new Class_Person();
    }

    public function create_new_characteristic_stereotypes($stereotype_id) {
        Log::notice('Início da criação dos valores das características no estereótipo');
        $stereotype = $this->model_stereotype->get_stereotype($stereotype_id);
        $class_id = $stereotype->class_id;
        $characterystics = $this->model_characteristic->get_all_characteristics_for_class_people($class_id);
        foreach ($characterystics as $characterystic) {
            $array = [];
            $array['characteristic_id'] = $characterystic->id;
            $array['stereotype_id'] = $stereotype->id;
            if($characterystic->characteristic_type_name == 'Fisico' ||
                    $characterystic->characteristic_type_name == 'Mental' ||
                    $characterystic->characteristic_type_name == 'Social'){
                $array['value'] = 1;
            }else{
                $array['value'] = 0;
            }
            $this->model_characteristic_stereotype->store($array);
        }
        Log::notice('Valores criados com valores padrão');
    }

    //Obtendo características por classe separadamente
    public function get_all_characteristic_stereotypes_for_generic_card($stereotype_id, $faction_id) {
        $stereotype = $this->model_stereotype->get_stereotype($stereotype_id);
        $class_person = $this->model_class_person->get_class_person($stereotype->class_id);
        $faction = $this->model_factions->get_faction($faction_id);
        $class_id = $class_person->id;
        $array = [];
        $array['faction'] = $faction;
        $array['class_person'] = $class_person;
        $array['stereotype'] = $stereotype;
        $physical = $this->model_characteristic_stereotype->get_all_characteristic_stereotypes_for_characteristic_types($this->physical, $class_id);
        $array['physical'] = $physical;
        $mental = $this->model_characteristic_stereotype->get_all_characteristic_stereotypes_for_characteristic_types($this->mental, $class_id);
        $array['mental'] = $mental;
        $social = $this->model_characteristic_stereotype->get_all_characteristic_stereotypes_for_characteristic_types($this->social, $class_id);
        $array['social'] = $social;
        $talents = $this->model_characteristic_stereotype->get_all_characteristic_stereotypes_for_characteristic_types($this->talents, $class_id);
        $array['talents'] = $talents;
        $skills = $this->model_characteristic_stereotype->get_all_characteristic_stereotypes_for_characteristic_types($this->skills, $class_id);
        $array['skills'] = $skills;
        $knowledge = $this->model_characteristic_stereotype->get_all_characteristic_stereotypes_for_characteristic_types($this->knowledge, $class_id);
        $array['knowledge'] = $knowledge;
        $general = $this->model_characteristic_stereotype->get_all_characteristic_stereotypes_for_characteristic_types($this->general, $class_id);
        $array['general'] = $general;
        $powers_of_class = $this->model_characteristic_stereotype->get_all_characteristic_stereotypes_for_factions($faction_id);
        $array['powers_of_faction'] = $powers_of_class;
        return $array;
    }

    public function get_all_characteristic_stereotypes_for_card($stereotype_id, $faction_id) {
        Log::notice('Início da obtenção dos valores da ficha');
        $stereotype = $this->model_stereotype->get_stereotype($stereotype_id);
        $class_person = $this->model_class_person->get_class_person($stereotype->class_id);
        $class_id = $class_person->id;
        $array = $this->get_all_characteristic_stereotypes_for_generic_card($stereotype_id, $faction_id);
        switch ($class_id) {
            case 1:
                $virtues = $this->model_characteristic_stereotype->get_all_characteristic_stereotypes_for_characteristic_types($this->virtues, $class_id);
                $array['virtues'] = $virtues;
                break;
            case 2:
                $powers_of_race = $this->model_characteristic_stereotype->get_all_characteristic_stereotypes_powers_for_all_races_of_warewolf();
                $array['powers_of_race'] = $powers_of_race;
                $powers_of_augury = $this->model_characteristic_stereotype->get_all_characteristic_stereotypes_powers_for_all_auguries_of_warewolf();
                $array['powers_of_augury'] = $powers_of_augury;
                $auguries = $this->model_class_person->get_all_auguries();
                $array['auguries'] = $auguries;
                $races = $this->model_class_person->get_all_races();
                $array['races'] = $races;
                break;
        }
        Log::notice('Valores obtidos');
        return $array;
    }

    public function get_all_factions($stereotype_id) {
        Log::notice('Início da obtenção das facções');
        $stereotype = $this->model_stereotype->get_stereotype($stereotype_id);
        $class = $this->model_class_person->get_class_person($stereotype->class_id);
        $class_id = $class->id;
        $factions = $this->model_class_person->get_all_factions($class_id);
        Log::notice('Fim da obtenção das facções');
        return $factions;
    }

}
