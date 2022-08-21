<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $leaderboard = Peserta::select()->orderBy('total_nilai', 'desc')->limit(5)->get();
        return view('leaderboard', ['pesertas' => $leaderboard]);
    }
}