<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    use HasFactory;

    //Table Extracurricular
    protected $table = 'extracurricular';

    //PK Extracurricular
    protected $primary_key = 'Extracurricular_Id';

    //Data Input
    protected $fillable = [
        'Extracurricular_Name'];
}
