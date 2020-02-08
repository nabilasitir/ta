<?php

use Illuminate\Http\Request;
use App\Cuaca;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/svm', function (Request $request) {
	$prediksi_svm = new Cuaca;
	$prediksi_svm->cuaca_svm = $request->cuaca_svm;
	$prediksi_svm->suhu_svm = $request->suhu_svm;
	$prediksi_svm->kelembaban_svm = $request->kelembaban_svm;
	$prediksi_svm->kecAngin_svm = $request->kecAngin_svm;
	if($prediksi_svm->save()) {
		return response()->json([
				'message' => 'Berhasil'
			]);
	}

	return response()->json([
				'message' => 'gagal'
			]);
});