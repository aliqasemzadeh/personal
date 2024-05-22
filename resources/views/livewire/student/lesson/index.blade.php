<div class="card">
    <summary class="card-body">
        @foreach($lessons as $lesson)
            <details class="collapse bg-base-200">
                <summary class="collapse-title text-xl font-medium">
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
