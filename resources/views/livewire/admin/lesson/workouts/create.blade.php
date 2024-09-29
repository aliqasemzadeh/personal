
<x-card title="{{ __('Create') }}: {{ $lesson->title }}">
    <x-slot name="action">
        <x-mini-button wire:click="$dispatch('closeModal')" icon="x-mark" icon-size="md" primary flat xs />
    </x-slot>


    <x-select wire:model="lesson_id" label="{{ __('Lesson') }}" placeholder="{{ __('Lesson') }}">
        @foreach($lessons as $lessonItem)
            <x-select.option label="{{ $lessonItem->title }}" value="{{ $lessonItem->id }}" />
        @endforeach
    </x-select>
    <x-textarea wire:model="description" label="{{ __('Description') }}" placeholder="{{ __('Description') }}" />

    <x-slot name="footer" class="flex items-center justify-between">
        <x-button label="Cancel" wire:click="$dispatch('closeModal')" flat />

        <x-button label="Create" wire:click="create" primary />
    </x-slot>

</x-card>
