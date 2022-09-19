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
    public function get_all_characteristics_for_class_people($class_id){
        return $this->model_characteristics->get_all_characteristics_for_class_people($class_id);
    }
}
