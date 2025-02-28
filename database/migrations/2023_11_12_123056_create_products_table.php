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
        Schema::create('products', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->string('name');
            $table->string('slug');
            $table->mediumText('short_description');
            $table->longText('description');
            $table->string('price');
            $table->string('selling_price');
            $table->string('image');
            $table->string('qty');
            $table->string('tax');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('trend')->default(0);
            $table->string('meta_title');
            $table->string('meta_keywords');
            $table->json('meta_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
