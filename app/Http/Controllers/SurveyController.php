<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function create()
    {
        return view('admin.add_survey');
    }
    
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis' => 'required|in:IKAD,Survey kepuasan,Jenis baru',
            'semester' => 'required|in:1,2,3,4,5,6',
            'tahun' => 'required|digits:4|integer',
            'status' => 'required|in:berlangsung,selesai',
        ]);
    
        // Simpan data survei
        Survey::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'status' => $request->status,
        ]);
    
        return redirect()->route('admin.create_survey')->with('success', 'Survey berhasil ditambahkan');
    }

    public function edit(Survey $survey)
    {
        return view('admin.edit_survey', compact('survey'));
    }

    // Update survei
    public function update(Request $request, Survey $survey)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis' => 'required',
            'semester' => 'required',
            'tahun' => 'required|digits:4',
            'status' => 'required',
        ]);

        $survey->update($request->all());

        return redirect()->route('admin.create_survey')->with('success', 'Survey updated successfully.');
    }

    // Delete survei
    public function destroy(Survey $survey)
    {
        $survey->delete();
        return redirect()->route('admin.create_survey')->with('success', 'Survey deleted successfully.');
    }
    
}
