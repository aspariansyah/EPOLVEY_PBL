<?php
namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $surveys = Survey::all(); // Atau gunakan Survey::paginate() jika datanya banyak

        // Kirim data ke view dashboard.blade.php
        return view('admin.dashboard', compact('surveys'));
    }
    public function create_survey()
    {
        $surveys = Survey::all();
        return view('admin.create_survey', compact('surveys')); 
    }
    public function analys_survey()
    {
        return view('admin.analys_survey'); 
    }
    public function manage_accounts()
    {
        return view('admin.manage_accounts'); 
    }
    public function add_survey()
    {
        return view('admin.add_survey'); 
    }
    public function result_survey()
    {
        return view('admin.result_survey'); 
    }
    public function profil()
    {
        return view('admin.profil'); 
    }
    public function setting()
    {
        return view('admin.seting'); 
    }
}
