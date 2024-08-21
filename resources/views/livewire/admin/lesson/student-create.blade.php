<div>
    <form wire:submit="create({{$lesson_id}})">
        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">{{ __('Student ID') }}</span>
            </div>
            <input type="text" wire:model="student_id" placeholder="{{ __('Student ID') }}" class="input input-bordered w-full max-w-xs" />
            <div>@error('student_id') <span class="text-red-700">{{ $message }}</span> @enderror</div>
        </label>

        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>
    </form>
</div>
