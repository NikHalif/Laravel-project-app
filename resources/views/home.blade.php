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

    @vite(['resources/js/app.js'])

</head>
<body>
    <div class="container-fluid">
        @isset($project)
        <div class="text-center">
            <x-carousel :images="$project->images"/>
        </div>
        @endisset
    </div>
</body>
</html>
