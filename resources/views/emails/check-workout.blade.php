@component('mail::message')
    {{ $title }}


    @if($check == 1)
        {{ __('You workout is accepted') }}
    @endif
    @if($check == -1)
        {{ __('You workout is rejected') }}
    @endif


    @component('mail::button', ['url' => route('student.lesson.index')])
        {{ __('Check Lessons') }}
    @endcomponent



@endcomponent
