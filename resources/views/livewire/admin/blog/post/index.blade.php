<div>
    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                <th></th>
                <th>{{ __('Title') }}</th>
                <th>{{ __('Author') }}</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th>{{ $post->title }}</th>
                    <td>{{ $post->user->name }}</td>
                    <td>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $posts->links() }}
</div>
