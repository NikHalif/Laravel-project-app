@isset($project)
    <div class="card" style="width: 18rem;">
        <x-carousel :images="$project->images"/>
        <div class="card-body">
            <h5 class="card-title">{{ $project->name }}</h5>
            <p class="card-text">{{ $project->other }}</p>
            <a href="{{ route( 'project', ['project'=>$project->id]) }}" class="btn btn-primary">Открыть</a>
        </div>
    </div>
@endisset
