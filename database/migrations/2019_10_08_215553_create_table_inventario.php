<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmpresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('al', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rfcEmpresa', 50)->unique();
            $table->string('nombreEmpresa');
            $table->string('razonSocialEmpresa');
            $table->string('giroEmpresa');
            $table->timestamps();
            $table->softDeletes();
            $table->charset = 'utf8';
            $table->collation ='utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Lempresas');
    }
}
