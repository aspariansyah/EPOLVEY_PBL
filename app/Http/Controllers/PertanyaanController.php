<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Survey;

class PertanyaanController extends Controller
{
    // Menampilkan halaman tambah pertanyaan
    public function create(Survey $survey)
    {
        return view('admin.tambah_pertanyaan', compact('survey'));
    }

    public function store(Request $request, Survey $survey)
    {
        // Validasi input
        $request->validate([
            'pertanyaan.*' => 'required|string',
            'jenis.*' => 'required|in:essay,pilihan',
        ]);

        foreach ($request->pertanyaan as $index => $pertanyaan) {
            Question::create([
                'survey_id' => $survey->id,
                'pertanyaan' => $pertanyaan,
                'jenis' => $request->jenis[$index],
            ]);
        }

        return redirect()->route('admin.create_survey')->with('success', 'Pertanyaan berhasil ditambahkan');
    }

    public function editPertanyaan($id)
    {
        $pertanyaan = Question::findOrFail($id);
        return view('admin.edit_pertanyaan', compact('pertanyaan'));
    }

    public function updatePertanyaan(Request $request, $id)
    {
        $request->validate([
            'pertanyaan' => 'required|string',
            'jenis' => 'required|in:essay,pilihan',
        ]);

        $pertanyaan = Question::findOrFail($id);
        $pertanyaan->update($request->all());

        return redirect()->route('admin.pertanyaan', $pertanyaan->survey_id)
        ->with('success', 'Pertanyaan berhasil dihapus!');    }

    public function deletePertanyaan($id)
    {
        $pertanyaan = Question::findOrFail($id);
        $pertanyaan->delete();

        return redirect()->route('admin.pertanyaan', $pertanyaan->survey_id)
        ->with('success', 'Pertanyaan berhasil dihapus!');
    }
}

?>