<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrediksiSvm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('prediksi_svm', function (Blueprint $table) {
            $table->bigIncrements('id_svm');
            $table->string('cuaca_svm');
            $table->integer('suhu_svm');
            $table->integer('kelembaban_svm');
            $table->integer('kecAngin_svm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prediksi_svm');
    }
}
