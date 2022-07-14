<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addclass extends Model
{
    use HasFactory;
    protected $table="addclasses";
    protected $fillable=['name','section','strength'];

}
