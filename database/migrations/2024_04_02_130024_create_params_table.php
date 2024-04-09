<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('params', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('type');
            $table->string('datatype');
            $table->string('require');
            $table->string('example_data');
            $table->string('description');
            $table->string('status');

            $table->unsignedBigInteger('request_id');
            $table->foreign('request_id')->references('id')->on('request')->onDelete('CASCADE');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('params');
    }
};
