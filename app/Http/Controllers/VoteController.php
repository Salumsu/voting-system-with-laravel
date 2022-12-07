<?php

namespace App\Http\Controllers;

use App\Models\CandidateModel;
use App\Models\PositionModel;
use Illuminate\Http\Request;
use App\Models\StudentModel;

class VoteController extends Controller
{
    public function index() {
        return view('vote.enterkey');
    }

    public function confirm(Request $req) {
        $key = $req->input('voterskey');
        $student = StudentModel::all()->where('voterskey', $key)->first();
        return view('vote.confirm', compact('student'));
    }

    public function vote(Request $req, $studentid) {
        $positions = PositionModel::all();
        $candidates = CandidateModel::all()->toArray();

        return view('vote.page', compact(
            'studentid',
            'positions',
            'candidates',
        ));
    }

    public function record(Request $request) {
        return $request->input();
    }
}
