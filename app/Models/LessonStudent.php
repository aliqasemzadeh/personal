<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonStudent extends Model
{
    use HasFactory;
    public $fillable  = ['lesson_id', 'student_id'];
    public function student()
    {
        $this->belongsTo(User::class);
    }
}