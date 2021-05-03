<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PetugasController extends Controller
{
    



    public function dashboard()
    {
        $admin = Auth::guard('petugas')->user();
        return view('petugas.dashboard',compact('admin'));
    }
}
