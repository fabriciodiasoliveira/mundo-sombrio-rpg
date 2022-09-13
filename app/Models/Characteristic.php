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
    public function get_all_characteristics_class($class_id)
    {
        return DB::table('ms_characteristics as ch')
            ->leftJoin('ms_races as r', 'ch.race_id', '=', 'r.id')
            ->leftJoin('ms_auguries as a', 'ch.augury_id', '=', 'a.id')
            ->leftJoin('ms_factions as f', 'ch.faction_id', '=', 'f.id')
            ->select('r.name as race_name', 'a.name as augury_name', 'f.name as faction_name', 'ch.*')
            ->where('ch.class_id', '=', $class_id)
            ->get();
    }
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
}
