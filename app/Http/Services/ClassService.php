<?php

namespace App\Http\Services;

use App\Models\Characteristic;
use App\Models\Class_Person;

class ClassService {

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
    private $model_characteristics;
    private $model_class;

    public function __construct() {
        $this->model_class = new Class_Person();
        $this->model_characteristics = new Characteristic();
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
        switch ($class_id) {
            case 1:
                $virtues = $this->get_all_characteristics_for_characteristic_types($this->virtues, $class_id);
                $array['virtues'] = $virtues;
                break;
            case 2:
                $virtues = $this->get_all_characteristics_for_characteristic_types($this->virtues, $class_id);
                $array['virtues'] = $virtues;
                break;
            case 2:
                echo "i equals 2";
                break;
        }

        $general = $this->get_all_characteristics_for_characteristic_types($this->general, $class_id);
        $array['general'] = $general;

        return $array;
    }

}
