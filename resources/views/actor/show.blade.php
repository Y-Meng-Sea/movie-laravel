@extends('layout.app')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-movie">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{'https://image.tmdb.org/t/p/w500/'.$actors['profile_path']}}" alt="" class="rounded-lg">
            </div>
            <div class="md:ml-12">
                <h2 class="text-4xl font-semibold text-white">{{$actors['name']}}</h2>
                <div class="flex items-center text-gray-400 text-sm">
                    <span class="mr-2">{{$actors['place_of_birth']}}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($actors['birthday'])->format('d M Y')}} ({{\Carbon\Carbon::parse($actors['birthday'])->diffInYears()}} years old)</span>
                </div>
                <div class="mt-2">
                    <h5 class="font-bold text-2xl text-white">Biography</h5>
                    <p class="text-white">{{$actors['biography']}}</p>
                </div>
                <div class="mt-2">
                    <h4 class="font-bold text-2xl text-white">Known for</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($actors['combined_credits']['cast'] as $cast)
                        @if($loop->index < 6)
                            <div class="mt-4">
                            <a href="{{route('movie.show', $cast['id'])}}">
                                <img src="{{'https://image.tmdb.org/t/p/w500/'.$cast['poster_path']}}" alt="" class="hover:opacity-50 transition ease-in-out duration-150 rounded-lg">
                            </a>
                            <a href="{{route('movie.show', $cast['id'])}}" class="text-lg text-white hover:underline">{{$cast['original_title']}}</a>

                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection