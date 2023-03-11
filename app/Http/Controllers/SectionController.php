<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;


class SectionController extends Controller
{
    //
    public  function section()
    {
        $sections = Section::paginate(3);
        return view('section.section', compact('sections'));
    }

    public function addsection(Request $req)
    {
        $req->validate([
            'section' => 'required|unique:sections',
        ]);

        Section::create([
            'section' => $req->section,

        ]);
        // return redirect()->route('dashboard');
        // return view('section.section');
        return redirect()->route('section')->with('success',"Section added successfully");

    }
    public function edit($id)
    {
        $section = Section::find($id);
        return view('section.editSection', ['section' => $section]);
    }
    public function editsection(Request $req)
    {
        $section = Section::find($req->id);
        $section->update([
            'section' => $req->section,
        ]);
        return redirect()->route('section')->with('success',"Section updated successfully");
    }
    public function deletesection($id)
    {
        $section = Section::find($id);
        $section->delete();
        return redirect()->route('section')->with('success',"Section deleted successfully");
    }
}
