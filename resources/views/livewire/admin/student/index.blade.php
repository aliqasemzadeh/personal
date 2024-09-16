<div class="card">
    <div class="card-body">
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Student ID') }}</th>
                    <th>{{ __('GitHub') }}</th>
                    <th>{{ __('Telegram') }}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $user)
                    <!-- row 1 -->
                    <tr :key="$user->id">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->student_id }}</td>
                        <td>{{ $user->github }}</td>
                        <td>{{ $user->telegram }}</td>
                        <th>
                            <button class="btn btn-square btn-sm btn-primary" wire:click="$dispatch('openModal', { component: 'admin.student.workouts', arguments: { user: {{ $user->id }} }})">
                                <svg  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13 5h8" /><path d="M13 9h5" /><path d="M13 15h8" /><path d="M13 19h5" /><path d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /></svg>
                            </button>
                        </th>
                    </tr>
                @endforeach
                </tbody>
                <!-- foot -->
                <tfoot>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Student ID') }}</th>
                    <th>{{ __('GitHub') }}</th>
                    <th></th>
                </tr>
                </tfoot>

            </table>
        </div>
    </div>
</div>
