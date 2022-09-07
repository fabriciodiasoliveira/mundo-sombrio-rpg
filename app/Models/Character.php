<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function get_all_factions()
    {
        return Faction::query()->select('*')->get();
    }
    public function remove($id){
        Faction::query()->where('id', '=', $id)->delete();
    }
    public function get_faction($id)
    {
        return Faction::query()->select('*')->where('id', '=', $id)->first();
    }
    public function update_wingout_model($id, Array $options)
    {
        unset($options['_token']);
        unset($options['_method']);
        Faction::query()->where('id', '=', $id)->update($options);
    }
    public function store(array $options = [])
    {
        unset($options['_token']);
        return Faction::query()->insertGetId($options);
    }
}
