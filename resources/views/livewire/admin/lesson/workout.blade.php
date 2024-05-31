<div class="card">
    <div class="card-body">
        <h2 class="card-title"></h2>
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                <tr>
                    <th>{{ __('Action') }}</th>
                    <th>{{ __('URL') }}</th>
                    <th>{{ __('Workout') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($workouts as $workout)
                    <!-- row 1 -->
                    <tr :key="$workout->id">
                        <td>

                        </td>
                        <td>
                            <a target="_blank" class="btn" href="{!! nl2br($workout->url) !!}">
                                {{ __('View') }}
                            </a>
                        </td>
                        <th>
                            {!! nl2br($workout->workout->description) !!}
                        </th>
                    </tr>
                @endforeach
                </tbody>
                <!-- foot -->
                <tfoot>
                <tr>
                    <th>{{ __('Action') }}</th>
                    <th>{{ __('URL') }}</th>
                    <th></th>
                </tr>
                </tfoot>

            </table>
        </div>
    </div>
</div>
