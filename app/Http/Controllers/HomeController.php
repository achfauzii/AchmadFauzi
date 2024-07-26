<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //Method Controller setelah login dan pengecekan, jika sebagai admin akan diarahkan ke dalam halaman siswa
    //Selain admin di arahkan ke halaman home
    public function index()
    {
        if(Auth::user()->role == 'admin'){
            return redirect('siswa');
        }else{
            return view('home');
        }
    }
}
