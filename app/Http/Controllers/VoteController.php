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
        if (!$student) {
            return redirect('vote?error=Invalid studentid');
        }
        if ($student->votestatus == 1) {
            return redirect('vote?error=You already voted. you can only vote once');
        }
        return view('vote.confirm', compact('student'));
    }

    public function vote(Request $req, $studentid) {
        $positions = PositionModel::all();
        $candidates = CandidateModel::all()->toArray();

        $student = StudentModel::all()->where('studentid', $studentid)->first();
        if ($student->votestatus == 1) {
            return redirect('vote?error=You already voted. you can only vote once');
        }

        return view('vote.page', compact(
            'studentid',
            'positions',
            'candidates',
        ));
    }

    public function record(Request $request) {
        $positions = PositionModel::all();
        foreach($positions as $position) {
            $votedIDs = $request->input($position['positionindex']);
            foreach($votedIDs as $candidateid) {
                $candidate = CandidateModel::where('candidateid', $candidateid)->first();
                $candidate->votecount = $candidate->votecount + 1;
                $candidate->save();
                $position->votecount = $position->votecount + 1;
                $position->save();
            }

        }
        $voter = StudentModel::where('studentid', $request->input('studentid'))->first();
        $voter->votestatus = 1;
        $voter->save();
        return redirect('vote')->with('success', 'Voted successfully');
    }
}
