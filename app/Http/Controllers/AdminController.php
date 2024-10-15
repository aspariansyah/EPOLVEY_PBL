<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); 
    }
    public function create_survey()
    {
        return view('admin.create_survey'); 
    }
    public function result_survey()
    {
        return view('admin.result_survey'); 
    }
    public function manage_accounts()
    {
        return view('admin.manage_accounts'); 
    }
}
