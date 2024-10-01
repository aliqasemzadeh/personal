<div class="card">
    <div class="card-body">

        <div class="grid grid-cols-6 gap-4">
            @foreach($students as $student)
            <x-card title="{{ $student->student_id }}">
                <x-badge positive label="{{ $student->workout_right }}" />
                <x-badge negative label="{{ $student->workout_wrong }}" />
                <x-badge neutral label="{{ $student->workout_total }}" />
            </x-card>
            @endforeach
        </div>

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

