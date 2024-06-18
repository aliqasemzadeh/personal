<div class="card">
    <div class="card-body">

        <ul class="list-disc list-inside space-y-2">
            @foreach($students as $student)
                {{ $student->workout_point }}
                <li class="text-blue-500">
                    @php
                        $grade = $student->workout_point + $student->conferences + $student->plus * 0.25 + $student->absence * -0.5 + ($student->midterm / 4) + (($student->final* 3) / 4);
                    @endphp

                    @if($grade < 3)
                        <div class="badge badge-error badge-lg">
                            {{ round($grade  , 2, PHP_ROUND_HALF_DOWN) }}
                        </div>
                    @endif

                    @if($grade >= 3 && $grade <5)
                        <div class="badge badge-warning badge-lg">
                            {{ round($grade  , 2, PHP_ROUND_HALF_DOWN) }}
                        </div>
                    @endif

                    @if($grade >= 5)
                        <div class="badge badge-success badge-lg">
                            {{ round($grade  , 2, PHP_ROUND_HALF_DOWN) }}
                        </div>
                    @endif
                    {{ $student->student_id }}
                    @if(auth()->user()->id == 1)
                    <br />

                    <livewire:admin.lesson.student-edit :$student :key="$student->student_id" />

                    <x-section-border />
                    @endif
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

