<?php

namespace App\Http\Services;

use App\Models\Characteristic;
use App\Models\Characteristic_Stereotype;
use App\Models\Class_Person;
use App\Models\Faction;
use App\Models\Stereotype;

class Class_PersonService {

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
    private $model_characteristic_stereotype;
    private $model_characteristics;
    private $model_faction;
    private $model_class;

    public function __construct() {
        $this->model_stereotype = new Stereotype();
        $this->model_characteristic_stereotype = new Characteristic_Stereotype();
        $this->model_class = new Class_Person();
        $this->model_characteristics = new Characteristic();
        $this->model_faction = new Faction();
    }

    //Obtendo características do banco de dados
    public function get_all_characteristics_powers_for_all_factions_for_class($class_id){
        return $this->model_characteristics->get_all_characteristics_powers_for_all_factions_for_class($class_id);
    }
    
    public function get_all_characteristics_powers_for_all_races_of_warewolf(){
        return $this->model_characteristics->get_all_characteristics_powers_for_all_races_of_warewolf();
    }
    
    public function get_all_characteristics_powers_for_all_auguries_of_warewolf(){
        return $this->model_characteristics->get_all_characteristics_powers_for_all_auguries_of_warewolf();
    }
    
    public function get_all_characteristics_for_class_people($class_id) {
        return $this->model_characteristics->get_all_characteristics_for_class_people($class_id);
    }

    public function get_all_characteristics_for_characteristic_types($characteristic_type_id, $class_id) {
        return $this->model_characteristics->get_all_characteristics_for_characteristic_types($characteristic_type_id, $class_id);
    }

    public function get_all_characteristics_for_factions($faction_id) {
        return $this->model_characteristics->get_all_characteristics_for_factions($faction_id);
    }

    public function get_all_characteristics_for_auguries($augurie_id) {
        return $this->model_characteristics->get_all_characteristics_for_auguries($augurie_id);
    }

    public function get_all_characteristics_for_races($race_id) {
        return $this->model_characteristics->get_all_characteristics_for_races($race_id);
    }

    //Obtendo características por classe separadamente
    public function get_all_characteristics_for_card($class_id) {
        $array = [];
        $physical = $this->get_all_characteristics_for_characteristic_types($this->physical, $class_id);
        $array['physical'] = $physical;
        $mental = $this->get_all_characteristics_for_characteristic_types($this->mental, $class_id);
        $array['mental'] = $mental;
        $social = $this->get_all_characteristics_for_characteristic_types($this->social, $class_id);
        $array['social'] = $social;
        $talents = $this->get_all_characteristics_for_characteristic_types($this->talents, $class_id);
        $array['talents'] = $talents;
        $skills = $this->get_all_characteristics_for_characteristic_types($this->skills, $class_id);
        $array['skills'] = $skills;
        $knowledge = $this->get_all_characteristics_for_characteristic_types($this->knowledge, $class_id);
        $array['knowledge'] = $knowledge;
        $general = $this->get_all_characteristics_for_characteristic_types($this->general, $class_id);
        $array['general'] = $general;
        $powers_of_class = $this->get_all_characteristics_powers_for_all_factions_for_class($class_id);
        $array['powers_of_class'] = $powers_of_class;
        $factions = $this->model_class->get_all_factions($class_id);
        $array['factions'] = $factions;
        switch ($class_id) {
            case 1:
                $virtues = $this->get_all_characteristics_for_characteristic_types($this->virtues, $class_id);
                $array['virtues'] = $virtues;
                break;
            case 2:
                $powers_of_race = $this->get_all_characteristics_powers_for_all_races_of_warewolf();
                $array['powers_of_race'] = $powers_of_race;
                $powers_of_augury = $this->get_all_characteristics_powers_for_all_auguries_of_warewolf();
                $array['powers_of_augury'] = $powers_of_augury;
                $auguries = $this->model_class->get_all_auguries();
                $array['auguries'] = $auguries;
                $races = $this->model_class->get_all_races();
                $array['races'] = $races;
                break;
        }
        return $array;
    }
    public function create_characteristic_stereotype($class_id){
        
    }
    public function generate_values_of_card($class_id) {
        
    }
}
