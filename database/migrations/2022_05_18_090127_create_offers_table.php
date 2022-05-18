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
        Schema::create('offers', function (Blueprint $table) {

            // Categories
            // ID
            // Title
            // Location
            // Timings
            // Images
            // Hero Image
            // Start Date
            // End Date
            // Discount
            // Description
            // Note
            // Contact

            $table->id();
            $table->string('title');
            $table->integer('category')->default(0);
            $table->string('location')->nullable();
            $table->string('timings')->nullable();
            $table->json('images')->default('[]');
            $table->string('hero_image')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('discount')->default(0);
            $table->text('description')->nullable();
            $table->text('note')->nullable();
            $table->string('contact')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
