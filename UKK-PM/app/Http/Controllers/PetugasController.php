<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Petugas;

class PetugasController extends Controller
{
    



    public function dashboard()
    {
        $admin = Auth::guard('petugas')->user();
        return view('petugas.dashboard',compact('admin'));
    }


    public function index()
    {   
        $petugas = Petugas::paginate(3);
        return view('petugas.petugas.index',compact('petugas'));
        
    }
}
