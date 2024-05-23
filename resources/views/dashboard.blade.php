<x-app-layout>
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <p class="py-6">{{ __('First Update Information then full workouts') }}</p>
                <a href="{{ route('profile.show') }}" class="btn btn-primary">{{ __('Update Profile') }}</a>
                <a href="{{ route('student.lesson.index') }}" class="btn btn-accent">{{ __('Lessons') }}</a>
            </div>
        </div>
    </div>
</x-app-layout>
