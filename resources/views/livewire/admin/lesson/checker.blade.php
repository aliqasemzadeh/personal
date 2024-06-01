<div class="card">
    <div class="card-body">
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                <tr>
                    <th>{{ __('Total') }}</th>
                    <th>{{ __('User') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <!-- row 1 -->
                    <tr :key="$user->checker_user_id">
                        <td>{{ $user->total }}</td>
                        <td>{{ \App\Models\User::findOrFail($user->checker_user_id)->name }}</td>
                    </tr>
                @endforeach
                </tbody>
                <!-- foot -->
                <tfoot>
                <tr>
                    <th>{{ __('Total') }}</th>
                    <th>{{ __('User') }}</th>
                </tr>
                </tfoot>

            </table>
        </div>
    </div>
</div>
