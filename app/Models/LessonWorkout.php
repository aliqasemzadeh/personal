<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonWorkout extends Model
{
    use HasFactory;
    public $fillable = ['description', 'lesson_id'];
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    protected $appends = [
        'file_link',
    ];

    public function fileLink(): Attribute
    {
        return Attribute::get(function () {
            return response()->file($this->file);
        });
    }
}
