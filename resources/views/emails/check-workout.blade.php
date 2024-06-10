@component('mail::message')
    @if($check == 1)
        {{ __('You workout is accepted') }}
    @endif
    @if($check == -1)
        {{ __('You workout is rejected') }}
    @endif


    {{ $title }}


    @component('mail::button', ['url' => route('student.lesson.index')])
        {{ __('Check Lessons') }}
    @endcomponent



@endcomponent
