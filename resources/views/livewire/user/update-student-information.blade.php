<x-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Student Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Please update student information base on your current university.') }}
    </x-slot>

    <x-slot name="form">

        <!-- GitHub -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="github" value="{{ __('GitHub') }}" />
            <x-input id="github" type="text" class="mt-1 block w-full" wire:model="github" required autocomplete="github" />
            <x-input-error for="github" class="mt-2" />
        </div>

        <!-- Student ID -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="student_id" value="{{ __('Student ID') }}" />
            <x-input id="student_id" type="tel" class="mt-1 block w-full" wire:model="student_id" required autocomplete="student_id" />
            <x-input-error for="student_id" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
