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
        Schema::create('website_content_values', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('website_content_area_id');
            $table->text('name')->nullable();
            $table->text('url')->nullable();
            $table->string('img')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('website_content_area_id')->references('id')->on('website_content_areas')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_content_values');
    }
};
