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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('company_name')->nullable();
            $table->string('code', 6)->nullable();
            $table->string('mobile')->nullable();
            $table->enum('gender', [1, 2])->nullable();  /* 0 none / 1 male / 2 female */
            $table->text('about')->nullable();
            $table->string('country', 100)->nullable();
            $table->string('government', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('address')->nullable();
            $table->boolean('map')->default(false);  /* 1, '1', true active / 0, '0', false inactive */
            $table->string('lat', 50)->nullable();
            $table->string('long', 50)->nullable();
            $table->string('img')->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
