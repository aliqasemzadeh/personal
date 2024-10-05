
<x-card title="{{ __('Create') }}: {{ $lesson->title }}">
    <x-slot name="action">
        <x-mini-button wire:click="$dispatch('closeModal')" icon="x-mark" icon-size="md" primary flat xs />
    </x-slot>

    <x-textarea wire:model="description" label="{{ __('Description') }}" placeholder="{{ __('Description') }}" />

    <label class="form-control">
        <div class="label">
            <span class="label-text">{{ __('File') }}</span>
        </div>
        <input type="file" class="file-input file-input-bordered w-full" wire:model="file" />
    </label>

    <x-slot name="footer" class="flex items-center justify-between">
        <x-button label="Cancel" wire:click="$dispatch('closeModal')" flat />

        <x-button label="Create" wire:click="create" primary />
    </x-slot>

</x-card>
