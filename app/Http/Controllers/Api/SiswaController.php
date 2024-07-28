<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Siswa::all();
        return response([
            'statusCode' =>200,
            'message'=>'Data berhasil ditemukan',
            'Total' => $data->count(),
            'data' => $data
        ], 200);
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

        Siswa::create($validator);

        return response([
            'statusCode' =>201,
            'message'=>'Data berhasil disimpan',
            'data' => $validator
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            $data = Siswa::findOrFail($id);
            return response([
               'statusCode' =>200,
               'message'=>'Data berhasil ditemukan',
               'data' => $data
           ], 200);
        }catch (\Throwable $th){
            return response([
                'statusCode' =>404,
                'message'=>'Data tidak berhasil ditemukan',
               
            ], 404);
        }
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validator = $request ->validate([
                'nis' => 'required | integer',
                'nama' => 'required',
                'alamat' => 'required',
                'sekolah_id' => 'required'
            ]);
            $data = Siswa::find($id);
            $data -> update($validator);
            return response([
                'statusCode' =>200,
                'message'=>'Data berhasil diupdate',
                'data' => $data
            ], 200);
        } catch (\Throwable $th) {
            return response([
                'statusCode' =>400,
                'message'=>'Data gagal di update',
                'error' => $th
            ], 400);
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Siswa::find($id)->delete();
        return response([
            'statusCode' =>200,
            'message'=>'Data berhasil hapus',
        ], 200);
    }
}
