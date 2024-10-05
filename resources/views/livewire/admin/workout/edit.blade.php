<form wire:submit="edit">
    <div class="card">
        <div class="card-body">
            <label class="form-control">
                <div class="label">
                    <span class="label-text">{{ __('Lesson') }}</span>
                </div>
                <select wire:model="lesson_id" placeholder="{{ __('Lesson') }}" class="select select-bordered">
                    <option></option>
                    @foreach($lessons as $lesson)
                        <option value="{{ $lesson->id }}">{{ $lesson->title }}</option>
                    @endforeach
                </select>
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">{{ __('Description') }}</span>
                </div>
                <textarea wire:model="description" class="textarea textarea-bordered h-24" placeholder="{{ __('Description') }}"></textarea>
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">{{ __('File') }}</span>
                </div>
                <input type="file" class="file-input file-input-bordered w-full" wire:model="file" />
            </label>
            @if ($file)
                <img src="{{ $file->temporaryUrl() }}">
            @endif
            <button class="btn btn-primary">{{ __('Edit') }}</button>
        </div>
    </div>
</form>
