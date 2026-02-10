<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {
    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->string('name', 100);
            $table->text('content')->nullable();
            $table->string('slug', 100)->unique();
            $table->string('image', 50)->nullable();
            $table->decimal('price', 10, 2)->default(0);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->nullOnDelete();
            $table->foreign('brand_id')->references('id')->on('brands')->nullOnDelete();
        });
    }
    public function down() { Schema::dropIfExists('products'); }
}