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
        Schema::create('settings', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('website_name', 100)->nullable();
            $table->text('desc')->nullable();
            $table->text('keywords')->nullable();
            $table->string('email', 100)->nullable();
            $table->boolean('map_status')->default(0);  /* 1, '1', true active / 0, '0', false inactive */
            $table->boolean('website_status')->default(1);  /* 1, '1', true active / 0, '0', false inactive */
            $table->text('website_message')->nullable();
            $table->boolean('comment_status')->default(1);  /* 1, '1', true active / 0, '0', false inactive */
            $table->text('comment_message')->nullable();
            $table->boolean('review_status')->default(1);   /* 1, '1', true active / 0, '0', false inactive */
            $table->text('review_message')->nullable();
            $table->boolean('product_published_status')->default(0);    /* 1, '1', true preapproved / 0, '0', false need to approve */
            $table->boolean('page_published_status')->default(0);    /* 1, '1', true preapproved / 0, '0', false need to approve */
            $table->boolean('comment_published_status')->default(0);    /* 1, '1', true preapproved / 0, '0', false need to approve */
            $table->boolean('review_published_status')->default(0);    /* 1, '1', true preapproved / 0, '0', false need to approve */
            $table->double('tax')->nullable();
            $table->enum('ship_method', [1, 2])->nullable()->default(1);  /* 0 all options / 1 vendor only / 2 shipping company */
            $table->double('ship_price_free_start')->nullable();
            $table->double('ship_price_local')->nullable();
            $table->double('ship_price_city')->nullable();
            $table->boolean('multi_notification')->default(0);   /* 1, '1', true active / 0, '0', false inactive */
            $table->string('img', 100)->nullable();  /* Icon */
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
        Schema::dropIfExists('settings');
    }
};
