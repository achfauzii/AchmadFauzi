<?php

namespace App\Http\Controllers;

use App\Models\sekolah;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Siswa::all();
        return view('siswa',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sekolah = sekolah::all();
        return view('tambah', compact('sekolah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request ->validate([
            'nis' => 'required | integer',
            'nama' => 'required',
            'alamat' => 'required',
            'sekolah_id' => 'required'
        ]);
     
        // $data = new Siswa;
        // $data -> nis = $validator['nis'];
        // $data -> nama = $validator['nama'];
        // $data -> alamat = $validator['alamat'];

        // $data->save();

        Siswa::create($validator);
        return redirect('siswa')->with('success','Data Berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $data = Siswa::find($id);
       $sekolah = sekolah::all();
       return view('edit', compact('data','sekolah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request ->validate([
            'nis' => 'required | integer',
            'nama' => 'required',
            'alamat' => 'required',
            'sekolah_id' => 'required'
        ]);
        
        Siswa::find($id)->update($validator);
        return redirect('siswa')->with('success','Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Siswa::find($id)->delete();
        return redirect('siswa')->with('success', 'Data berhasil dihapus');
    }
}
