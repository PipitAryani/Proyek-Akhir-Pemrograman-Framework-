<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai; 
class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::latest()->paginate(5);

        return view('pegawais.index', compact('pegawais'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('pegawais.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'notelpon' => 'required',
            'jeniskelamin' => 'required',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawais.index')
            ->with('success', 'Data Berhasil Ditambahkan.');
    }
    public function edit(Pegawai $pegawai)
    {
        return view('pegawais.edit',compact('pegawai'));
    }
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'notelpon' => 'required',
            'jeniskelamin' => 'required',
        ]);
  
        $input = $request->all();
  
        $pegawai->update($input);
    
        return redirect()->route('pegawais.index')
                        ->with('success','Data Berhasil Diubah');
    }
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
     
        return redirect()->route('pegawais.index')
                        ->with('success','Data Berhasil Dihapus');
    }
}
