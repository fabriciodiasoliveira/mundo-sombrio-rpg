<?php

namespace App\Http\Services;

use App\Models\Class_Person;

class ClassService
{
    
    private $model_class;
    public function __construct() {
        $this->model_class = new Class_Person();
    }
    
}
