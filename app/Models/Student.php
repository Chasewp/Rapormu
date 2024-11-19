<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //Table Student
    protected $table = 'Student';

    //Pk Student
    protected $primary_key = 'NIS';

    //Data Input
    protected $fillable = 
    [
        'Name',
        'Class_Room',
        'Focus',
        'Grades'
    ];
}
