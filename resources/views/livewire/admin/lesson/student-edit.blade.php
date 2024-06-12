<div>
    <form wire:submit="save">
        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">{{ __('Midterm') }}</span>
            </div>
            <input type="text" wire:model="midterm" placeholder="{{ __('Midterm') }}" class="input input-bordered w-full max-w-xs" />
            <div>@error('midterm') <span class="text-red-700">{{ $message }}</span> @enderror</div>
        </label>

        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">{{ __('Final') }}</span>
            </div>
            <input type="text" wire:model="final" placeholder="{{ __('Final') }}" class="input input-bordered w-full max-w-xs" />
            <div>@error('final') <span class="text-red-700">{{ $message }}</span> @enderror</div>
        </label>

        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">{{ __('Absence') }}</span>
            </div>
            <input type="text" wire:model="absence" placeholder="{{ __('Absence') }}" class="input input-bordered w-full max-w-xs" />
            <div>@error('absence') <span class="text-red-700">{{ $message }}</span> @enderror</div>
        </label>

        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">{{ __('Plus') }}</span>
            </div>
            <input type="text" wire:model="plus" placeholder="{{ __('Plus') }}" class="input input-bordered w-full max-w-xs" />
            <div>@error('plus') <span class="text-red-700">{{ $message }}</span> @enderror</div>
        </label>

        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">{{ __('Conferences') }}</span>
            </div>
            <input type="text" wire:model="conferences" placeholder="{{ __('Conferences') }}" class="input input-bordered w-full max-w-xs" />
            <div>@error('conferences') <span class="text-red-700">{{ $message }}</span> @enderror</div>
        </label>
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>
    </form>
</div>
