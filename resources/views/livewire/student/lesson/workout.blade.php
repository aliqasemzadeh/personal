<div>
    <div class="card">
        <div class="card-body">
            {!! nl2br($workout->description) !!}

            @if($studentWorkout->check == 1)
                <div role="alert" class="alert alert-success">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>{{ __('You workout is accepted') }}</span>
                </div>
            @endif

            @if($studentWorkout->check == -1)
                <div role="alert" class="alert alert-error">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>{{ __('You workout is rejected') }}</span>
                </div>
            @endif

            @if($studentWorkout->check == 0 && 0)
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">{{ __('GitHub Address') }}</span>
                    </div>
                    <input type="text" wire:model="url" placeholder="{{ __('Address') }}" class="input input-bordered" />
                    @error('url') <span class="text-red-700">{{ $message }}</span> @enderror
                </label>
                <x-action-message class="me-3" on="saved">
                    {{ __('Saved.') }}
                </x-action-message>
                <button wire:click="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            @endif
        </div>
    </div>
</div>
