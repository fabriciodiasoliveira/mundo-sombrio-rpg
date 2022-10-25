<?php

namespace App\Http\Services;

use App\Models\Character;
use App\Models\Class_Person;
use App\Models\Stereotype;

class Character_Service {
    private $model_character;
    private $model_class_person;
    private $model_stereotype;
    public function __construct() {
        $this->model_character = new Character();
        $this->model_class_person = new Class_Person();
        $this->model_stereotype = new Stereotype();
    }
    public function get_class_person($class_id){
        return $this->model_class_person->get_class_person($class_id);
    }
    public function store_stereotype($request){
        $options = [];
        $options['name'] = $request['stereotype_name'];
        $options['public'] = 0;
        $options['class_id'] = $request['class_id'];
        return $this->model_stereotype->store($options);
    }
}
