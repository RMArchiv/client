<?php

namespace App\Http\Controllers;

use App\Helpers\ApiHelper;
use App\Models\Base\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        // Aktualisieren der Games Tabelle der Datenbank
        ApiHelper::getGames();

        // Laden der 4 meißt angeschauten Spiele.
        $data = Game::orderBy('views', 'DESC')->limit(4)->get();

        //Übergabe der Infos an View
        return view('dashboard',[
            'data' => $data
        ]);
    }
}
