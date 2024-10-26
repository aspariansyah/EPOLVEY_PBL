<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MahasiswaSurveyController extends Controller
{
    public function show($id)
    {
        $survey = Survey::findOrFail($id);
        $questions = $survey->questions; // Mengambil pertanyaan berdasarkan survey

        return view('mahasiswa.survey_detail', compact('survey', 'questions'));
    }


    public function answer($surveyId)
    {
        // Mengambil survei beserta pertanyaan yang terkait
        $survey = Survey::with('questions')->findOrFail($surveyId);
        
        // Mengambil jawaban yang sudah diberikan oleh pengguna
        $answers = Answer::where('user_id', auth()->id())
                         ->whereIn('question_id', $survey->questions->pluck('id'))
                         ->get()
                         ->keyBy('question_id'); // Mengubah ke key berdasarkan question_id

        $questions = $survey->questions;
        return view('mahasiswa.answer', compact('survey', 'questions', 'answers'));
    }

    public function submitSurvey(Request $request)
{
    // Validasi jawaban
    $request->validate([
        'answers' => 'required|array',
        'answers.*.question_id' => 'required|exists:questions,id',
        'answers.*.jawaban' => 'required_if:answers.*.jenis,essay', // Pastikan jawaban untuk essay tidak kosong
    ]);

    // Cek setiap jawaban
    foreach ($request->answers as $answer) {
        $questionId = $answer['question_id'];
        $jawaban = $answer['jawaban'];
        $question = Question::findOrFail($questionId);

        // Proses penyimpanan jawaban
        if ($question->jenis === 'essay') {
            // Validasi minimal 20 kata untuk jawaban essay
            if (str_word_count($jawaban) < 20) {
                return redirect()->back()->withErrors([
                    'answers.*.jawaban' => 'Jawaban harus terdiri dari minimal 20 kata.'
                ])->withInput();
            }

            // Simpan jawaban essay
            Answer::updateOrCreate(
                [
                    'question_id' => $questionId,
                    'user_id' => auth()->id(),
                ],
                [
                    'jawaban' => $jawaban,
                    'skor' => null, // Kosongkan skor untuk jawaban essay
                ]
            );

        } elseif ($question->jenis === 'pilihan') {
            // Simpan nilai untuk jawaban pilihan
            Answer::updateOrCreate(
                [
                    'question_id' => $questionId,
                    'user_id' => auth()->id(),
                ],
                [
                    'jawaban' => null, // Kosongkan jawaban untuk jawaban pilihan
                    'skor' => $jawaban, // Simpan nilai
                ]
            );
        }
    }

    return redirect()->route('mahasiswa.dashboard')->with('success', 'Jawaban survei berhasil disimpan!');
}

}
