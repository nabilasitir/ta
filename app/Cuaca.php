<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuaca extends Model
{
    protected $table = 'prediksi_svm';
    protected $tabel = 'prediksi_anfis';

    protected $fillable = [
    	'cuaca_svm', 'suhu_svm', 'kelembaban_svm', 'kecAngin_svm' 
    ];
}