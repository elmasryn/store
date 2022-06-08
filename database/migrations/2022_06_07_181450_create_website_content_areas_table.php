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
        Schema::create('website_content_areas', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name', 100);
            $table->enum('type', [1, 2, 3])->default(1);    /* 1 text / 2 url / 3 img */
            $table->boolean('status')->default(true);  /* 1, '1', true active / 0, '0', false inactive */
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
        Schema::dropIfExists('website_content_areas');
    }
};
