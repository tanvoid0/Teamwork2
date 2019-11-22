<?php

namespace App\Http\Controllers;

use App\TeamPlayer;
use Illuminate\Http\Request;

class TeamPlayerController extends Controller
{
    public function index()
    {
        return TeamPlayer::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $player = new TeamPlayer;
        $player->user_id = $request->user_id;
        $player->team_id = $request->team_id;
        if($request->has('lane')){
            $player->lane = $request->lane;
        }
        if($request->has('role')){
            $player->role = $request->role;
        }
        $player->save();
        return response()->json([$player, 201]);
    }

    public function show(TeamPlayer $teamPlayer)
    {
        //
    }

    public function edit(TeamPlayer $teamPlayer)
    {
        //
    }

    public function update(Request $request, TeamPlayer $teamPlayer)
    {
        //
    }

    public function destroy(TeamPlayer $teamPlayer)
    {
        //
    }
}
