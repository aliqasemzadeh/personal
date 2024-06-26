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
                        <th>

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
