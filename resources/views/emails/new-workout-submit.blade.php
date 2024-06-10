@component('mail::message')
    {{ __('New Workout Submit Successfully.') }}

    {{ $title }}

    @component('mail::button', ['url' => $url])
        {{ __('Check Workout') }}
    @endcomponent
@endcomponent
