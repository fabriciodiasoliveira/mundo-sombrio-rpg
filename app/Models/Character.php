<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Character extends Model
{
    use HasFactory;
    protected $table = "ms_characters";
    protected $fillable = [
        'name',
        'description',
        'class_id',
        'image',
    ];
    //Métodos comuns
    public function get_all_characters()
    {
        return Character::query()->select('*')->get();
    }
    public function remove($id){
        Character::query()->where('id', '=', $id)->delete();
    }
    public function get_character($id)
    {
        return Character::query()->select('*')->where('id', '=', $id)->first();
    }
    public function update_wingout_model($id, Array $options)
    {
        unset($options['_token']);
        unset($options['_method']);
        Character::query()->where('id', '=', $id)->update($options);
    }
    public function store(array $options = [])
    {
        unset($options['_token']);
        return Character::query()->insertGetId($options);
    }
    //Demais métodos
    public function get_all_characters_player($user_id)
    {
        return DB::table('ms_characters as ch')
                ->join('ms_stereotypes as s', 's.id', '=', 'ch.stereotype_id')
                ->leftJoin('ms_class_people as c', 's.class_id', 'c.id' )
                ->leftJoin('ms_factions as f', 's.faction_id', 'f.id' )
                ->select('ch.*','c.name as class_name', 'f.name as faction_name', 's.name as stereotype_name')
                ->where('ch.user_id', '=', $user_id)
                ->get();
    }
    public function get_character_player($character_id)
    {
        return DB::table('ms_characters as ch')
                ->join('ms_stereotypes as s', 's.id', '=', 'ch.stereotype_id')
                ->leftJoin('ms_class_people as c', 's.class_id', 'c.id' )
                ->leftJoin('ms_factions as f', 's.faction_id', 'f.id' )
                ->select('ch.*','c.name as class_name', 'c.id as class_id', 'f.name as faction_name', 
                        'f.id as faction_id', 's.name as stereotype_name', 's.id as stereotype_id')
                ->where('ch.id', '=', $character_id)
                ->first();
    }
}
