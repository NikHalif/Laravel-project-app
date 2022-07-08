@isset($projects)
    <div class="row row-cols-auto">
        @foreach ($projects as $project)
            <div class="col m-3">
                <x-card :project="$project" />
            </div>
        @endforeach
    </div>
@endisset
