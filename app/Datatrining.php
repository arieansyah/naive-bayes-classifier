<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datatrining extends Model
{


    public static function pbermain($bermain){
        $datas = Datatrining::all();
        $countDatas = count($datas);
        $dataOutput = Datatrining::where('bermain','=',$bermain)->get();
        $countOutput = count($dataOutput);
        $pbermain = $countOutput / $countDatas;
        return $pbermain;

    }
    public static function pcuaca($bermain,$param){
        $dataParam_ = Datatrining::where('bermain','=',$bermain)->where('cuaca','=',$param)->get();
        $dataParam = count($dataParam_);
        $dataOutputParam_ = Datatrining::where('bermain','=',$bermain)->get();
        $dataOutputParam = count($dataOutputParam_);

        if($dataParam == 0){
            $dataParam = $dataParam +1;
            $dataOutputParam = $dataOutputParam + 3;
        }

        $pcuaca = $dataParam/$dataOutputParam;
        return $pcuaca;
    }
    public static function ptemperatur($bermain,$param){
        $dataParam_ = Datatrining::where('bermain','=',$bermain)->where('temperatur','=',$param)->get();
        $dataParam = count($dataParam_);
        $dataOutputParam_ = Datatrining::where('bermain','=',$bermain)->get();
        $dataOutputParam = count($dataOutputParam_);

        if($dataParam == 0){
            $dataParam = $dataParam +1;
            $dataOutputParam = $dataOutputParam + 3;
        }

        $ptemperatur = $dataParam/$dataOutputParam;
        return $ptemperatur;
    }
    public static function pkelembapan($bermain,$param){
        $dataParam_ = Datatrining::where('bermain','=',$bermain)->where('kelembapan','=',$param)->get();
        $dataParam = count($dataParam_);
        $dataOutputParam_ = Datatrining::where('bermain','=',$bermain)->get();
        $dataOutputParam = count($dataOutputParam_);
        if($dataParam == 0){
            $dataParam = $dataParam +1;
            $dataOutputParam = $dataOutputParam + 2;
        }
        $pkelembapan = $dataParam/$dataOutputParam;
        return $pkelembapan;
    }
    public static function pangin($bermain,$param){
        $dataParam_ = Datatrining::where('bermain','=',$bermain)->where('angin','=',$param)->get();
        $dataParam = count($dataParam_);
        $dataOutputParam_ = Datatrining::where('bermain','=',$bermain)->get();
        $dataOutputParam = count($dataOutputParam_);
        if($dataParam == 0){
            $dataParam = $dataParam +1;
            $dataOutputParam = $dataOutputParam + 2;
        }
        $pangin = $dataParam/$dataOutputParam;
        return $pangin;
    }



}
