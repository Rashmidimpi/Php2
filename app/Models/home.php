<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'street',
        'city',
        'state',
        'zip'       
    ];
    use HasFactory;
}
