<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\Hash;
use Auth;
class MasyarakatController extends Controller
{
    


    public function registerForm()
    {
        return view('register');
    }


    public function registerPost(Request $request)
    {
        $request->validate([
            'nik' => 'required|min:10',
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:5',
            'telp' => 'required',
             ]);

             Masyarakat::create([
                'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
             ]);

             return redirect()->route('login')->with('success','Berhasil Daftar!');

    }

    public function dashboard()
    {
        $user = Auth::guard('masyarakat')->user();
        return view('masyarakat.dashboard',compact('user'));
    }





    public function index()
    {   
        $masyarakat = Masyarakat::paginate(10);
        return view('petugas.masyarakat.index',compact('masyarakat'));
        
    }
    public function edit($id)
    {
        $masyarakat = Masyarakat::find($id);

        return view('petugas.masyarakat.edit',compact('masyarakat'));

    }
    public function update(Request $request,$id)
    {
        // dd($id);
        $request->validate([
            'nik' => 'required|min:10',
            'nama' => 'required',
            'username' => 'required',
            // 'password' => 'required',
            'telp' => 'required',
             ]);
            if ($request->password === null) {
                Masyarakat::find($id)->update([
                   'nik' => $request->nik,
                   'nama' => $request->nama,
                   'username' => $request->username,
                   'telp' => $request->telp,
                ]);

                return redirect()->route('data.masyarakat')->with('success','Berhasil update Data Masyarakat '.$request->nama.'');

            }else{
                Masyarakat::find($id)->update([
                    'nik' => $request->nik,
                    'nama' => $request->nama,
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'telp' => $request->telp,
                 ]);
                return redirect()->route('data.masyarakat')->with('success','Berhasil update Data Masyarakat '.$request->nama.'');

            }
    }
    public function destroy($id)
    {

        // $masyarakat->delete();  

        Masyarakat::destroy($id);

        
      //  return redirect()->route('siswa.index')->with(['success'=>'Berhasil menambah data siswa']);
       return redirect()->route('data.masyarakat')->with('success','Berhasil Delete Data  ');

        }

}

