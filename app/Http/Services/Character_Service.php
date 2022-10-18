<?php

namespace App\Http\Services;

use App\Models\Character;
use App\Models\Class_Person;

class Character_Service {
    private $model_character;
    private $model_class_person;
    public function __construct() {
        $this->model_character = new Character();
        $this->model_class_person = new Class_Person();
    }
    public function get_class_person($class_id){
        return $this->model_character->get_character_player($class_id);
    }
}
