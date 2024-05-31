<div class="card">
    <div class="card-body">
        <h2 class="card-title">{!! $workout->description !!}</h2>
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                <tr>
                    <th>{{ __('URL') }}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($studentWorkouts as $studentWorkout)
                    <!-- row 1 -->
                    <tr :key="$workout->id">
                        <td>
                            <a target="_blank" class="btn" href="{!! nl2br($studentWorkout->url) !!}">
                                {{ __('View') }}
                            </a>
                        </td>
                        <th>

                        </th>
                    </tr>
                @endforeach
                </tbody>
                <!-- foot -->
                <tfoot>
                <tr>
                    <th>{{ __('URL') }}</th>
                    <th></th>
                </tr>
                </tfoot>

            </table>
        </div>
    </div>
</div>
