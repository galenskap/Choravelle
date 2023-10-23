<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PrivatespaceController extends Controller
{
    // Partothèque
    public function partotheque(Request $request): View
    {
        // if there is a request for a song title, we look for all corresponding songs
        if ($request->has('title')) {
            $songs = Song::where('title', 'like', '%' . $request->input('title') . '%')->get();
        } else {
            $songs = Song::all();
        }
        
        return view('partotheque', ['songs' => $songs]);
    }

    // Trombinoscope
    public function trombinoscope(): View
    {
        return view('trombinoscope');
    }
}
