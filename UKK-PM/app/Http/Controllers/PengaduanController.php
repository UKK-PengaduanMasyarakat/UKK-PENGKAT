<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Carbon\Carbon;
use Auth;
class PengaduanController extends Controller
{
    

    public function tulis()
    {
        $user = Auth::guard('masyarakat')->user();
        return view('masyarakat.dashboard',compact('user'));
    }



    public function postPengaduan(Request $request)
    {
        // dd($request->all());
        // $mas = Masyarakat::
        
        
        
        
        
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'isi_laporan' => 'required|max:300',
        ],[
            'required' => 'Input Tidak boleh kosong!',
            'mimes' => 'Harus jpg,png,jpeg,giv,svg',
            'max' => 'Tidak boleh lebih '
        ]);

            $nm = $request->foto;
            $namafile = $nm->getClientOriginalName();
            $nm->move(public_path().'/img',$namafile);
    
                 Pengaduan::create([
                    'tgl_pengaduan' => Carbon::now(),
                    'nik' => $request->nik,
                    'isi_laporan' => $request->isi_laporan,
                    'foto' => $namafile,
                    'status' => '0',
                 ]);
                 

                 return redirect()->back()->with('pesan','Berhasil Mengirim Pengaduan!');

    }
}
