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
        Schema::create('tbficha', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CodAluno')->nullable();
            $table->string('Categoria')->nullable();
            $table->string('Escola')->nullable();
            $table->decimal('Situacao')->nullable();
            $table->string('DataAbertura')->nullable();
            $table->string('DataTramitacao')->nullable();
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
        //
    }
};
