<div>
    {{ $studentWorkouts->count() }}
    @foreach($studentWorkouts as $studentWorkout)
        {{ $studentWorkout->url }}
    @endforeach
</div>
