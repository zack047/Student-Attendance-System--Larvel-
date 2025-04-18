<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students'; // Ensure this matches your database table name

    // Add 'name', 'email', and 'class' to the fillable array
    protected $fillable = ['name', 'email', 'class'];
}
