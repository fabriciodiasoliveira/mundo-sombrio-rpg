<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic_Stereotype extends Model
{
    use HasFactory;
    protected $table = "ms_characteristic_stereotypes";
    protected $fillable = [
        'name',
        'description',
        'class_id',
        'image',
    ];
    //Funções comuns
    public function get_all_characteristic_Stereotypes()
    {
        return Characteristic_Stereotype::query()->select('*')->get();
    }
    public function remove($id){
        Characteristic_Stereotype::query()->where('id', '=', $id)->delete();
    }
    public function get_characteristic_Stereotype($id)
    {
        return Characteristic_Stereotype::query()->select('*')->where('id', '=', $id)->first();
    }
    public function update_wingout_model($id, Array $options)
    {
        unset($options['_token']);
        unset($options['_method']);
        Characteristic_Stereotype::query()->where('id', '=', $id)->update($options);
    }
    public function store(array $options = [])
    {
        unset($options['_token']);
        return Characteristic_Stereotype::query()->insertGetId($options);
    }
    //Funções especiais
    public function get_all_values_of_characteristics($class_id){
        return DB::table('ms_auguries as a')
            ->select('a.*')
            ->get();
    }
}
