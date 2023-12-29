<?php

namespace App\Http\Controllers;
  
use App\Models\Barang;
use App\Models\Customer;
use App\Models\Home;
use App\Models\Pegawai;
use App\Models\User;
use App\Models\Staff;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
        {
            $totalBarangs = Barang::count();
            $customers1 = customor::count(); // Gantilah sesuai model dan logika bisnis Anda
            $users = User::count();
           

            return view('dashboard', compact('totalBarangs', 'customers1', 'users'));
        }

}