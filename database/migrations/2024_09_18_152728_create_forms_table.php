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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('national_number');
            $table->date('date_of_birth');
            $table->json('name');
            $table->string('national_id');
            $table->string('governmental_entity');
            $table->string('landline_number');
            $table->string('id_of_government_agency');
            $table->string('international_code');
            $table->string('phone_number');
            $table->string('email');
            $table->string('documents_upload');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
