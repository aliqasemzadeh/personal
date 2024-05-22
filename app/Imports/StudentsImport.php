<?php

namespace App\Imports;

use App\Models\LessonStudent;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    public $lesson_id;

    public function __construct($lesson_id)
    {
        $this->lesson_id = $lesson_id;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new LessonStudent([
            'lesson_id' => $this->lesson_id,
            'student_id' => $row[0],
        ]);
    }
}
