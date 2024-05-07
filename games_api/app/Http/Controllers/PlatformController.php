<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Platform;
use Exception;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return response()->json(Platform::all(), 200);
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
        $platform = Platform::create($request->all());
        return response()->json($platform, 201);
    }

    /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function show(Platform $platform)
    {
        try {

            return response()->json($platform, 200);
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
    public function update(Request $request, Platform $platform)
    {
        try {

            $platform->update($request->all());

            return response()->json($platform, 200);
        } catch (Exception $exception) {

            return response()->json(['error' => $exception], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *

     * @return \Illuminate\Http\Response
     */
    public function destroy(Platform $platform)
    {
        try {

            $platform->delete();

            return response()->json(['message' => 'Deleted'], 205);
        } catch (Exception $exception) {

            return response()->json(['error' => $exception], 500);
        }
    }
}
