<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Musician;
use Illuminate\Http\Request;

class MusicianController extends Controller
{
    public function musicians()
    {
        $musician = Musician::all();
        return view("backend.pages.musician.musicians", compact('musician'));
    }

    public function form()
    {
        return view("backend.pages.musician.form");
    }

    public function create(Request $request)
    {
        Musician::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'band' => $request->band,
        ]);
        return redirect()->route('musicians');
    }

    public function updateForm($id)
    {
        $musician = Musician::find($id);
        return view('backend.pages.musician.update', compact('musician'));
    }

    public function update(Request $request, $id)
    {
        $musician = Musician::find($id);
        $musician->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'band' => $request->band,
        ]);
        return redirect()->route('musicians');
    }

    public function delete($id)
    {
        $musician = Musician::find($id)->delete();
        return redirect()->back();
    }

    public function singleView($id)
    {
        $musician = Musician::find($id);
        return view('backend.pages.musician.view', compact('musician'));
    }
}
