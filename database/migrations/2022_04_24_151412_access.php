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
        //
        Schema::create('access', function (Blueprint $table) {
            $table->id();
            $table->string('Kode_vid')->unique();
            $table->string('Kode_quotes')->unique();
            //$table->string('Category');
            //$table->string('URL');
            $table->timestamp('access_date')->nullable();
            //$table->string('Language');
            //$table->rememberToken();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('access');
    }
};
