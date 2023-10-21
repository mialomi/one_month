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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('brands_id')->constrained();
            $table->foreignId('seasons_id')->constrained();
            $table->foreignId('collections_id')->constrained();
            $table->foreignId('places_id')->constrained();
            $table->foreignId('money_id')->constrained();
            $table->dateTime('date_time');
            $table->string('location');
            $table->tinyInteger('online_events')->nullable();

        
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
