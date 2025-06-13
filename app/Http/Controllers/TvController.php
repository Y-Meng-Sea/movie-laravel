<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $popularTv = Http::get('https://api.themoviedb.org/3/tv/popular?api_key=36bd8fa335bfd9df2f7eb4d23e213e3e')->json();
        $topRatedTv = Http::get('https://api.themoviedb.org/3/tv/top_rated?api_key=36bd8fa335bfd9df2f7eb4d23e213e3e')->json();

        return view('tv.index', [
            'popularTv' => $popularTv['results'],
            'topRatedTv' => $topRatedTv['results']
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
        $tv = Http::get("https://api.themoviedb.org/3/tv/{$id}?append_to_response=credits,images,videos&api_key=36bd8fa335bfd9df2f7eb4d23e213e3e")->json();
        $tvRecommendations = Http::get("https://api.themoviedb.org/3/tv/{$id}/recommendations?api_key=36bd8fa335bfd9df2f7eb4d23e213e3e")->json();

        return view('tv.show', [
            'tv' => $tv,
            'tvRecommendations' => $tvRecommendations['results']
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
