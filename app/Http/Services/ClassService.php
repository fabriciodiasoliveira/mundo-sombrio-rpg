<?php

namespace App\Http\Services;

use App\Models\Characteristic;
use App\Models\Class_Person;

class ClassService
{
    private $model_characteristics;
    private $model_class;
    public function __construct() {
        $this->model_class = new Class_Person();
        $this->model_characteristics = new Characteristic();
    }
    //Obtendo características do banco de dados
    public function get_all_characteristics_for_class_people($class_id){
        return $this->model_characteristics->get_all_characteristics_for_class_people($class_id);
    }
    public function get_all_characteristics_for_characteristic_types($characteristic_type_id, $class_id){
        return $this->model_characteristics->get_all_characteristics_for_characteristic_types($characteristic_type_id, $class_id);
    }
    public function get_all_characteristics_for_factions($faction_id){
        return $this->model_characteristics->get_all_characteristics_for_factions($faction_id);
    }
    public function get_all_characteristics_for_auguries($augurie_id){
        return $this->model_characteristics->get_all_characteristics_for_auguries($augurie_id);
    }
    public function get_all_characteristics_for_races($race_id){
        return $this->model_characteristics->get_all_characteristics_for_races($race_id);
    }
    //Obtendo características por classe separadamente
    public function get_all_characteristics_for_vampire(){
        $class = 1;
        $array = [];
        //Continua
    }
}
