<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stereotype extends Model
{
    use HasFactory;
    protected $table = "ms_stereotypes";
    protected $fillable = [
        'name',
        'description',
        'class_id',
        'image',
    ];
    //Funções comuns
    public function get_all_stereotypes()
    {
        return Stereotype::query()->select('*')->get();
    }
    public function remove($id){
        Stereotype::query()->where('id', '=', $id)->delete();
    }
    public function get_stereotype($id)
    {
        return Stereotype::query()->select('*')->where('id', '=', $id)->first();
    }
    public function update_wingout_model($id, Array $options)
    {
        unset($options['_token']);
        unset($options['_method']);
        Stereotype::query()->where('id', '=', $id)->update($options);
    }
    public function store(array $options = [])
    {
        unset($options['_token']);
        return Stereotype::query()->insertGetId($options);
    }
}
