<?php

namespace App\Http\Controllers;

use App\CoffeePick;
use DB;
use App\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coffee_picks = DB::table('coffee_picks')
            ->select('members.name AS member')
            ->addSelect(DB::raw('COUNT(1) AS total'))
            ->addSelect('teams.name AS team')
            ->join('members', 'members.id', 'coffee_picks.member_id')
            ->join('teams', 'teams.id', 'members.team_id')
            ->groupBy('members.id')
            ->get();

        return view('pages.dashboard', compact('coffee_picks'));
    }

    public function pick() {
        $currentDay = (string)now()->dayOfWeekIso;

        $member = DB::table('members')
            ->whereJsonContains('working_days->'.$currentDay, 'on')
            ->whereRaw('members.id NOT IN (SELECT member_id AS id FROM coffee_picks WHERE DATE(created_at) = CURDATE())')
            ->inRandomOrder()
            ->first();

        $message = 'All members are picked today!';

        if($member) {
            $pick = new CoffeePick();
            $pick->member_id = $member->id;
            $pick->save();

            $message = $member->name . ' is your turn to go for coffee!';
        }

        return redirect('/')->with('status', $message);
    }

}
