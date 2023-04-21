<?php

namespace App\Http\Controllers;

use App\Models\player;
use App\Models\team;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($team_id)
    {
        $team_get = team::where('team_id', '=', $team_id)->firstOrFail();
        $team_name = $team_get->team_name;
        return view('player.add', compact('team_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $team_id)
    {
        $request->validate([
            'p_shirtnumber'=>'numeric|min:1|max:99'
        ]);

        $new = player::create([
            'team_id' => $team_id,
            'p_fullname' => $request->txtTenCT,
            'p_sex' => $request->txtGioiTinh,
            'p_dob' => $request->txtNgaySinh,
            'p_birthplace' => $request->txtNoiSinh,
            'p_shirtnumber' => $request->p_shirtnumber
        ]);
        return redirect('player/'.$team_id.'/show')->with('status', 'Thêm cầu thủ thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\player  $player
     * @return \Illuminate\Http\Response
     */
    public function show($team_id)
    {
        $players = player::where('team_id', '=', $team_id)->get();
        $team_get = team::where('team_id', '=', $team_id)->firstOrFail();
        $team_name = $team_get->team_name;
        return view('player.team', compact('players', 'team_id', 'team_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($p_id)
    {
        $player = player::where('p_id', '=', $p_id)->firstOrFail();
        $team_id = $player->team_id;
        $player->delete();
        return redirect('player/'.$team_id.'/show')->with('status', 'Xóa cầu thủ thành công');
    }
}
