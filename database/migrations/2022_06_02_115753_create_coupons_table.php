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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('product_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name', 50)->unique();
            $table->unsignedSmallInteger('target')->nullable();
            $table->boolean('type')->default(false);  /* 1, '1', true percentage / 0, '0', false fixed */
            $table->unsignedSmallInteger('value');
            $table->boolean('status')->default(true);  /* 1, '1', true active / 0, '0', false inactive */
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
};
