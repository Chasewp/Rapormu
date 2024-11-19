<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    //Table Material
    protected $table = 'material';
    //Pk Material
    protected $primary_key = 'Id_Material';

    //Data Input
    protected $fillable = 
    [
    'Material_Name'
    ];

}
