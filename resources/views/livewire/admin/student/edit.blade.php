<x-card title="{{ __('Edit:') }} {{ $user->name }}">
    <x-slot name="action">
        <x-mini-button wire:click="$dispatch('closeModal')" icon="x-mark" icon-size="md" primary flat xs />
    </x-slot>
    <x-input
        label="Name"
        wire:model="name"
    />

    <x-input
        label="Email"
        wire:model="email"
    />

    <x-input
        label="Password"
        wire:model="password"
    />

    <x-input
        label="Github"
        wire:model="github"
    />

    <x-input
        label="Telegram"
        wire:model="telegram"
    />
    <x-slot name="footer" class="flex items-center justify-between">
        <x-button label="Cancel" wire:click="$dispatch('closeModal')" flat />

        <x-button label="Edit" wire:click="edit" primary />
    </x-slot>

</x-card>
