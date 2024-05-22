<form wire:submit="edit">
    <div class="card">
        <div class="card-body">
            <label class="form-control">
                <div class="label">
                    <span class="label-text">{{ __('Lesson') }}</span>
                </div>
                <select wire:model="lesson_id" placeholder="{{ __('Lesson') }}" class="select select-bordered">
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
            <button class="btn btn-primary">{{ __('Edit') }}</button>
        </div>
    </div>
</form>
