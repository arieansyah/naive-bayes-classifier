<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datatrining extends Model
{
    public static function ptingkatkepuasan($tingkat_kepuasan){
        $datas = Datatrining::all();
        $countDatas = count($datas);
        $dataOutput = Datatrining::where('tingkat_kepuasan','=',$tingkat_kepuasan)->get();
        $countOutput = count($dataOutput);
        $tingkat_kepuasan = $countOutput / $countDatas;
        return $tingkat_kepuasan;

    }
    public static function ppelayanan_pegawai($tingkat_kepuasaan,$param){
        $dataParam_ = Datatrining::where('tingkat_kepuasan','=',$tingkat_kepuasaan)->where('pelayanan_pegawai','=',$param)->get();
        $dataParam = count($dataParam_);
        $dataOutputParam_ = Datatrining::where('tingkat_kepuasan','=',$tingkat_kepuasaan)->get();
        $dataOutputParam = count($dataOutputParam_);

        if($dataParam == 0){
            $dataParam = $dataParam +1;
            $dataOutputParam = $dataOutputParam + 3;
        }

        $ppelayanan_pegawai = $dataParam/$dataOutputParam;
        return $ppelayanan_pegawai;
    }
    public static function pketanggapan_pegawai($tingkat_kepuasaan,$param){
        $dataParam_ = Datatrining::where('tingkat_kepuasan','=',$tingkat_kepuasaan)->where('ketanggapan_pegawai','=',$param)->get();
        $dataParam = count($dataParam_);
        $dataOutputParam_ = Datatrining::where('tingkat_kepuasan','=',$tingkat_kepuasaan)->get();
        $dataOutputParam = count($dataOutputParam_);

        if($dataParam == 0){
            $dataParam = $dataParam +1;
            $dataOutputParam = $dataOutputParam + 3;
        }

        $pketanggapan_pegawai = $dataParam/$dataOutputParam;
        return $pketanggapan_pegawai;
    }
    public static function pkesopanan_pegawai($tingkat_kepuasaan,$param){
        $dataParam_ = Datatrining::where('tingkat_kepuasan','=',$tingkat_kepuasaan)->where('kesopanan_pegawai','=',$param)->get();
        $dataParam = count($dataParam_);
        $dataOutputParam_ = Datatrining::where('tingkat_kepuasan','=',$tingkat_kepuasaan)->get();
        $dataOutputParam = count($dataOutputParam_);
        if($dataParam == 0){
            $dataParam = $dataParam +1;
            $dataOutputParam = $dataOutputParam + 2;
        }
        $pkesopanan_pegawai = $dataParam/$dataOutputParam;
        return $pkesopanan_pegawai;
    }
    public static function pketepatan_pelayanan($tingkat_kepuasaan,$param){
        $dataParam_ = Datatrining::where('tingkat_kepuasan','=',$tingkat_kepuasaan)->where('ketepatan_pelayanan','=',$param)->get();
        $dataParam = count($dataParam_);
        $dataOutputParam_ = Datatrining::where('tingkat_kepuasan','=',$tingkat_kepuasaan)->get();
        $dataOutputParam = count($dataOutputParam_);
        if($dataParam == 0){
            $dataParam = $dataParam +1;
            $dataOutputParam = $dataOutputParam + 2;
        }
        $pketepatan_pelayanan = $dataParam/$dataOutputParam;
        return $pketepatan_pelayanan;
    }
    public static function pfasilitas($tingkat_kepuasaan,$param){
        $dataParam_ = Datatrining::where('tingkat_kepuasan','=',$tingkat_kepuasaan)->where('fasilitas','=',$param)->get();
        $dataParam = count($dataParam_);
        $dataOutputParam_ = Datatrining::where('tingkat_kepuasan','=',$tingkat_kepuasaan)->get();
        $dataOutputParam = count($dataOutputParam_);
        if($dataParam == 0){
            $dataParam = $dataParam +1;
            $dataOutputParam = $dataOutputParam + 2;
        }
        $pfasilitas = $dataParam/$dataOutputParam;
        return $pfasilitas;
    }
    public static function pkeamanan_kantor($tingkat_kepuasaan,$param){
        $dataParam_ = Datatrining::where('tingkat_kepuasan','=',$tingkat_kepuasaan)->where('keamanan_kantor','=',$param)->get();
        $dataParam = count($dataParam_);
        $dataOutputParam_ = Datatrining::where('tingkat_kepuasan','=',$tingkat_kepuasaan)->get();
        $dataOutputParam = count($dataOutputParam_);
        if($dataParam == 0){
            $dataParam = $dataParam +1;
            $dataOutputParam = $dataOutputParam + 2;
        }
        $pkeamanan_kantor = $dataParam/$dataOutputParam;
        return $pkeamanan_kantor;
    }
}
