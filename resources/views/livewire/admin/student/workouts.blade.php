    <div class="card">
        <summary class="card-body">

            {{ $user->email }}
            @foreach($lessons as $lesson)
                <details class="collapse bg-base-200">
                    <summary class="collapse-title text-xl font-medium">
                        @php
                            $grade = $lesson->total_point;
                        @endphp

                        @if($grade < 3)
                            <div class="badge badge-error badge-lg">
                                {{ round($grade  , 2, PHP_ROUND_HALF_DOWN) }}
                            </div>
                        @endif

                        @if($grade >= 3 && $grade <5)
                            <div class="badge badge-warning badge-lg">
                                {{ round($grade  , 2, PHP_ROUND_HALF_DOWN) }}
                            </div>
                        @endif

                        @if($grade >= 5)
                            <div class="badge badge-success badge-lg">
                                {{ round($grade  , 2, PHP_ROUND_HALF_DOWN) }}
                            </div>
                        @endif



                        {{ $lesson->lesson->title }}


                        @php
                            $workout_total = \App\Models\LessonWorkout::where('lesson_id', $lesson->lesson->id)->count();
                            $workout_right =\App\Models\StudentWorkout::where('lesson_id', $lesson->lesson->id)->where('student_id', $user->id)->where('check', 1)->count();
                            $workout_wrong = \App\Models\StudentWorkout::where('lesson_id', $lesson->lesson->id)->where('student_id', $user->id)->where('check', -1)->count();
                        @endphp


                        - {{ __('Right') }}:{{ $workout_right }}+{{ __('Wrong') }}:{{ $workout_wrong }}/{{ __('Total') }}:{{ $workout_total }}
                    </summary>
                    <div class="collapse-content">
                        <p>
                            @foreach($lesson->lesson->workouts as $workout)
                                <livewire:student.lesson.workout :$workout />
                                <x-section-border />
                            @endforeach
                        </p>
                    </div>
                </details>
            @endforeach
        </summary>
    </div>
