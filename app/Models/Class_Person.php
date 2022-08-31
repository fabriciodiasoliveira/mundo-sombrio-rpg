<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class_Person extends Model
{
    use HasFactory;
    protected $table = "ms_class_people";
    protected $fillable = [
        'name',
        'description',
        'powers',
        'little_description',
    ];
    public function get_all_factions(){
        
    }
    public function get_all_class_persons()
    {
        return Class_Person::query()->select('*')->get();
    }
    public function remove($id){
        Class_Person::query()->where('id', '=', $id)->delete();
    }
    public function get_class_person($id)
    {
        return Class_Person::query()->select('*')->where('id', '=', $id)->first();
    }
    public function update_wingout_model($id, Array $options)
    {
        Class_Person::query()->where('id', '=', $id)->update($options);
    }
    public function store(array $options = [])
    {
        return _class_person::query()->insertGetId($options);
    }
}
