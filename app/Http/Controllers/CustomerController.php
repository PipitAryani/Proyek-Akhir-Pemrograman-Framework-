<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; 
class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::latest()->paginate(5);

        return view('customers.index', compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'notelpon' => 'required',
            'jeniskelamin' => 'required',
        ]);

        Customer::create($request->all());

        return redirect()->route('customers.index')
            ->with('success', 'Data Berhasil Ditambahkan.');
    }
    public function edit(Customer $customer)
    {
        return view('customers.edit',compact('customer'));
    }
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'notelpon' => 'required',
            'jeniskelamin' => 'required',
        ]);
  
        $input = $request->all();
  
        $customer->update($input);
    
        return redirect()->route('customers.index')
                        ->with('success','Data Berhasil Diubah');
    }
    public function destroy(Customer $customer)
    {
        $customer->delete();
     
        return redirect()->route('customers.index')
                        ->with('success','Data Berhasil Dihapus');
    }
}
