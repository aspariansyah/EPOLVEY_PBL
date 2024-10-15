<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return view('dosen.dashboard');
    }
    public function result()
    {
        return view('dosen.result');
    }
    public function detail_result()
    {
        return view('dosen.detail_result');
    }
    public function prodil()
    {
        return view('dosen.profil');
    }
}
