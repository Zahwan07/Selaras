<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket', function (Blueprint $table) {
            $table->id(); // Primary key column
            $table->string('nama_pengaju'); // Name of the ticket submitter
            $table->string('nim'); // NIM (National Identification Number) of the ticket submitter
            $table->text('keluhan'); // Description of the ticket issue
            $table->string('status')->default('Open'); // Status of the ticket (Open, On Progress, Closed)
            $table->string('ket_tiket')->nullable(); // Additional notes or comments regarding the ticket
            $table->string('gambar')->nullable(); // Path to the uploaded evidence image
            $table->timestamps(); // Created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiket');
    }
}
