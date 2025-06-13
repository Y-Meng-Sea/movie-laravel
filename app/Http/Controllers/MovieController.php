<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $popularMovie = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=36bd8fa335bfd9df2f7eb4d23e213e3e')->json();

        $upcomingMovie = Http::get('https://api.themoviedb.org/3/movie/upcoming?api_key=36bd8fa335bfd9df2f7eb4d23e213e3e')->json();

        return view('movie.index', [
            'popularMovie' => $popularMovie['results'],
            'upcomingMovie' => $upcomingMovie['results']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $url = 'https://api.themoviedb.org/3/movie/' . $id . '?append_to_response=credits,images,videos&api_key=36bd8fa335bfd9df2f7eb4d23e213e3e';
        $movie = Http::get($url)->json();
        $movieRecommendations = Http::get('https://api.themoviedb.org/3/movie/' . $id . '/recommendations?api_key=36bd8fa335bfd9df2f7eb4d23e213e3e')->json();


        return view('movie.show', [
            'movie' => $movie,
            'movieRecommendations' => $movieRecommendations['results']
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
