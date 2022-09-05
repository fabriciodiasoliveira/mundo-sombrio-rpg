<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;
    protected $table = "ms_characteristics";
    protected $fillable = [
        'name',
        'description',
    ];
    //Métodos especiais
    
    
    //Métodos básicos
    public function get_all_characteristics_class($class_id)
    {
        return Characteristic::query()->where('class_id', '=', $class_id)->select('*')->get();
    }
    public function remove($id){
        Characteristic::query()->where('id', '=', $id)->delete();
    }
    public function get_class_person($id)
    {
        return Characteristic::query()->select('*')->where('id', '=', $id)->first();
    }
    public function update_wingout_model($id, Array $options)
    {
        unset($options['_token']);
        unset($options['_method']);
        Characteristic::query()->where('id', '=', $id)->update($options);
    }
    public function store(array $options = [])
    {
        unset($options['_token']);
        return Characteristic::query()->insertGetId($options);
    }
}
