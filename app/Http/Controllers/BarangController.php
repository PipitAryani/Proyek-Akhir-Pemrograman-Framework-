<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang; 
class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::latest()->paginate(5);

        return view('barangs.index', compact('barangs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('barangs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namabarang' => 'required',
            'hargabarang' => 'required',
            'stokbarang' => 'required',
            'kategoribarang' => 'required',
            'foto' => 'required',
        ]);

        $data = Barang::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotobarang/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('barangs.index')
            ->with('success', 'Data Berhasil Ditambahkan.');
    }
    public function edit(Barang $barang)
    {
        return view('barangs.edit',compact('barang'));
    }
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'namabarang' => 'required',
            'hargabarang' => 'required',
            'stokbarang' => 'required',
            'kategoribarang' => 'required',
        ]);
  
        $input = $request->all();
  
        $barang->update($input);
    
        return redirect()->route('barangs.index')
                        ->with('success','Data Berhasil Diubah');
    }
    public function destroy(Barang $barang)
    {
        $barang->delete();
     
        return redirect()->route('barangs.index')
                        ->with('success','Data Berhasil Dihapus');
    }
}
