<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    @isset($project)
    <title>{{ $project->name; }}</title>
    @endisset
    @empty($project)
    <title>Проект</title>
    @endempty
</head>
<body>
    <div class="container-fluid">
        @isset($project)
        <div class="text-center">
            @foreach ( $project->images as $img)
                <img src="{{ \Illuminate\Support\Facades\Storage::url($img) }}" alt="{{ $project->name }}" class="img-fluid" style="max-width: 100%; height: auto;">
            @endforeach
        </div>
        @endisset
    </div>
</body>
</html>
