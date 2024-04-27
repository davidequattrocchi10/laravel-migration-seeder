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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 80);
            $table->string('departure_station', 80);
            $table->string('arrival_station', 80);
            $table->timestamp('departure_time');
            $table->timestamp('arrival_time')->nullable();;
            $table->integer('duration_minutes')->nullable();
            $table->decimal('distance', 8, 2)->nullable();
            $table->decimal('ticket_price', 10, 2);
            $table->integer('train_code')->nullable();;
            $table->string('train_type')->nullable();;
            $table->unsignedTinyInteger('num_carriages')->nullable();;
            $table->boolean('in_time');
            $table->boolean('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
