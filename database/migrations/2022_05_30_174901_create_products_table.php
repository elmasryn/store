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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedSmallInteger('country_id')->nullable();
            $table->unsignedSmallInteger('city_id')->nullable();
            $table->unsignedSmallInteger('category_id')->nullable();
            $table->unsignedSmallInteger('brand_id')->nullable();
            $table->string('name', 100);
            $table->string('slug', 100)->unique();
            $table->text('desc')->nullable();
            $table->text('keywords')->nullable();
            $table->string('product_number', 50)->unique();
            $table->text('sku', 15)->nullable();
            $table->unsignedSmallInteger('stock')->nullable()->default(1);
            $table->double('price');
            $table->date('end_at')->nullable();
            $table->double('offer_sale')->nullable();
            $table->double('discount')->nullable();
            $table->double('offer_percent')->nullable();
            $table->date('start_offer_at')->nullable();
            $table->date('end_offer_at')->nullable();
            $table->boolean('offer_status')->default(false);  /* 1, '1', true active / 0, '0', false inactive */
            $table->unsignedBigInteger('views')->default(0);
            $table->boolean('featured')->default(false);  /* 1, '1', true active / 0, '0', false inactive */
            $table->enum('ship_source', [1, 2])->nullable()->default(1);  /* Null free ship / 1 vendor side / 2 ship side */
            $table->double('free_ship_price_start')->nullable();
            $table->double('local_ship_price')->nullable();
            $table->double('city_ship_price')->nullable();
            $table->date('published_at')->nullable();
            $table->date('rejected_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('country_id')->references('id')->on('countries')->cascadeOnUpdate()->nullOnDelete();
            $table->foreign('city_id')->references('id')->on('cities')->cascadeOnUpdate()->nullOnDelete();
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnUpdate()->nullOnDelete();
            $table->foreign('brand_id')->references('id')->on('brands')->cascadeOnUpdate()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
