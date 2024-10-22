<?php
namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); 
    }
    public function create_survey()
    {
        $surveys = Survey::all();
        return view('admin.create_survey', compact('surveys')); 
    }
    public function result_survey()
    {
        return view('admin.result_survey'); 
    }
    public function manage_accounts()
    {
        return view('admin.manage_accounts'); 
    }
    public function add_survey()
    {
        return view('admin.add_survey'); 
    }
    
    
}
