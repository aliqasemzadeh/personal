<div>
    <h3>{{ $workout->title }}</h3>
    @foreach($studentWorkouts as $studentWorkout)«
        {{ $studentWorkout->url }}
    @endforeach
</div>
