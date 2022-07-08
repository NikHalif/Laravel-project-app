@extends('layouts.app')

@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    @isset($projects)
            <x-all-project-cards :projects="$projects"/>
    @endisset
@endsection
