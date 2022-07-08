@isset($project)
    <div class="card h-100 text-center" style="width: 18rem;">
        <x-carousel :images="$project->images" :id="$project->id"/>
        <div class="card-body h-100">
            <h5 class="card-title">{{ $project->name }}</h5>
            @isset($project->group->name)<h6 class="card-subtitle mb-2 text-muted">{{ $project->group->name }}</h6>@endisset
            <p class="card-text">{{ $project->other }}</p>
        </div>
        <div class="card-body">
            <a href="{{ route( 'project', ['project'=>$project->id]) }}" class="btn btn-primary">Открыть</a>
        </div>
    </div>
@endisset
