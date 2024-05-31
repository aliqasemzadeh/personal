<div>
    <h3>{!! $workout->description !!}</h3>
    @foreach($studentWorkouts as $studentWorkout)«
        {{ $studentWorkout->url }}
    @endforeach
</div>
