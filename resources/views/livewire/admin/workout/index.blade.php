<div class="card">
    <div class="card-body">
        <a href="{{ route('admin.workout.create') }}" class="btn btn-primary">{{ __('Create') }}</a>
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                <tr>
                    <th>{{ __('Description') }}</th>
                    <th>{{ __('Lesson') }}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($workouts as $workout)
                    <!-- row 1 -->
                    <tr :key="$workout->id">
                        <td>{{ $workout->description }}</td>
                        <td>{{ $workout->lesson->title }}</td>
                        <th>
                            <a href="{{ route('admin.workout.edit', [$workout->id]) }}" class="btn btn-primary btn-xs">{{ __('Edit') }}</a>
                            <button class="btn btn-error btn-xs" wire:click="delete({{$workout->id}})" wire:confirm="{{ __('Are you sure?') }}">{{ __('Delete') }}</button>
                            <a href="{{ route('admin.workout.student', [$workout->id]) }}" class="btn btn-secondary btn-xs">{{ __('Students') }}</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
                <!-- foot -->
                <tfoot>
                <tr>
                    <th>{{ __('Description') }}</th>
                    <th>{{ __('Lesson') }}</th>
                    <th></th>
                </tr>
                </tfoot>

            </table>
        </div>
    </div>
</div>
