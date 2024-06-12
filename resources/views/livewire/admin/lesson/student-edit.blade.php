<form wire:submit="save">
    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">{{ __('midterm') }}</span>
        </div>
        <input type="text" wire:model="midterm" placeholder="midterm" class="input input-bordered w-full max-w-xs" />
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">{{ __('final') }}</span>
        </div>
        <input type="text" wire:model="final" placeholder="final" class="input input-bordered w-full max-w-xs" />
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">{{ __('absence') }}</span>
        </div>
        <input type="text" wire:model="absence" placeholder="absence" class="input input-bordered w-full max-w-xs" />
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">{{ __('plus') }}</span>
        </div>
        <input type="text" wire:model="plus" placeholder="plus" class="input input-bordered w-full max-w-xs" />
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">{{ __('conferences') }}</span>
        </div>
        <input type="text" wire:model="conferences" placeholder="conferences" class="input input-bordered w-full max-w-xs" />
    </label>
    <button class="btn btn-primary">{{ __('Submit') }}</button>
</form>
