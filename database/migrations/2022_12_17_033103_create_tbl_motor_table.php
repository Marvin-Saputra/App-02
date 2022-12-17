<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_motor', function (Blueprint $table) {
            $table->id();
            $table->string('Kd_Motor',15)->unique()->nullable();
            $table->string('Merk',30)->nullable();
            $table->string('Tipe',30)->nullable();
            $table->string('Jenis',30)->nullable();
            $table->string('Slinder',10)->nullable();
            $table->char('Tahun',4)->nullable();
            $table->string('Warna',15)->nullable();
            $table->decimal('Hrg_Cash')->nullable();

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
        Schema::dropIfExists('tbl_motor');
    }
};
