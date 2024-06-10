@component('mail::message')
    {{ __('New Workout Submit Successfully.') }}

    {{ $title }}

    @component('mail::button', ['url' => route('student.lesson.index')])
        {{ __('Check Workout') }}
    @endcomponent
@endcomponent
