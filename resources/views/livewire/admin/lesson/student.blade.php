<div class="card">
    <div class="card-body">

        <ul class="list-disc list-inside space-y-2">
            @foreach($students as $student)
                {{ $student->workout_point }}
                <li class="text-blue-500">
                    {{ $student->student_id }}
                </li>
            @endforeach
        </ul>
        <form>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">{{ __('File') }}</span>
                </div>
                    <input type="file" wire:model="file" class="file-input file-input-bordered" />
                    @error('file') <span class="text-red-700">{{ $message }}</span> @enderror
            </label>
            <button type="submit" class="btn btn-primary" wire:click="import">{{ __('Upload') }}</button>
        </form>

        <livewire:admin.lesson.student-create :$lesson_id  />
    </div>
</div>

