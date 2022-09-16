<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Class_Person extends Model
{
    use HasFactory;
    protected $table = "ms_class_people";
    protected $fillable = [
        'name',
        'description',
        'powers',
        'little_description',
        'image',
    ];
    //Funções comuns
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
        unset($options['_token']);
        unset($options['_method']);
        Class_Person::query()->where('id', '=', $id)->update($options);
    }
    public function store(array $options = [])
    {
        unset($options['_token']);
        return Class_Person::query()->insertGetId($options);
    }
    //Funções especiais
    public function get_all_auguries(){
        return DB::table('ms_auguries as a')
            ->select('a.*')
            ->get();
    }
    public function get_all_races(){
        return DB::table('ms_races as r')
            ->select('r.*')
            ->get();
    }
    public function get_all_factions($id){
        return DB::table('ms_factions as f')
            ->join('ms_class_people as c', 'c.id', '=', 'f.class_id')
            ->select('c.name', 'f.*')
            ->where('c.id', '=', $id)
            ->get();
    }
    public function get_all_characteristics($id){
        return DB::table('ms_characteristics as ch')
            ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
            ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
            ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
            ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
            ->select('c.name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.*')
            ->where('c.id', '=', $id)
            ->get();
    }
}
