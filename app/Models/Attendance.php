<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances'; // Ensure this matches your database table name

    protected $fillable = ['student_id', 'status']; // Allow mass assignment for these fields

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
