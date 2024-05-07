<?php

namespace App\Http\Controllers;
use Exception;
use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return response()->json(Game::with(['genres', 'platforms'])->get(), 200);
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

        $game = Game::create($request->all());
        $game->genres()->sync($request->genres);
        $game->platforms()->sync($request->platforms);
        return response()->json($game->load(['genres', 'platforms']), 201);
    }

    /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        try {
            return response()->json($game->load(['genres', 'platforms']), 200);
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
    public function update(Request $request, Game $game)
    {
        try {

            $game->update($request->all());

            return response()->json($game->load(['genres', 'platforms']), 200);
        } catch (Exception $exception) {

            return response()->json(['error' => $exception], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *

     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        try {

            $game->delete();

            return response()->json(['message' => 'Deleted'], 205);
        } catch (Exception $exception) {

            return response()->json(['error' => $exception], 500);
        }
    }
}
