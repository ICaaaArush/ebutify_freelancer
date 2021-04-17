<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->decimal('price', 8, 2);
            $table->decimal('cost', $precision = 8, $scale = 2);
            $table->decimal('profit', $precision = 8, $scale = 2);
            $table->decimal('total_order', $precision = 8, $scale = 2);
            $table->decimal('total_revenue', $precision = 8, $scale = 2);
            $table->decimal('alexa_rank', $precision = 8, $scale = 2);
            $table->string('age');
            $table->foreignId('product_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('gender_id')->constrained()->onDelete('cascade');
            $table->string('country');
            $table->string('category');
            $table->longText('description');
            $table->string('status');
            $table->foreignId('opportunity_level_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('uploader_name');
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
        Schema::dropIfExists('product_details');
    }
}
