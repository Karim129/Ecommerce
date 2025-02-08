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
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->Text('short_description');
            $table->longText('description');
            $table->integer('price');
            $table->string('selling_price');
            $table->string('image');
            $table->integer('qty');
            $table->integer('tax');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('trend')->default(0);
            $table->string('meta_title');
            $table->string('meta_keywords');
            $table->Text('meta_description');
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
