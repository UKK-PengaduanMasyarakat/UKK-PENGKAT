<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class PengaduanController extends Controller
{
    

    public function tulis()
    {
        $user = Auth::guard('masyarakat')->user();
        return view('masyarakat.dashboard',compact('user'));
    }
}
