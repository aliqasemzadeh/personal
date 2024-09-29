<div class="card">
    <div class="card-body">
        <a href="{{ route('admin.lesson.create') }}" class="btn btn-primary">{{ __('Create') }}</a>
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                <tr>
                    <th>{{ __('Title') }}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($lessons as $lesson)
                <!-- row 1 -->
                <tr :key="$lesson->id">
                    <td>{{ $lesson->title }}</td>
                    <th>
                        <a href="{{ route('admin.lesson.edit', [$lesson->id]) }}" class="btn btn-primary btn-xs">{{ __('Edit') }}</a>
                        <button class="btn btn-error btn-xs" wire:click="delete({{$lesson->id}})" wire:confirm="{{ __('Are you sure?') }}">{{ __('Delete') }}</button>
                        <a href="{{ route('admin.lesson.student', [$lesson->id]) }}" class="btn btn-secondary btn-xs">{{ __('Students') }}</a>
                        <a href="{{ route('admin.lesson.workout.index', [$lesson->id]) }}" class="btn btn-accent btn-xs">{{ __('Workouts') }}</a>
                        <a href="{{ route('admin.lesson.workout', [$lesson->id]) }}" class="btn btn-warning btn-xs">{{ __('Solves') }}</a>
                    </th>
                </tr>
                @endforeach
                </tbody>
                <!-- foot -->
                <tfoot>
                <tr>
                    <th>{{ __('Title') }}</th>
                    <th></th>
                </tr>
                </tfoot>

            </table>
        </div>
    </div>
</div>
