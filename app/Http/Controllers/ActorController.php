<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $popularActor = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkN2Y1OTg3YjdmYTE1YTUzN2E0MDRhY2JhOTE5MGJlNyIsIm5iZiI6MTc0OTE3MTc4MS44NjMwMDAyLCJzdWIiOiI2ODQyM2U0NTE0MDQ0ZDNjOWE0NTY0YTQiLCJzY29wZXMiOlsiYXBpX3JlYWQiXSwidmVyc2lvbiI6MX0.-5PZU5mn7x88G1pg9IontXTOY7epUGojtzbr7dwszyg')
            ->get('https://api.themoviedb.org/3/person/popular')
            ->json()['results'];
        // dump($popularActor);
        return view('actor.index', ['popularActor' => $popularActor]);
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
        $actors = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkN2Y1OTg3YjdmYTE1YTUzN2E0MDRhY2JhOTE5MGJlNyIsIm5iZiI6MTc0OTE3MTc4MS44NjMwMDAyLCJzdWIiOiI2ODQyM2U0NTE0MDQ0ZDNjOWE0NTY0YTQiLCJzY29wZXMiOlsiYXBpX3JlYWQiXSwidmVyc2lvbiI6MX0.-5PZU5mn7x88G1pg9IontXTOY7epUGojtzbr7dwszyg')
            ->get('https://api.themoviedb.org/3/person/' . $id . '?append_to_response=combined_credits')
            ->json();
        // dump($actors);
        return view('actor.show', ['actors' => $actors]);
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
