<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        Game::create([
            'name' => $request->name,
            'subtitle' => $request->subtitle,
            'developer' => $request->developer,
            'releaseDate' => $request->releaseDate,
            'category' => $request->category,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('games.index')->with('success', 'Juego creado correctamente');
    }

    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, $id)
    {
        $game = Game::findOrFail($id);
        
        $game->update([
            'name' => $request->name,
            'subtitle' => $request->subtitle,
            'developer' => $request->developer,
            'releaseDate' => $request->releaseDate,
            'category' => $request->category,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('games.index')->with('success', 'Juego actualizado correctamente');
    }

    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect()->route('games.index')->with('success', 'Juego eliminado correctamente');
    }
}