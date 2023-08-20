<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseProfessor extends Model
{
    use HasFactory;
    protected $fillable = [
        'professor_id',
        'course_id'
    ];
}
