<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentality extends Model
{
    use HasFactory;
    protected $table = "ms_mentalities";
    protected $fillable = [
        'name',
    ];
    public function get_all_mentalities()
    {
        return Mentality::query()->select('*')->get();
    }
    public function remove($id){
        Mentality::query()->where('id', '=', $id)->delete();
    }
    public function get_mentalitie($id)
    {
        return Mentality::query()->select('*')->where('id', '=', $id)->first();
    }
    public function update_wingout_model($id, Array $options)
    {
        unset($options['_token']);
        unset($options['_method']);
        Mentality::query()->where('id', '=', $id)->update($options);
    }
    public function store(array $options = [])
    {
        unset($options['_token']);
        return Mentality::query()->insertGetId($options);
    }
}
