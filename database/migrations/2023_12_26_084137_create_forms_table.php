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
            $table->string('id');
            $table->string('type');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->boolean('maxCharactersEnabled');
            $table->integer('maxCharacters');
            $table->text('settings');
            $table->ipAddress('user_ip')->nullable();
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
