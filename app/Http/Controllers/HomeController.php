<?php

namespace App\Http\Controllers;

use App\Helpers\ApiHelper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        // Aktualisieren der Games Tabelle der Datenbank
        ApiHelper::getGames();

        return view('dashboard');
    }
}
