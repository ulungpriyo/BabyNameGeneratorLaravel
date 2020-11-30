<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use App\BayiArab;
use App\BayiIndonesia;
use App\BayiEropa;
use App\BayiSansekerta;

class generateController extends Controller
{
    function index(){
    	return view('generate');
    }

    function generate(Request $request){
    		

            $favorite = Favorite::all()->random(1);
    		$bayiarab = bayiarab::all()->random(1);
    		$bayiindonesia = bayiindonesia::all()->random(1);
    		$bayisansekerta = bayisansekerta::all()->random(1);
    		$bayieropa = bayieropa::all()->random(1);



    		$data = [$favorite];

    		dd($data);

		return view('generate');
    }

    public function getnameRandom(Request $request) {


        $nama_andaGenerate = $request->input('nama_andaGenerate');
        $operatorAsal = $request->input('operatorAsal');
        $operatorPersonality = $request->input('operatorPersonality');
        $operatorjenisKelamin = $request->input('operatorjenisKelamin');
        $operatorjumlahKata = $request->input('operatorjumlahKata');
        $artinamaBaru = [];
        $namaBaru = [$nama_andaGenerate]; 

            if($operatorAsal == 'asalBa'){
                $namaRandom = bayiarab::where('personality',$operatorPersonality)->where('jenis_kelamin', $operatorjenisKelamin)->inRandomOrder()->limit($operatorjumlahKata)->get();
                
            }elseif ($operatorAsal == 'asalBi') {
                $namaRandom = bayiindonesia::where('personality',$operatorPersonality)->where('jenis_kelamin', $operatorjenisKelamin)->inRandomOrder()->limit($operatorjumlahKata)->get();
                
            }elseif ($operatorAsal == 'asalBe') {
                $namaRandom = bayieropa::where('personality',$operatorPersonality)->where('jenis_kelamin', $operatorjenisKelamin)->inRandomOrder()->limit($operatorjumlahKata)->get();
                

            }elseif ($operatorAsal == 'asalBs') {
                $namaRandom = bayisansekerta::where('personality',$operatorPersonality)->where('jenis_kelamin', $operatorjenisKelamin)->inRandomOrder()->limit($operatorjumlahKata)->get();
            
            }else{
                return "0";
            }

            foreach($namaRandom as $nama)
                {
                    array_unshift($namaBaru, $nama->nama);
                
                }

                $result = implode(" ", $namaBaru);

            foreach($namaRandom as $arti)
                {
                array_push($artinamaBaru, $arti->arti_nama);
                }

            $hasil = implode(" | ", $artinamaBaru);

            return view('generate', array('result'=> $result , 'arti_nama' => $hasil));
        }
    }