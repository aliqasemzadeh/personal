<form wire:submit="import">
    <div class="card">
        <div class="card-body">

            <ul class="list-disc list-inside space-y-2">
                @foreach($students as $student)
                <li class="text-blue-500" wire:key="{{ $student->student_id }}">
                    {{ $student->student_id }}
                    <br />
                        <livewire:admin.lesson.student-edit :student="$student" :key="$student->student_id" />
                </li>
                @endforeach
            </ul>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">{{ __('File') }}</span>
                </div>
                <input type="file" wire:model="file" class="file-input file-input-bordered" />
                @error('file') <span class="text-red-700">{{ $message }}</span> @enderror
            </label>
            <button class="btn btn-primary">{{ __('Upload') }}</button>
        </div>
    </div>
</form>
