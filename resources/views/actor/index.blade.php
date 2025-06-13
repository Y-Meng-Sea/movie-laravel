@extends('layout.app')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-movie">
        <h2 class="capitalize text-white text-lg font-semibold">Popular Movie</h2>
        <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-8 gap-3">
            @foreach ($popularActor as $actor)
            <div class="mt-8">
                <a href="{{route('actor.show', $actor['id'])}}">
                    <img src="{{'https://image.tmdb.org/t/p/w500'.$actor['profile_path']}}" alt="" class="hover:opacity-50 transition ease-in-out duration-150 rounded-lg">
                </a>
                <div class="mt-2">
                    <a href="{{route('actor.show', $actor['id'])}}" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">{{$actor['name']}}</a>
                    <div class="flex items-center text-gray-400 text-sm">
                        <span>{{collect($actor['known_for'])->pluck('title')->implode(', ')}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection