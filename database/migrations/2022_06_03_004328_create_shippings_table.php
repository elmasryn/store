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
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('order_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
            $table->string('shipping_number', 50)->unique();
            $table->string('lat_from', 50)->nullable();
            $table->string('long_from', 50)->nullable();
            $table->string('lat_to', 50)->nullable();
            $table->string('long_to', 50)->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamp('rejected_at')->nullable();
            $table->text('rejected_reason')->nullable();
            $table->timestamp('refunded_at')->nullable();
            $table->timestamp('deliverd_at')->nullable();
            $table->timestamp('completed_at')->nullable();
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
        Schema::dropIfExists('shippings');
    }
};
