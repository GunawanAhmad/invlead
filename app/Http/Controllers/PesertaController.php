<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;
use App\Models\Peserta;
use Illuminate\Support\Facades\Validator;


class PesertaController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function get_peserta()
    {
        $peserta = Peserta::all();
        return view('user.daftar_peserta', ['pesertas' => $peserta]);
    }

    public function penilaian_view(Request $request)
    {   
        if($request->has('tab')) {
            $tab = $request->query('tab');
        } else {
            $tab = 'kinerja';
        }
        $pesertas = Peserta::all();
        return view('penilaian', ['pesertas' => $pesertas, 'tab' => $tab]);
    }
    
    public function absensi_view(Request $request)
    {   
        if($request->has('tanggal')) {
            $date = date($request->query('tanggal'));
        } else {
            $date = date('Y-m-d');
        }
        $pesertas = Peserta::select('pesertas.*', 'absensis.status_kehadiran')->leftJoin('absensis', function($q) use ($date) {
            $q->from('absensis')->where('tanggal', '=', $date)  ->on('pesertas.id', '=', 'absensis.id_peserta');
        })->get();
        return view('absensi', ['pesertas' => $pesertas, 'tanggal' => $date]);
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
            $peserta = Peserta::findOrFail($id);
            $peserta->delete();
            return redirect('/peserta');
        } catch (\Throwable $th) {
            return redirect('/peserta')->withErrors(['msg' => 'Something went wrong']);
        }
        
    }

    public function edit_peserta_view(Request $request) {
        try {
            $id = $request->id;
            $peserta = Peserta::findOrFail($id);
            return view('user.edit_peserta', ['peserta' => $peserta]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->withErrors(['msg' => 'Something went wrong']);
        }
    }

    public function edit_peserta(Request $request) {
        try {
            $id = $request->id;
            $peserta = Peserta::findOrFail($id);
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
            if($peserta->is_nilai_kedisiplinan_finish) {
                $total_nilai = $peserta->total_nilai - $peserta->jumlah_poin_kedisiplinan +  $jumlah_poin_kedisiplinan;
            } else {
                $total_nilai = $peserta->total_nilai + $jumlah_poin_kedisiplinan;
            }
            
            $peserta->update(['nilai_kedisiplinan_disiplin' => $request->nilai_kedisiplinan_disiplin, 'nilai_kedisiplinan_sopan' => $request->nilai_kedisiplinan_sopan, 'nilai_kedisiplinan_santun' => $request->nilai_kedisiplinan_santun, 'is_nilai_kedisiplinan_finish' => true, 'jumlah_poin_kedisiplinan' => $jumlah_poin_kedisiplinan, 'total_nilai' => $total_nilai]);

            return redirect('/penilaian?tab=kedisiplinan');
            
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
            if($peserta->is_nilai_kinerja_finish) {
                $total_nilai = $peserta->total_nilai - $peserta->jumlah_poin_kinerja + $jumlah_poin_kinerja;
            } else {
                $total_nilai = $peserta->total_nilai + $jumlah_poin_kinerja;
            }
            
            $peserta->update(['nilai_kinerja_task1' => $request->nilai_kinerja_task1, 'nilai_kinerja_task2' => $request->nilai_kinerja_task2, 'nilai_kinerja_task3' => $request->nilai_kinerja_task3, 'is_nilai_kinerja_finish' => true, 'jumlah_poin_kinerja' => $jumlah_poin_kinerja, 'total_nilai' => $total_nilai]);

            return redirect('/penilaian?tab=kinerja');

            
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->withErrors(['msg' => 'something went wrong']);
        }
    }


    public function absensi_peserta(Request $request) {
        try {
            
            foreach ($request->all() as $key => $value) {
                if(is_int($key)) {
                    $absensi = Absensi::where('tanggal', '=', $request->tanggal)->where('id_peserta', '=', $key)->first();
                    if($absensi == null) {
                        $absensi = Absensi::create(['tanggal' => $request->tanggal, 'id_peserta' => $key, 'status_kehadiran' => $value]);
                        if($absensi->status_kehadiran == 'hadir') {
                            $peserta = Peserta::find($key);
                            $total_nilai = $peserta->total_nilai + 1;
                            $peserta->update(['total_nilai' => $total_nilai]);
                        }
                    } else {
                        if($absensi->status_kehadiran != 'hadir' && $value == 'hadir') {
                            $peserta = Peserta::find($key);
                            $total_nilai = $peserta->total_nilai + 1;
                            $peserta->update(['total_nilai' => $total_nilai]);
                            
                        } else if($absensi->status_kehadiran == 'hadir' && $value != 'hadir') {
                            
                            $peserta = Peserta::find($key);
                            $total_nilai = $peserta->total_nilai - 1;
                            $peserta->update(['total_nilai' => $total_nilai]);
                        }
                        $absensi->update(['status_kehadiran' => $value]);
                    }

                    
                }
            }
            return redirect()->back();

        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Something went wrong');
        }
    }
}