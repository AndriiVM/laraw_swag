<?php

namespace App\Http\Controllers;

use App\Http\Game;
use App\Http\Requests\GameRequest;

class GameController extends Controller
{
    public function index()
    {
        return Game::all();
    }

    public function store(GameRequest $request)
    {
        $day = Game::create($request->validated());
        return $day;
    }

    public function show(Game $game)
    {
        return $game = Game::findOrFail($game);
    }

    public function update(GameRequest $request, $id)
    {
        $game = Game::findOrFail($id);
        $game->fill($request->except(['game_id']));
        $game->save();
        return response()->json($game);
    }

    public function destroy(GameRequest $request, $id)
    {
        $game = Game::findOrFail($id);
        if($game->delete()) return response(null, 204);
    }
}
