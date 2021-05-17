<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Carbon\Carbon;
use Auth;
class PengaduanController extends Controller
{
    

    public function tulis()
    {
        $user = Auth::guard('masyarakat')->user();
        $pengaduan = Pengaduan::where('id_masyarakat','=',$user->id)->where('status','=','proses')->orderBy('created_at','DESC')->paginate(5);
        $tanggapan = Pengaduan::where('id_masyarakat','=',$user->id)->where('status','=','selesai')->orderBy('created_at','DESC')->paginate(5);
        $tolak = Pengaduan::where('id_masyarakat','=',$user->id)->where('status','=','0')->orderBy('created_at','DESC')->paginate(5);
        // dd($pengaduan);
        return view('masyarakat.dashboard',compact('user','pengaduan','tanggapan','tolak'));
    }

public function index()
{
    $pengaduanProses = Pengaduan::where('status','=','proses')->orderBy('created_at','DESC')->get();
    return view('petugas.pengaduan.index',compact('pengaduanProses'));
}


public function detail($id)
{

    $showPengaduan = Pengaduan::find($id);
    return view('petugas.pengaduan.show',compact('showPengaduan'));
}


public function tanggapanDetail($id)
{
    
    $detail = Tanggapan::with('Pengaduan')->where('id_pengaduan','=',$id)->first();
    // dd($detail);

    return view('masyarakat.tanggapan',compact('detail'));

}


public function getEntri($id)
{
//  dd($id);
 $showPengaduan = Pengaduan::find($id);
 $petugas = Auth::guard('petugas')->user();
 
 return view('petugas.tanggapan.create',compact('showPengaduan','petugas'));
}

    public function postPengaduan(Request $request)
    {
        // dd($request->all());
        // $mas = Masyarakat::
        
        
        
        
        
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'isi_laporan' => 'required|max:300',
            'judul_laporan' => 'required|min:10',
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
                    'id_masyarakat' => $request->id_masyarakat,
                    'isi_laporan' => $request->isi_laporan,
                    'judul_laporan' => $request->judul_laporan,
                    'foto' => $namafile,
                    'status' => 'proses',
                    'created_at' => Carbon::now(),
                 ]);
                 return redirect()->back()->with('pesan','Berhasil Mengirim Pengaduan!');

    }


}
