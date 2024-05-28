<div class="card">
    <div class="card-body">
        {!! nl2br($workout->description) !!}
        <label class="form-control">
            <div class="label">
                <span class="label-text">{{ __('GitHub Address') }}</span>
            </div>
            <input type="text" wire:model="url" placeholder="{{ __('Address') }}" class="input input-bordered" />
            @error('url') <span class="text-red-700">{{ $message }}</span> @enderror
        </label>
        <button wire:click="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
