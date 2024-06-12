<div class="card">
    <div class="card-body">

        <ul class="list-disc list-inside space-y-2">
            @foreach($students as $student)
                <li class="text-blue-500">
                    {{ $student->student_id }}
                    <br />
                    <livewire:admin.lesson.student-edit :$student :key="$student->student_id" />
                    <x-section-border />
                </li>
            @endforeach
        </ul>
        <label class="form-control">
            <div class="label">
                <span class="label-text">{{ __('File') }}</span>
            </div>
            <form wire:submit="import">
                <input type="file" wire:model="file" class="file-input file-input-bordered" />
                @error('file') <span class="text-red-700">{{ $message }}</span> @enderror
            </form>
        </label>
        <button class="btn btn-primary">{{ __('Upload') }}</button>
    </div>
</div>

