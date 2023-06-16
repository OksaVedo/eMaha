<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MhsAPIController extends Controller
{
    public function read()
    {
        $mhs = Mahasiswa::all();
        return response()->json([
            'succes' => true,
            'message' => 'Data Berhasil Ngab',
            'data' => $mhs
        ], 200);
    }

    public function create(Request $request)
    {
        $mhs = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat,
        ]);

        if ($mhs)
        {
            return response()->json([
                'succses'=>true,
                'message'=>'Data Berhasil Ditambah'
            ], 200);
        }
        else
        {
            return response()->json([
                'succses'=>false,
                'message'=>'Data Gugugaga Ditambah'
            ], 400);
        }
    }

    public function update($id, Request $request)
    {
        $mhs = Mahasiswa::find($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat,
        ]);

        if ($mhs)
        {
            return response()->json([
                'succses'=>true,
                'message'=>'Data Berhasil Ditambah'
            ], 200);
        }
        else
        {
            return response()->json([
                'succses'=>false,
                'message'=>'Data Gugugaga Ditambah'
            ], 400);
        }
    }

    public function delete($id)
    {
        $mhs = Mahasiswa::find($id)->delete();

        if ($mhs)
        {
            return response()->json([
                'succses'=>true,
                'message'=>'Data Berhasil Dihapus'
            ], 200);
        }
        else
        {
            return response()->json([
                'succses'=>false,
                'message'=>'Data Tidak terhapus'
            ], 400);
        }
    }
}
