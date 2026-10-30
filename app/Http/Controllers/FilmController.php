<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Models\Film;/

class FilmController extends Controller
{
    public function index()
    {
        return view('films.index');
    }

    public function create(){
        return view('films.create');
    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => ['required'],
    //         'year' => ['required'],
    //         'duration' => ['required']
    //     ]);
    //     $film = new Film();
    //     $film->title = $request->title;
    //     $film->year = $request->year;
    //     $film->duration = $request->duration;
    //     $film->save();
    //     return redirect('/films')->with('success', "'{$film->title}' was added to the database.");
    // }
}



?>
