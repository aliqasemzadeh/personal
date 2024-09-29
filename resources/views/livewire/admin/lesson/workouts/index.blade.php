<div class="card">
    <div class="card-body">
        <button  wire:click="$dispatch('openModal', {component: 'admin.lesson.workout.create', arguments: {lesson_id: {{$lesson_id}} }})" class="btn btn-primary">{{ __('Create') }}</button>
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                <tr>
                    <th>{{ __('Description') }}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($workouts as $workout)
                    <!-- row 1 -->
                    <tr :key="$workout->id">
                        <td>{!! nl2br($workout->description) !!}</td>
                        <th>
                            <button wire:click="$dispatch('openModal', {component: 'admin.lesson.workouts.edit', arguments: {'workout_id': {{ $workout->id}} }})" class="btn btn-primary btn-xs">{{ __('Edit') }}</button>
                            <button class="btn btn-error btn-xs" wire:click="delete({{$workout->id}})" wire:confirm="{{ __('Are you sure?') }}">{{ __('Delete') }}</button>
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
