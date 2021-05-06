<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
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
        $petugas = Petugas::paginate(5);
        return view('petugas.petugas.index',compact('petugas'));
        
    }

    public function create()
    {
        $petugas = Petugas::all();
        return view('petugas.petugas.create',compact('petugas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_petugas' => 'required',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required|in:petugas,admin',
            'telp' => 'required',
        ]);

        Petugas::create(
            [
                'nama_petugas' =>$request->nama_petugas,
                'username' =>$request->username,
                'password' => Hash::make($request->password),
                'level' =>$request->level,
                'telp' =>$request->telp,
            ]
        );
        return redirect()->route('data.petugas')->with(['success' => 'Data Petugas '.$request->id.'Berhasil Di Tambah']);

    }


    public function edit($id)
    {
        $petugas = Petugas::find($id);

        return view('petugas.petugas.edit',compact('petugas'));

    }
    public function update(Request $request,$id)
    {
        // dd($id);
        $request->validate([
            'nama_petugas' => 'required',
            'username' => 'required',
            'password' => 'required',
            // 'password' => 'required',
            'level' => 'required',
            'telp' => 'required',
             ]);
            if ($request->password === null) {
                Petugas::find($id)->update([
                   'nama_petugas' => $request->nama_petugas,
                   'username' => $request->username,
                   'password' => $request->password,
                   'level' => $request->level,
                   'telp' => $request->telp,
                ]);

                return redirect()->route('data.petugas')->with('success','Berhasil update Data Petugas '.$request->nama_petugas.'');

            }else{
                Petugas::find($id)->update([
                    'nama_petugas' => $request->nama_petugas,
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'level' => $request->level,
                    'telp' => $request->telp,
                 ]);
                return redirect()->route('data.petugas')->with('success','Berhasil update Data Petugas '.$request->nama_petugas.'');

            }
    }
    public function destroy(Request $request, $id)
    {
        Petugas::find($id)->delete($request->all());
        return redirect()->route('data.petugas')->with(['danger' => 'Data Petugas '.$request->nama_petugas.'Berhasil Di Hapus']);
    }

}
