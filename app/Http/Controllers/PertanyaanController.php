<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    //
    public function index(){
        //$tanya = DB::table('pertanyaan')->get();
        //dd($pertanyaan);
        $tanya = Pertanyaan::all();
        return view('pertanyaan.index',compact('tanya'));

    }

    //
    public function create()
    {
        return view('pertanyaan.add');
    }

    //
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255|', //unique:
            'isi' => 'required',
        ]);

       /* $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "profil_id" => 1 ,
            "jawaban_tepat_id" => 1,
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]); */

        $tanya = new Pertanyaan;

        $tanya->judul = $request['judul'];
        $tanya->isi = $request['isi'];
        $tanya->profil_id = 1;
        $tanya->jawaban_tepat_id = 1;
        $tanya->created_at = date('Y-m-d H:i:s');
        $tanya->updated_at = date('Y-m-d H:i:s');
        $tanya ->save();

       /* $tanya = Pertanyaan::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "profil_id" => 1,
            "jawaban_tepat_id" => 1,
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]) */

        return redirect ('/pertanyaan')->with('success','Data Berhasil ditambah');
    }

    //
    public function show($id)
    {
        //$tanya = DB::table('pertanyaan')->where('id', $id)->first();
        $tanya = Pertanyaan::find($id);
        return view('pertanyaan.detail', compact('tanya'));
    }

    //
    public function edit($id)
    {
        //$tanya = DB::table('pertanyaan')->where('id', $id)->first();
        $tanya = Pertanyaan::find($id);
        return view('pertanyaan.edit', compact('tanya'));
    }

    //
    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255|', //unique:
            'isi' => 'required',
        ]);

        /* $query = DB::table('pertanyaan')->where('id',$id)->update([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "profil_id" => 1,
            "jawaban_tepat_id" => 1,
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]); */

        $tanya = Pertanyaan::find($id);

        $tanya->judul = $request['judul'];
        $tanya->isi = $request['isi'];
        $tanya->profil_id = 1;
        $tanya->jawaban_tepat_id = 1;
        $tanya->created_at = date('Y-m-d H:i:s');
        $tanya->updated_at = date('Y-m-d H:i:s');
        $tanya->save();

        /*$update = Pertanyaan::where('id', $id)->update([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "profil_id" => 1,
            "jawaban_tepat_id" => 1,
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]) */

        return redirect('/pertanyaan')->with('success', 'Data Berhasil diupdate');

    }

    //
    public function destroy($id)
    {
        //$query = DB::table('pertanyaan')->where('id',$id)->delete();
        Pertanyaan::destroy($id);
        return redirect('/pertanyaan')->with('success', 'Data Berhasil di hapus');

    }
}
