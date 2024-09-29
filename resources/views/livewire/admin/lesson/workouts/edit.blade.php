
<x-card title="{{ __('Edit') }}: {{ $workout->id }}">
    <x-slot name="action">
        <x-mini-button wire:click="$dispatch('closeModal')" icon="x-mark" icon-size="md" primary flat xs />
    </x-slot>

    <x-textarea wire:model="description" label="{{ __('Description') }}" placeholder="{{ __('Description') }}" />

    <x-slot name="footer" class="flex items-center justify-between">
        <x-button label="Cancel" wire:click="$dispatch('closeModal')" flat />

        <x-button label="Edit" wire:click="edit" primary />
    </x-slot>

</x-card>
