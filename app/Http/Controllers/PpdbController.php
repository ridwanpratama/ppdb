<?php

namespace App\Http\Controllers;

use App\Ppdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PpdbController extends Controller
{
    public function validation(Request $request)
    {
        $validation = $request->validate([
            'user_id' => 'required|unique:ppdb,user_id',
            'nis' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);
    }

    public function store(Request $request)
    {
        $this->validation($request);

        Ppdb::create([
            'user_id' => $request->user_id,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
        ]);

        return redirect('ppdb.index');
    }

    public function index()
    {
        $data = Ppdb::where('user_id', '=', Auth::user()->id)->get();
        return view('ppdb.index', compact('data'));
    }

    public function edit($id)
    {
        $ppdb = Ppdb::find($id);
        return view('ppdb.edit',compact('ppdb'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());

        $data = Ppdb::find($id);
        $data->update([
            'user_id' => $request->get('user_id'),
            'nis' => $request->get('nis'),
            'nama' => $request->get('nama'),
            'jk' => $request->get('jk'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'alamat' => $request->get('alamat'),
            'asal_sekolah' => $request->get('asal_sekolah'),
            'kelas' => $request->get('kelas'),
            'jurusan' => $request->get('jurusan'),

        ]);

        return redirect()->route('ppdb.index');
    }

    public function destroy($id)
    {
        $ppdb = Ppdb::find($id);
        $ppdb->delete();
        return redirect('ppdb');
    }
}
