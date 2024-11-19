<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use HasFactory;

    //Table Grades
    protected $table = 'grades';

    //PK Grades
    protected $primary_key ='Grades_Id';

    //Data Input
    protected $fillable = 
    ['Material_Name',
    'Dialy_Assignment'    ,
    'Midterm_Exam' ,
    'End_Of_Semester_Exam',
    'Extracurricular',
    'Manner',
    ];


    //FK Material
    public function material()
    {
        return $this->belongsTo('App\Material','Id_Material');
    }

    //FK Extracurricular
    public function extracurricular()
    {
        return $this->belongsTo('App\Extracurricular','Extracurricular_Id');
    }
}
