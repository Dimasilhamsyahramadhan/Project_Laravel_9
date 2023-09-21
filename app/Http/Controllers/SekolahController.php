<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sekolahhs;

class SekolahController extends Controller
{
    public function index()
    
    {
        return view('sekolahhs.index', [
          'sekolahhs' => sekolahhs::get()
        ]);
    }

    public function create()

 {
    return view('sekolahhs.create');
 }

  public function store(Request $request)
  {

      $sekolahs = new Sekolahhs();

     $sekolahs-> nama_sekolah = $request->nama_sekolah;
     $sekolahs-> alamat = $request->alamat;
     $sekolahs-> jurusan = $request->jurusan;
     $sekolahs-> jumlah_guru = $request->jumlah_guru;

     $sekolahs->save();

     return redirect()->back();


     return redirect()->route('sekolahhs.index');
  }


  public function edit($id)
  {
   $sekolahhs = sekolahhs::find($id);

   return view('sekolahhs.edit',[
    'sekolahhs'=> $sekolahhs
  ]);
  }

  public function update (Request $request, $id)
  {
    
    $sekolahs = sekolahhs::find($id);

    $sekolahs-> nama_sekolah = $request->nama_sekolah;
    $sekolahs-> alamat = $request->alamat;
    $sekolahs-> jurusan = $request->jurusan;
    $sekolahs-> jumlah_guru = $request->jumlah_guru;

    $sekolahs->save();


    return redirect()->route('sekolahhs.index');
  }
  public function destroy($id)
  {
    $sekolahhs = sekolahhs::find($id);
    $sekolahhs->delete(null);
    return redirect()->route('sekolahhs.index');
  }
}