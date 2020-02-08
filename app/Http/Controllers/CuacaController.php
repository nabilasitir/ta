<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuacaController extends Controller
{
    //
    public function index()
	{
		//
   		$data = \App\Cuaca::all();

	    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['values'] = $data;
        // return response($res);
        return view('home', ['liat'=>$data]);
	    }
	    else{
	        $res['message'] = "Empty!";
	        return response($res);
		    }
	}

	public function store(Request $request)
	{	
	    $cuaca_svm = $request->input('cuaca_svm');
	    $suhu_svm = $request->input('suhu_svm');
	    $kelembaban_svm = $request->input('kelembaban_svm');
	    $kecAngin_svm = $request->input('kecAngin_svm');

	    $data = new \App\Cuaca();
	    $data->cuaca_svm = $cuaca_svm;
	    $data->suhu_svm = $suhu_svm;
	    $data->kelembaban_svm = $kelembaban_svm;
	    $data->kecAngin_svm = $kecAngin_svm;

	    if($data->save()){
	        $res['message'] = "Success!";
	        $res['value'] = "$data";
	        return response($res);
	    }
	}

	public function post(Request $request)
	{	
	    $cuaca_anfis = $request->input('cuaca_anfis');
	    $suhu_anfis = $request->input('suhu_anfis');
	    $kelembaban_snfis = $request->input('kelembaban_anfis');
	    $kecAngin_anfis = $request->input('kecAngin_anfis');

	    $data = new \App\Cuaca();
	    $data->cuaca_anfis = $cuaca_anfis;
	    $data->suhu_anfis = $suhu_anfis;
	    $data->kelembaban_anfis = $kelembaban_anfis;
	    $data->kecAngin_anfis = $kecAngin_anfis;

	    if($data->save()){
	        $res['message'] = "Success!";
	        $res['value'] = "$data";
	        return response($res);
	    }
	    return view('home', ['liat'=>$data]);
	}

	public function kurva(){
		return view('kurva');
	}
 
	public function riwayat(){
		return view('riwayat');
	}
}
