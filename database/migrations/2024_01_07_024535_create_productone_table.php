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
        Schema::create('productone', function (Blueprint $table) {
            $table->id();
            $table->string('product_title');
            $table->string('description');
            $table->string('imageone')->nullable();
            $table->string('imagetwo')->nullable();
            $table->string('imagethree')->nullable();
            $table->integer('discount');
            $table->integer('oldprice');
            $table->integer('price');
            $table->integer('gst');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('productone', function (Blueprint $table) {
            $table->dropColumn(['imageone', 'imagetwo', 'imagethree']);
        });
    }
};
