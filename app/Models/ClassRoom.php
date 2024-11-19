<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    //Table Class Room
    protected $table = 'class_room';

    //PK Table Class Room
    protected $primary_key = 'primary_key';

    //Data_Input
    protected $fillable = [
    'Focus'
    ];
}
