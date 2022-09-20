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
        Schema::create('tb_m_client', function (Blueprint $table) {
            $table->increments('client_id');
            $table->string('client_name', 100);
            $table->string('client_address', 100);
            $table->timestamps();
        });
        $tb_project = \App\Models\Client::create([
            'client_name' => 'NEC',
            'client_address' => 'Jakarta'
          ]);
        $tb_project = \App\Models\Client::create([
            'client_name' => 'TAM',
            'client_address' => 'Jakarta'
          ]);
        $tb_project = \App\Models\Client::create([
            'client_name' => 'TUA',
            'client_address' => 'Bandung'
          ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_m_client');
    }
};
