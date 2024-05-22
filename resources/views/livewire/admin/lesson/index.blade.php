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
                <tr>
                    <td>{{ $lesson->title }}</td>
                    <th>
                        <button class="btn btn-ghost btn-xs">{{ __('Students') }}</button>
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
