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

            $table->unsignedBigInteger('method_id');
            $table->foreign('method_id')->references('id')->on('methods')->onDelete('CASCADE');

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
