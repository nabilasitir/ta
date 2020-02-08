<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrediksiAnfis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prediksi_anfis', function (Blueprint $table) {
            $table->bigIncrements('id_anfis');
            $table->string('cuaca_anfis');
            $table->integer('suhu_anfis');
            $table->integer('kelembaban_anfis');
            $table->integer('kecAngin_anfis');
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
        Schema::dropIfExists('prediksi_anfis');
    }
}
