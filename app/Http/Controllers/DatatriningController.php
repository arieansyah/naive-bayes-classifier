<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datatrining;

class DatatriningController extends Controller
{
    public function index(Request $req){
        $pbermainTidak = Datatrining::pbermain(1);
        $pcuacaTidak = Datatrining::pcuaca(1,$req->cuaca);
        $ptemperaturTidak = Datatrining::ptemperatur(1,$req->temperatur);
        $pkelembapanTidak = Datatrining::pkelembapan(1,$req->kelembapan);
        $panginTidak = Datatrining::pangin(1,$req->angin);
        $countpsatuTidak = $pbermainTidak * $pcuacaTidak * $ptemperaturTidak * $pkelembapanTidak * $panginTidak;
        $persentaseTdk = $countpsatuTidak*100;
        //dd($countpsatuTidak);
        $pbermainYa = Datatrining::pbermain(2);
        $pcuacaYa = Datatrining::pcuaca(2,$req->cuaca);
        $ptemperaturYa = Datatrining::ptemperatur(2,$req->temperatur);
        $pkelembapanYa = Datatrining::pkelembapan(2,$req->kelembapan);
        $panginYa = Datatrining::pangin(2,$req->angin);
        $countpduaYa = $pbermainYa * $pcuacaYa * $ptemperaturYa * $pkelembapanYa * $panginYa;
        $persentaseY = $countpduaYa*100;

        
        if($countpsatuTidak>=$countpduaYa){
            $bermain = 'Tidak Bermain';
        }else{
            $bermain ='Bermain';
        }
        
        return view('datatrining.index', [
          'cuaca' => $req->cuaca,
          'temperatur' => $req->temperatur,
          'kelembapan' => $req->kelembapan,
          'angin' => $req->angin,
          'bermain' => $bermain
        ])  ->with('cuacaT',$pcuacaTidak)
            ->with('temperaturT',$ptemperaturTidak)
            ->with('kelembapanT',$pkelembapanTidak)
            ->with('anginT',$panginTidak)
            ->with('cuacaY',$pcuacaYa)
            ->with('temperaturY',$ptemperaturYa)
            ->with('kelembapanY',$pkelembapanYa)
            ->with('anginY',$panginYa)
            ->with('persentaseY', $persentaseY)
            ->with('persentaseT', $persentaseTdk);
    }

    public function result()
    {
      return view('index');
    }

}
