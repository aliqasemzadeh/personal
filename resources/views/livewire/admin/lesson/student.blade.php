<div class="card">
    <div class="card-body">

        <ul class="list-disc list-inside space-y-2">
            @foreach($students as $student)
                {{ $student->workout_point }}
                <li class="text-blue-500">
                    {{ $student->student_id }}
                    @if(auth()->user()->id == 1)
                    <br />
                    <livewire:admin.lesson.student-edit :$student :key="$student->student_id" />
                    <x-section-border />
                    @endif
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
            <button class="btn btn-primary" wire:click="import">{{ __('Upload') }}</button>
        </form>
    </div>
</div>

