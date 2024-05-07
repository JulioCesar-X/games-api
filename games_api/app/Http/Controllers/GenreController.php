<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use Exception;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return response()->json(Genre::all(), 200);
        } catch (Exception $exception) {
            return response()->json(['error' => $exception], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genre = Genre::create($request->all());
        return response()->json($genre, 201);
    }

    /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        try {

            return response()->json($genre, 200);
        } catch (Exception $exception) {

            return response()->json(['error' => $exception], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genre $genre)
    {
        try {

            $genre->update($request->all());

            return response()->json($genre, 200);
        } catch (Exception $exception) {

            return response()->json(['error' => $exception], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *

     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
        try {

            $genre->delete();

            return response()->json(['message' => 'Deleted'], 205);
        } catch (Exception $exception) {

            return response()->json(['error' => $exception], 500);
        }
    }
}
