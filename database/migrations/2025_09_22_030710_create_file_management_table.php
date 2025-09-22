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
        Schema::create('file_management', function (Blueprint $table) {
            $table->id();
            $table->string('path_file');                  
            $table->string('nama_file');                
            $table->string('label_file')->nullable();
            $table->string('created_by')->nullable();
            $table->string('mode_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('mod_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_management');
    }
};
