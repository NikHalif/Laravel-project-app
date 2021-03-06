@extends('layouts.app')

@section('title')
    @isset($project)
        Проект - {{$project->name;}}
    @endisset
    @empty($project)
        Проект не найден
    @endempty
@endsection

@section('content')
    @isset($project)
        <div class="text-center">
            <x-carousel :images="$project->images"/>
        </div>
    @endisset
@endsection
