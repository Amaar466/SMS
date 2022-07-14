<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'fname',
        'address',
    'phone',
    'qualification',
    'assign-class',
        'email',
        'password',
        'role'
    ];
}