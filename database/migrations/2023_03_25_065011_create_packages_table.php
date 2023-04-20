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
        Schema::create('Packages', function (Blueprint $table) {
            $table->id();
            $table->string('packageName');
            $table->string('paxOption1');
            $table->string('paxOption2');
            $table->string('courses');
            $table->string('styling1');
            $table->string('styling2');
            $table->string('styling3');
            $table->string('styling4');
            $table->string('styling5');
            $table->string('freebies1');
            $table->string('freebies2');
            $table->string('freebies3');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Packages');
    }
};
