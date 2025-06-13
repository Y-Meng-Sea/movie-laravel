@extends('layout.app')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="tv-info bg-cover bg-no-repeat" style="background-image: url('{{ 'https://image.tmdb.org/t/p/original/' . $tv['backdrop_path'] }}')">
        <div style="background-image: linear-gradient(to right, rgba(20,22,25,1) 150px, rgba(20,22,25,0.84) 100%)">
            <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
                <div class="flex-none">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $tv['poster_path'] }}" class="w-72" />
                </div>
                <div class="md:ml-24">
                    <h2 class="text-4xl font-semibold text-white">{{ $tv['name'] }}</h2>
                    <div class="flex items-center text-gray-400 text-sm">
                        <span>{{ $tv['vote_average'] * 10 }}%</span>
                        <span class="mx-2">|</span>
                        <span>{{ \Carbon\Carbon::parse($tv['first_air_date'])->format('M d, Y') }}</span>
                        <span class="mx-2">|</span>
                        <span>
                            @foreach ($tv['genres'] as $genre)
                            {{ $genre['name'] }}@if (!$loop->last), @endif
                            @endforeach
                        </span>
                    </div>

                    <div class="mt-4">
                        <h4 class="font-bold text-2xl text-white">Overview</h4>
                        <p class="text-gray-100">{{ $tv['overview'] }}</p>
                    </div>

                    <div class="mt-12">
                        <div class="flex mt-4">
                            @foreach ($tv['credits']['crew'] as $crew)
                            @if ($loop->index < 3)
                                <div class="mr-12">
                                <div class="text-white font-semibold">{{ $crew['name'] }}</div>
                                <div class="text-sm text-gray-100">{{ $crew['job'] }}</div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>

                @if (isset($tv['videos']['results'][1]))
                <div class="mt-12">
                    <a href="https://www.youtube.com/watch?v={{ $tv['videos']['results'][1]['key'] }}" class="flex items-center text-gray-50 font-semibold px-4 py-4 hover:shadow-2xl transition duration-150">
                        <svg class="w-6 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="..." />
                        </svg>
                        <span class="ml-2">Play Trailer</span>
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
</div>

<div class="tv-cast">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-white text-2xl font-semibold">Top Billed Cast</h2>
        <div class="grid lg:grid-cols-7 gap-8">
            @foreach ($tv['credits']['cast'] as $cast)
            @if ($loop->index < 7)
                <div class="mt-8">
                <a href="#">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $cast['profile_path'] }}" class="rounded-lg hover:opacity-50 transition" />
                </a>
                <div class="mt-2">
                    <a href="#" class="text-md text-white font-semibold hover:text-yellow-500">{{ $cast['name'] }}</a>
                    <div class="text-sm text-gray-400">{{ $cast['character'] }}</div>
                </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
</div>

<div class="tv-image">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-white text-2xl font-semibold">Images</h2>
        <div class="grid lg:grid-cols-4 gap-8">
            @foreach ($tv['images']['backdrops'] as $image)
            @if ($loop->index < 8)
                <div class="mt-8">
                <a href="#">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $image['file_path'] }}" class="rounded-lg hover:opacity-50 transition" />
                </a>
        </div>
        @endif
        @endforeach
    </div>
</div>
</div>

<div class="tv-recommendation">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-white text-2xl font-semibold">Recommendations</h2>
        <div class="grid lg:grid-cols-7 gap-8">
            @foreach ($tvRecommendations as $rec)
            @if ($loop->index < 7)
                <div class="mt-8">
                <a href="{{ route('tv.show', $rec['id']) }}">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $rec['poster_path'] }}" class="rounded-lg hover:opacity-50 transition" />
                </a>
                <div class="mt-2">
                    <a href="{{ route('tv.show', $rec['id']) }}" class="text-md text-white font-semibold hover:text-yellow-500">
                        {{ $rec['name'] }}
                    </a>
                </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
</div>
@endsection