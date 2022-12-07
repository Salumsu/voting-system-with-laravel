<?php

namespace App\Http\Controllers;

use App\Models\CandidateModel;
use App\Models\PositionModel;
use App\Models\StudentModel;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index() {
        $candidates = CandidateModel::all()->sortBy('positionindex');
        return view('candidates.list', compact('candidates'));
    }

    public function addForm(Request $request) {
        $studentid = $request->input('studentid');
        if ($studentid) {
            $student = StudentModel::where('studentid', $studentid)->first();
            if (!$student) {
                return redirect('/candidates/add?error=Invalid student id');
            }

            $candidate = CandidateModel::where('studentid', $studentid)->first();
            if ($candidate) {
                return redirect('/candidates/add?error=This student is already a candidate');
            }
            $positions = PositionModel::all();
            return view('candidates.add', compact('positions', 'studentid', 'student', 'candidate'));
        } else {
            return view('candidates.search');
        }
    }

    public function add(Request $request) {
        $candidate = new CandidateModel;
        $position = $request->input('position');
        $candidate->studentid = $request->input('studentid');
        $candidate->candidatename = $request->input('candidatename');
        $candidate->positionindex = $position[0];
        $candidate->position = substr($position, 2);
        $candidate->yearlevel = $request->input('yearlevel');
        $candidate->save();

        return redirect('/candidates');
    }

    public function updateForm(Request $request, $candidateid) {
        $candidate = CandidateModel::where('candidateid', $candidateid)->first();
        $positions = PositionModel::all();
        
        return view('candidates.update', compact('candidate', 'positions'));
    }

    public function update(Request $request) {
        $candidate = CandidateModel::where('candidateid', $request->input('candidateid'))->first();
        $position = $request->input('position');
        $candidate->positionindex = $position[0];
        $candidate->position = substr($position, 2);
        $candidate->save();
        return redirect('/candidates');
    }

    public function delete(Request $request, $candidateid) {
        CandidateModel::destroy($candidateid);
        return redirect('/candidates');
    }
}
