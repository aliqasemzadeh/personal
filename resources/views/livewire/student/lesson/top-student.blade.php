<div>
    @foreach($lessons as $lesson)
        @php
            $topStudents = \App\Models\LessonStudent::where('lesson_id', $lesson->lesson->id)->limit(3)->orderBy('total_point', 'asc')->get();
            $badStudents = \App\Models\LessonStudent::where('lesson_id', $lesson->lesson->id)->limit(3)->orderBy('total_point', 'desc')->get();
        @endphp
        <div class="card bg-neutral text-neutral-content mb-2">
            <div class="card-body items-center text-center">
                <h2 class="card-title"> {{ $lesson->lesson->title }}</h2>
                <p>

                        <div>
                            @foreach($badStudents as $badStudent)
                                @if($user = \App\Models\User::where('student_id', $badStudent->student_id)->first())
                                    {{ \Illuminate\Support\Str::mask($user->student_id, '*', -15, 7) }}
                                @endif
                                @php
                                    $grade = $badStudent->total_point;
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
                                <br />
                            @endforeach
                        </div>
                <div>
                    @foreach($topStudents as $topStudent)
                        @if($user = \App\Models\User::where('student_id', $topStudent->student_id)->first())
                            {{ \Illuminate\Support\Str::mask($user->student_id, '*', -15, 7) }}
                        @endif
                        @php
                            $grade = $topStudent->total_point;
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
                        <br />
                    @endforeach
                </div>
                </p>
            </div>
        </div>
    @endforeach
</div>
