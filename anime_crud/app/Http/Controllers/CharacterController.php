<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Character;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        $title = "Characters";

        return view('anime_characters/index', compact('title', 'characters'));
    }

    public function show($id)
    {
        $getall = Character::all();
        $character = Character::find($id);
        $title = "Anime Character";
        return view('anime_characters/show', compact('character','getall', 'title'));
    }
}
