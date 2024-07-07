<div class="card">
    <summary class="card-body">
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
