<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
     public function get_all_characteristic_stereotypes_for_class_people($class_id){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->leftJoin('ms_characteristic_stereotypes as cs', 'cs.characteristic_id', 'ch.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.name as characteristic_name', 'cs.*')
                ->where('c.id', '=', $class_id)
                ->get();
    }
    public function get_all_characteristic_stereotypes_for_characteristic_types($characteristic_type_id, $class_id){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->leftJoin('ms_characteristic_stereotypes as cs', 'cs.characteristic_id', 'ch.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.name as characteristic_name', 'cs.*')
                ->where('ct.id', '=', $characteristic_type_id)
                ->where('c.id', '=', $class_id)
                ->get();
    }
    public function get_all_characteristic_stereotypes_for_factions($faction_id){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->leftJoin('ms_characteristic_stereotypes as cs', 'cs.characteristic_id', 'ch.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.name as characteristic_name', 'cs.*')
                ->where('f.id', '=', $faction_id)
                ->get();
    }
    public function get_all_characteristic_stereotypes_for_auguries($augurie_id){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->leftJoin('ms_characteristic_stereotypes as cs', 'cs.characteristic_id', 'ch.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.name as characteristic_name', 'cs.*')
                ->where('a.id', '=', $augurie_id)
                ->get();
    }
    public function get_all_characteristic_stereotypes_for_races($race_id){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->leftJoin('ms_characteristic_stereotypes as cs', 'cs.characteristic_id', 'ch.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.name as characteristic_name', 'cs.*')
                ->where('r.id', '=', $race_id)
                ->get();
    }
    public function get_all_characteristic_stereotypes_powers_for_all_auguries_of_warewolf(){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->leftJoin('ms_characteristic_stereotypes as cs', 'cs.characteristic_id', 'ch.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.name as characteristic_name', 'cs.*')
                ->where('a.id', '<>', 0)
                ->get();
    }
    public function get_all_characteristic_stereotypes_powers_for_all_races_of_warewolf(){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->leftJoin('ms_characteristic_stereotypes as cs', 'cs.characteristic_id', 'ch.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.name as characteristic_name', 'cs.*')
                ->where('r.id', '<>', 0)
                ->get();
    }
    public function get_all_characteristic_stereotypes_powers_for_all_factions_for_class($class_id){
        return DB::table('ms_characteristics as ch')
                ->join('ms_class_people as c', 'c.id', '=', 'ch.class_id')
                ->leftJoin('ms_factions as f', 'f.id', 'ch.faction_id' )
                ->leftJoin('ms_races as r', 'ch.race_id', 'r.id' )
                ->leftJoin('ms_auguries as a', 'ch.augury_id', 'a.id' )
                ->leftJoin('ms_characteristic_types as ct', 'ch.characteristic_type_id', 'ct.id')
                ->leftJoin('ms_characteristic_stereotypes as cs', 'cs.characteristic_id', 'ch.id')
                ->select('c.name','ct.name as characteristic_type_name', 'f.name as faction_name', 'a.name as augury_name', 'r.name as race_name', 'ch.name as characteristic_name', 'cs.*')
                ->where('f.id', '<>', 0)
                ->where('c.id', '=', $class_id)
                ->get();
    }
}
