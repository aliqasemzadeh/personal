<form wire:submit="save">
    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">{{ __('Midterm') }}</span>
        </div>
        <input type="text" wire:model="midterm" placeholder="{{ __('Midterm') }}" class="input input-bordered w-full max-w-xs" />
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">{{ __('Final') }}</span>
        </div>
        <input type="text" wire:model="final" placeholder="{{ __('Final') }}" class="input input-bordered w-full max-w-xs" />
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">{{ __('Absence') }}</span>
        </div>
        <input type="text" wire:model="absence" placeholder="{{ __('Absence') }}" class="input input-bordered w-full max-w-xs" />
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">{{ __('Plus') }}</span>
        </div>
        <input type="text" wire:model="plus" placeholder="{{ __('Plus') }}" class="input input-bordered w-full max-w-xs" />
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">{{ __('Conferences') }}</span>
        </div>
        <input type="text" wire:model="conferences" placeholder="{{ __('Conferences') }}" class="input input-bordered w-full max-w-xs" />
    </label>
    <button class="btn btn-primary">{{ __('Submit') }}</button>
</form>
