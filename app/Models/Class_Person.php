<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class_Person extends Model
{
            $table->string('name');
            $table->longText('description');
            $table->timestamps();
    use HasFactory;
    protected $table = "ms_class_people";
}
