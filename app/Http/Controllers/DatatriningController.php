<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datatrining;
use App\DataTasting;
use PDF;

class DatatriningController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }
    public function index(Request $req){
        $psangatPuas = Datatrining::ptingkatkepuasan(1);
        $ppelayananpegawai_sangatPuas = Datatrining::ppelayanan_pegawai(1,$req->pelayanan_pegawai);
        $pketanggapan_pegawai_sangatPuas = Datatrining::pketanggapan_pegawai(1,$req->ketanggapan_pegawai);
        $pkesopanan_pegawai_sangatPuas = Datatrining::pkesopanan_pegawai(1,$req->kesopanan_pegawai);
        $pketepatan_pelayanan_sangatPuas = Datatrining::pketepatan_pelayanan(1,$req->ketepatan_pelayanan);
        $pfasilitas_sangatPuas = Datatrining::pfasilitas(1,$req->fasilitas);
        $pkeamanan_kantor_sangatPuas = Datatrining::pkeamanan_kantor(1,$req->keamanan_kantor);
        $countpsangatPuas = $psangatPuas * $ppelayananpegawai_sangatPuas * $pketanggapan_pegawai_sangatPuas * $pkesopanan_pegawai_sangatPuas * $pketepatan_pelayanan_sangatPuas * $pfasilitas_sangatPuas * $pkeamanan_kantor_sangatPuas;
        $presentaseSangatPuas = $countpsangatPuas*100;
        //dd($countpsangatPuas);

        $ppuas = Datatrining::ptingkatkepuasan(2);
        $ppelayananpegawai_puas = Datatrining::ppelayanan_pegawai(2,$req->pelayanan_pegawai);
        $pketanggapan_pegawai_puas = Datatrining::pketanggapan_pegawai(2,$req->ketanggapan_pegawai);
        $pkesopanan_pegawai_puas = Datatrining::pkesopanan_pegawai(2,$req->kesopanan_pegawai);
        $pketepatan_pelayanan_puas = Datatrining::pketepatan_pelayanan(2,$req->ketepatan_pelayanan);
        $pfasilitas_puas = Datatrining::pfasilitas(2,$req->fasilitas);
        $pkeamanan_kantor_puas = Datatrining::pkeamanan_kantor(2,$req->keamanan_kantor);
        $countppuas = $ppuas * $ppelayananpegawai_puas * $pketanggapan_pegawai_puas * $pkesopanan_pegawai_puas * $pketepatan_pelayanan_puas * $pfasilitas_puas * $pkeamanan_kantor_puas;
        $presentasePuas = $countppuas*100;

        $ptidakPuas = Datatrining::ptingkatkepuasan(3);
        $ppelayananpegawai_tidakPuas = Datatrining::ppelayanan_pegawai(3,$req->pelayanan_pegawai);
        $pketanggapan_pegawai_tidakPuas = Datatrining::pketanggapan_pegawai(3,$req->ketanggapan_pegawai);
        $pkesopanan_pegawai_tidakPuas = Datatrining::pkesopanan_pegawai(3,$req->kesopanan_pegawai);
        $pketepatan_pelayanan_tidakPuas = Datatrining::pketepatan_pelayanan(3,$req->ketepatan_pelayanan);
        $pfasilitas_tidakPuas = Datatrining::pfasilitas(3,$req->fasilitas);
        $pkeamanan_kantor_tidakPuas = Datatrining::pkeamanan_kantor(3,$req->keamanan_kantor);
        $countptidakPuas = $ptidakPuas * $ppelayananpegawai_tidakPuas * $pketanggapan_pegawai_tidakPuas * $pkesopanan_pegawai_tidakPuas * $pketepatan_pelayanan_tidakPuas * $pfasilitas_tidakPuas * $pkeamanan_kantor_tidakPuas;
        $presentasetidakPuas = $countptidakPuas*100;

        $psangatTidakPuas = Datatrining::ptingkatkepuasan(4);
        $ppelayananpegawai_sangatTidakPuas = Datatrining::ppelayanan_pegawai(4,$req->pelayanan_pegawai);
        $pketanggapan_pegawai_sangatTidakPuas = Datatrining::pketanggapan_pegawai(4,$req->ketanggapan_pegawai);
        $pkesopanan_pegawai_sangatTidakPuas = Datatrining::pkesopanan_pegawai(4,$req->kesopanan_pegawai);
        $pketepatan_pelayanan_sangatTidakPuas = Datatrining::pketepatan_pelayanan(4,$req->ketepatan_pelayanan);
        $pfasilitas_sangatTidakPuas = Datatrining::pfasilitas(4,$req->fasilitas);
        $pkeamanan_kantor_sangatTidakPuas = Datatrining::pkeamanan_kantor(4,$req->keamanan_kantor);
        $countpsangatTidakPuas = $psangatTidakPuas * $ppelayananpegawai_sangatTidakPuas * $pketanggapan_pegawai_sangatTidakPuas * $pkesopanan_pegawai_sangatTidakPuas * $pketepatan_pelayanan_sangatTidakPuas * $pfasilitas_sangatTidakPuas * $pkeamanan_kantor_sangatTidakPuas;
        $presentasesangatTidakPuas = $countpsangatTidakPuas*100;

        if($countpsangatPuas > $countppuas && $countpsangatPuas > $countptidakPuas && $countpsangatPuas > $countpsangatTidakPuas){
            $hasil = 'Sangat Puas';
        }else if($countpsangatPuas < $countppuas && $countppuas > $countptidakPuas && $countppuas > $countpsangatTidakPuas){
            $hasil ='Puas';
        }else if($countppuas < $countptidakPuas && $countptidakPuas > $countpsangatTidakPuas && $countptidakPuas < $countpsangatTidakPuas){
            $hasil ='Tidak Puas';
        }else {
            $hasil ='Sangat Tidak Puas';
        }

        $save = new DataTasting;
        $save->pelayanan_pegawai = $req->pelayanan_pegawai;
        $save->ketanggapan_pegawai = $req->ketanggapan_pegawai;
        $save->kesopanan_pegawai = $req->kesopanan_pegawai;
        $save->ketepatan_pelayanan = $req->ketepatan_pelayanan;
        $save->fasilitas = $req->fasilitas;
        $save->keamanan_kantor = $req->keamanan_kantor;
        $save->presentasePuas = $presentasePuas;
        $save->presentaseSangatPuas = $presentaseSangatPuas;
        $save->presentaseSangatTidakPuas = $presentasesangatTidakPuas;
        $save->presentaseTidakPuas = $presentasetidakPuas;

        $save->ppelayanan_pegawaiPuas = $ppelayananpegawai_puas;
        $save->ppelayanan_pegawaiSangatPuas = $ppelayananpegawai_sangatPuas;
        $save->ppelayanan_pegawaiSangatTidakPuas = $ppelayananpegawai_sangatTidakPuas;
        $save->ppelayanan_pegawaiTidakPuas = $ppelayananpegawai_tidakPuas;

        $save->pketanggapan_pegawaiPuas = $pketanggapan_pegawai_puas;
        $save->pketanggapan_pegawaiSangatPuas = $pketanggapan_pegawai_sangatPuas;
        $save->pketanggapan_pegawaiSangatTidakPuas = $pketanggapan_pegawai_sangatTidakPuas;
        $save->pketanggapan_pegawaiTidakPuas = $pketanggapan_pegawai_tidakPuas;

        $save->pkesopanan_pegawaiPuas = $pkesopanan_pegawai_puas;
        $save->pkesopanan_pegawaiSangatPuas = $pkesopanan_pegawai_sangatPuas;
        $save->pkesopanan_pegawaiSangatTidakPuas = $pkesopanan_pegawai_sangatTidakPuas;
        $save->pkesopanan_pegawaiTidakPuas = $pkesopanan_pegawai_tidakPuas;

        $save->pketepatan_pelayananPuas = $pketepatan_pelayanan_puas;
        $save->pketepatan_pelayananSangatPuas = $pketepatan_pelayanan_sangatPuas;
        $save->pketepatan_pelayananSangatTidakPuas = $pketepatan_pelayanan_sangatTidakPuas;
        $save->pketepatan_pelayananTidakPuas = $pketepatan_pelayanan_tidakPuas;

        $save->pfasilitasPuas = $pfasilitas_puas;
        $save->pfasilitasSangatPuas = $pfasilitas_sangatPuas;
        $save->pfasilitasSangatTidakPuas = $pfasilitas_sangatTidakPuas;
        $save->pfasilitasTidakPuas = $pfasilitas_tidakPuas;

        $save->pkeamanan_kantorPuas = $pkeamanan_kantor_puas;
        $save->pkeamanan_kantorSangatPuas = $pkeamanan_kantor_sangatPuas;
        $save->pkeamanan_kantorSangatTidakPuas = $pkeamanan_kantor_sangatTidakPuas;
        $save->pkeamanan_kantorTidakPuas = $pkeamanan_kantor_tidakPuas;
        
        $save->hasil = $hasil;
        
        $save->save();

        return view('datatrining.index', [
          'pelayanan_pegawai' => $req->pelayanan_pegawai,
          'ketanggapan_pegawai' => $req->ketanggapan_pegawai,
          'kesopanan_pegawai' => $req->kesopanan_pegawai,
          'ketepatan_pelayanan' => $req->ketepatan_pelayanan,
          'fasilitas' => $req->fasilitas,
          'keamanan_kantor' => $req->keamanan_kantor,
          'hasil' => $hasil
        ])  ->with('pelayanan_pegawai_sangatPuas',$ppelayananpegawai_sangatPuas)
            ->with('ketanggapan_pegawai_sangatPuas',$pketanggapan_pegawai_sangatPuas)
            ->with('kesopanan_pegawai_sangatPuas',$pkesopanan_pegawai_sangatPuas)
            ->with('ketepatan_pelayanan_sangatPuas',$pketepatan_pelayanan_sangatPuas)
            ->with('fasilitas_sangatPuas',$pfasilitas_sangatPuas)
            ->with('keamanan_kantor_sangatPuas',$pkeamanan_kantor_sangatPuas)
            ->with('hasil',$hasil)

            ->with('pelayanan_pegawai_puas',$ppelayananpegawai_puas)
            ->with('ketanggapan_pegawai_puas',$pketanggapan_pegawai_puas)
            ->with('kesopanan_pegawai_puas',$pkesopanan_pegawai_puas)
            ->with('ketepatan_pelayanan_puas',$pketepatan_pelayanan_puas)
            ->with('fasilitas_puas',$pfasilitas_puas)
            ->with('keamanan_kantor_puas',$pkeamanan_kantor_puas)

            ->with('pelayanan_pegawai_tidakPuas',$ppelayananpegawai_tidakPuas)
            ->with('ketanggapan_pegawai_tidakPuas',$pketanggapan_pegawai_tidakPuas)
            ->with('kesopanan_pegawai_tidakPuas',$pkesopanan_pegawai_tidakPuas)
            ->with('ketepatan_pelayanan_tidakPuas',$pketepatan_pelayanan_tidakPuas)
            ->with('fasilitas_tidakPuas',$pfasilitas_tidakPuas)
            ->with('keamanan_kantor_tidakPuas',$pkeamanan_kantor_tidakPuas)

            ->with('pelayanan_pegawai_sangatTidakPuas',$ppelayananpegawai_sangatTidakPuas)
            ->with('ketanggapan_pegawai_sangatTidakPuas',$pketanggapan_pegawai_sangatTidakPuas)
            ->with('kesopanan_pegawai_sangatTidakPuas',$pkesopanan_pegawai_sangatTidakPuas)
            ->with('ketepatan_pelayanan_sangatTidakPuas',$pketepatan_pelayanan_sangatTidakPuas)
            ->with('fasilitas_sangatTidakPuas',$pfasilitas_sangatTidakPuas)
            ->with('keamanan_kantor_sangatTidakPuas',$pkeamanan_kantor_sangatTidakPuas)

            ->with('presentaseSangatPuas', $presentaseSangatPuas)
            ->with('presentasePuas', $presentasePuas)
            ->with('presentaseTidakPuas', $presentasetidakPuas)
            ->with('presentaseSangatTidakPuas', $presentasesangatTidakPuas);
    }

    public function result()
    {
      return view('index');
    }

    public function printPasien(){
      $arsip = DataTasting::orderBy('id_testing', 'desc')->first();
      $dompdf = PDF::loadView('datatrining.print', compact('arsip'));
      $dompdf->setPaper('a4', 'landscape');
      return $dompdf->stream('oke.pdf');
    }

}
