<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelompokController extends Controller
{
    function index(){
        $kelompok= \DB::table('kelompok')->get();
        $data = array('kelompok' => $kelompok, 'content'=>'kelompok/index');

        return view ('layout/template', $data);

    }
    public function tambah(){
        // return ('Testing');
        $data = array('content' => 'kelompok/tambah');
        return view ('layout/template', $data);
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('kelompok')
         ->insert([
             'nama_kelompok'  =>  $request->nama_kelompok,
             'jenis_kelompok'  =>  $request->jenis_kelompok,
             'keterangan_kelompok'  =>  $request->keterangan_kelompok,
             
         ]);
         return redirect('kelompok');
     }
 
     public function edit($id){
         // return ('Testing');
         $kelompok = \DB::table('kelompok')->where('id', $id)->first();
         //dd($akun);
         $data = array('kelompok' => $kelompok, 'content' => 'kelompok/edit');
         //return view('kelompok/edit', $data);
         return view('layout/template', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('kelompok')->where('id',$request->id)
         ->update([
            'nama_kelompok'  =>  $request->nama_kelompok,
            'jenis_kelompok'  =>  $request->jenis_kelompok,
            'keterangan_kelompok'  =>  $request->keterangan_kelompok,
         ]);
         return redirect('kelompok');
     }
 
     public function delete ($id){
         $query = \DB::table('kelompok')->where('id',$id)->delete();
         return redirect('kelompok');
     }
 }

