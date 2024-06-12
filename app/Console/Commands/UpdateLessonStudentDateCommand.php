<?php

namespace App\Console\Commands;

use App\Models\Lesson;
use App\Models\LessonWorkout;
use App\Models\StudentWorkout;
use App\Models\User;
use Illuminate\Console\Command;

class UpdateLessonStudentDateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-lesson-student-date-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $lessons = Lesson::all();
        foreach ($lessons as $lesson) {
            echo "Lesson " . $lesson->id.": \n";
            foreach ($lesson->students as $student) {
                echo "Student " . $student->student_id."\n";
                $workout_total = LessonWorkout::where('lesson_id', $lesson->id)->count();
                if($user = User::where('student_id', $student->student_id)->first()) {
                    $workout_right = StudentWorkout::where('lesson_id', $lesson->id)->where('student_id', $user->id)->where('check', 1)->count();
                    $workout_wrong = StudentWorkout::where('lesson_id', $lesson->id)->where('student_id', $user->id)->where('check', -1)->count();


                    $student->workout_total = $workout_total;
                    $student->workout_right = $workout_right;
                    $student->workout_wrong = $workout_wrong;
                    $student->workout_point = (($workout_right * 3) / $workout_total) + ($workout_wrong / ($workout_total * 3));

                    $student->save();
                }


            }
        }
    }
}
