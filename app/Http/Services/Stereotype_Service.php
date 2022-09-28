<?php

namespace App\Http\Services;

use App\Models\Characteristic;
use App\Models\Characteristic_Stereotype;
use App\Models\Stereotype;

class Stereotype_Service {
    private $model_stareotype;
    private $model_characteristic;
    private $model_characteristic_stereotype;
    
    public function __construct() {
        $this->model_stareotype = new Stereotype();
        $this->model_characteristic_stereotype = new Characteristic_Stereotype();
        $this->model_characteristic = new Characteristic();
    }
    
    public function create_new_characteristic_stereotypes($stereotype_id){
        $stereotype = $this->model_stareotype->get_stereotype($stereotype_id);
        $class_id = $stereotype->class_id;
        $characterystics = $this->model_characteristic->get_all_characteristics_for_class_people($class_id);
        $i = 0;
        foreach($characterystics as $characterystic){
            $array = [];
            $array['characteristic_id'] = $characterystic->id;
            $array['stereotype_id'] = $stereotype->id;
            $array['value'] = 0;
            $this->model_characteristic_stereotype->store($array);
            $i++;
        }
        dd($i);
    }
}
