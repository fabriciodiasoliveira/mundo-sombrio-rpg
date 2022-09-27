<?php

namespace App\Http\Controllers;

use App\Models\Characteristic_Stereotype;
use Illuminate\Http\Request;

class CharacteristicStereotypeController extends Controller {

    private $model_characteristic_stereotype;

    public function __construct() {
        $this->model_characteristic_stereotype = new Characteristic_Stereotype();
    }

    public function index() {

    }

    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }

    public function show(Characteristic_Stereotype $characteristic_Stereotype) {
        //
    }

    public function edit(Characteristic_Stereotype $characteristic_Stereotype) {
        //
    }

    public function update(Request $request, Characteristic_Stereotype $characteristic_Stereotype) {
        //
    }

    public function destroy(Characteristic_Stereotype $characteristic_Stereotype) {
        //
    }

}
