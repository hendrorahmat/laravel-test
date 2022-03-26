<?php

namespace App\Http\Controllers;

use App\Services\ChampionLeagueService;
use Illuminate\Http\Request;

class ChampionLeagueController extends Controller
{
    /**
     * @var ChampionLeagueService
     */
    private $championLeagueService;

    public function __construct(ChampionLeagueService $championLeagueService)
    {
        $this->championLeagueService = $championLeagueService;
    }

    public function index()
    {
        $this->championLeagueService->generateChampionLeague();
        return view('champions-league');
    }
}
