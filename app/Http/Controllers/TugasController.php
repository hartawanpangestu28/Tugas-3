<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function tugas_1(){
        
        $angka0=7;
        $angka1=9;
        $jumlah=2;
        $deret=[$angka0,$angka1];
        for ($i=1; $i <= 10; $i++) { 
           $deret[$i+1]=$deret[$i-1]+$deret[$i];
        }
        return view('tugas_1',compact('deret'));
    }


//Tugas 2 deret aritmatika
    public function tugas_2(){

    $angka1=3;
    $angka2=1;
    $jumlah=9;
    $deret=[$angka1,$angka2];
    $selisih=$angka2-$angka1;
        for ($i=1; $i <= 9; $i++) { 
            $deret[$i+1]=$deret[$i]+$selisih;
        }
    // dd($deret);
    return view('tugas_2', compact('selisih','deret'));
    }
}