<?php

namespace App\Http\Controllers;

use App\Models\PositionModel;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index() {
        $positions = PositionModel::all();

        return view('positions.list', compact('positions'));
    }

    public function addForm () {
        return view('positions.add');
    }

    public function add(Request $request) {
        $position = new PositionModel;
        $position->position = $request->input('positionname');
        $position->save();
        return redirect('/positions')->with('success', 'Position added successfully');
    }

    public function updateForm($positionindex) {
        $position = PositionModel::where('positionindex', $positionindex)->first();
        return view('positions.update', compact('position'));
    }

    public function update(Request $request) {
        $position = PositionModel::where('positionindex', $request->input('positionindex'))->first();
        $position->position = $request->input('positionname');
        $position->save();
        return redirect('/positions')->with('success', 'Position updated successfully');
    }

    public function delete($positionindex) {
        PositionModel::destroy($positionindex);
        return redirect('/positions')->with('success', 'Position deleted successfully');
    }
}
