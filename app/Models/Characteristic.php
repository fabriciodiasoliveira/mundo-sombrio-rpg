<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Characteristic extends Model
{
    use HasFactory;
    protected $table = "ms_characteristics";
    protected $fillable = [
        'name',
        'description',
    ];
    //Métodos básicos
    public function remove($id){
        Characteristic::query()->where('id', '=', $id)->delete();
    }
    public function get_characteristic($id)
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

    //Métodos especiais
    public function get_all_characteristics_for_class_people($class_id){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.*')
                ->where('c.id', '=', $class_id)
                ->get();
    }
    public function get_all_characteristics_for_characteristic_types($characteristic_type_id, $class_id){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.*')
                ->where('ct.id', '=', $characteristic_type_id)
                ->where('c.id', '=', $class_id)
                ->get();
    }
    public function get_all_characteristics_for_factions($faction_id){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.*')
                ->where('f.id', '=', $faction_id)
                ->get();
    }
    public function get_all_characteristics_for_auguries($augurie_id){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.*')
                ->where('a.id', '=', $augurie_id)
                ->get();
    }
    public function get_all_characteristics_for_races($race_id){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.*')
                ->where('r.id', '=', $race_id)
                ->get();
    }
    public function get_all_characteristics_powers_for_all_auguries_of_warewolf(){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.*')
                ->where('a.id', '<>', 0)
                ->get();
    }
    public function get_all_characteristics_powers_for_all_races_of_warewolf(){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.*')
                ->where('r.id', '<>', 0)
                ->get();
    }
    public function get_all_characteristics_powers_for_all_factions_for_class($class_id){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.*')
                ->where('f.id', '<>', 0)
                ->where('c.id', '=', $class_id)
                ->get();
    }
}
