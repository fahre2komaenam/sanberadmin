<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TanyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tanya = Pertanyaan::all();
        return view('pertanyaan.index', compact('tanya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pertanyaan.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'judul' => 'required|max:255|', //unique:
            'isi' => 'required',
        ]);

        $tanya = new Pertanyaan;

        $tanya->judul = $request['judul'];
        $tanya->isi = $request['isi'];
        $tanya->profil_id = 1;
        $tanya->jawaban_tepat_id = 1;
        $tanya->created_at = date('Y-m-d H:i:s');
        $tanya->updated_at = date('Y-m-d H:i:s');
        $tanya->save();

        return redirect('/pertanyaan')->with('success', 'Data Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tanya = Pertanyaan::find($id);
        return view('pertanyaan.detail', compact('tanya'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tanya = Pertanyaan::find($id);
        return view('pertanyaan.edit', compact('tanya'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'judul' => 'required|max:255|', //unique:
            'isi' => 'required',
        ]);

        $tanya = Pertanyaan::find($id);

        $tanya->judul = $request['judul'];
        $tanya->isi = $request['isi'];
        $tanya->profil_id = 1;
        $tanya->jawaban_tepat_id = 1;
        $tanya->created_at = date('Y-m-d H:i:s');
        $tanya->updated_at = date('Y-m-d H:i:s');
        $tanya->save();

        return redirect('/pertanyaan')->with('success', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Pertanyaan::destroy($id);
        return redirect('/pertanyaan')->with('success', 'Data Berhasil di hapus');

    }
}
