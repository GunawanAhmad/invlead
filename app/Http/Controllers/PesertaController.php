<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class PesertaController extends Controller
{

    public function get_peserta()
    {
        $peserta = Peserta::all();
        return view('user.daftar_peserta', ['pesertas' => $peserta]);
    }

    public function penilaian_view()
    {
        $pesertas = Peserta::all();
        return view('penilaian', ['pesertas' => $pesertas]);
    }

    public function absensi_view()
    {
        $merchantProducts = null;

        return view('payment.list', ['merchantProducts' => $merchantProducts]);
    }

    public function tambah_peserta(Request $request) {
        $validator = Validator::make($request->all(), ['jenis_kelamin' => 'required', 'alamat_rumah' =>'required', 'nama_peserta' => 'required', 'asal_sekolah' => 'required', 'tgl_lahir' => 'required'], ['jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong', 'alamat_rumah.required' => 'alamat tidak boleh kosong', 'nama_peserta.required' => 'Nama peserta tidak boleh kosong', 'asal_sekolah.required' => 'asal sekolah tidak boleh kosong', 'tgl_lahir' => 'required']);
        
        if($validator->fails()) {
            $error = $validator->errors()->first();
            return redirect()->back()->withErrors(['msg' => $error]);
        }

        Peserta::create($request->all());
        return redirect('/peserta');
    }

    public function hapus_peserta(Request $request) {
        try {
            $id = $request->id;
            $peserta = Peserta::find($id);
            $peserta->delete();
            return redirect('/peserta');
        } catch (\Throwable $th) {
            return redirect('/peserta')->withErrors(['msg' => 'Something went wrong']);
        }
        
    }

    public function edit_peserta_view(Request $request) {
        try {
            $id = $request->id;
            $peserta = Peserta::find($id);
            return view('user.edit_peserta', ['peserta' => $peserta]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->withErrors(['msg' => 'Something went wrong']);
        }
    }

    public function edit_peserta(Request $request) {
        try {
            $id = $request->id;
            $peserta = Peserta::find($id);
            $validator = Validator::make($request->all(), ['jenis_kelamin' => 'required', 'alamat_rumah' =>'required', 'nama_peserta' => 'required', 'asal_sekolah' => 'required', 'tgl_lahir' => 'required'], ['jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong', 'alamat_rumah.required' => 'alamat tidak boleh kosong', 'nama_peserta.required' => 'Nama peserta tidak boleh kosong', 'asal_sekolah.required' => 'asal sekolah tidak boleh kosong', 'tgl_lahir' => 'required']);
        
            if($validator->fails()) {
                $error = $validator->errors()->first();
                return redirect()->back()->withErrors(['msg' => $error]);
            }

            $peserta->update($request->all());
            return redirect('/peserta');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->withErrors(['msg' => 'Something went wrong']);
        }
    }

    public function penilaian_kedisiplinan_peserta(Request $request) {
        try {
            $id = $request->id;
            $peserta = Peserta::findOrFail($id);
            
            $jumlah_poin_kedisiplinan = $request->nilai_kedisiplinan_disiplin + $request->nilai_kedisiplinan_sopan + $request->nilai_kedisiplinan_santun;
            $total_nilai = $peserta->total_nilai + $jumlah_poin_kedisiplinan;
            
            $peserta->update(['nilai_kedisiplinan_disiplin' => $request->nilai_kedisiplinan_disiplin, 'nilai_kedisiplinan_sopan' => $request->nilai_kedisiplinan_sopan, 'nilai_kedisiplinan_santun' => $request->nilai_kedisiplinan_santun, 'is_nilai_kedisiplinan_finish' => true, 'jumlah_poin_kedisiplinan' => $jumlah_poin_kedisiplinan, 'total_nilai' => $total_nilai]);

            return redirect('/penilaian')->with(['tab' => 'kedisiplinan']);
            
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->withErrors(['msg' => 'something went wrong']);
        }
    }

    public function penilaian_kinerja_peserta(Request $request) {
        try {
            $id = $request->id;
            $peserta = Peserta::findOrFail($id);
            
            $jumlah_poin_kinerja = $request->nilai_kinerja_task1 + $request->nilai_kinerja_task2 + $request->nilai_kinerja_task3;
            $total_nilai = $peserta->total_nilai + $jumlah_poin_kinerja;
            
            $peserta->update(['nilai_kinerja_task1' => $request->nilai_kinerja_task1, 'nilai_kinerja_task2' => $request->nilai_kinerja_task2, 'nilai_kinerja_task3' => $request->nilai_kinerja_task3, 'is_nilai_kinerja_finish' => true, 'jumlah_poin_kinerja' => $jumlah_poin_kinerja, 'total_nilai' => $total_nilai]);

            return redirect('/penilaian')->with('tab', 'kinerja');

            
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->withErrors(['msg' => 'something went wrong']);
        }
    }
}