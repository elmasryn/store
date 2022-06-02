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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('coupon_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
            $table->string('order_number', 50)->unique();
            $table->string('billing_first_name', 100)->nullable();
            $table->string('billing_last_name', 100)->nullable();
            $table->string('billing_email', 100);
            $table->string('billing_mobile')->nullable();
            $table->string('billing_phone')->nullable();
            $table->unsignedTinyInteger('billing_country')->nullable();
            $table->unsignedSmallInteger('billing_government')->nullable();
            $table->unsignedInteger('billing_city')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_code', 50)->nullable();
            $table->string('lat', 50)->nullable();
            $table->string('long', 50)->nullable();
            $table->text('note')->nullable();
            $table->enum('payment_method', [1, 2])->nullable(); /* Null cash / 1 visa / 2 paypal */
            $table->double('subtotal');
            $table->double('discount')->nullable();
            $table->double('offer_percent')->nullable();
            $table->double('tax')->nullable();
            $table->double('ship_amount')->nullable();
            $table->double('total');
            $table->date('published_at')->nullable();
            $table->date('rejected_at')->nullable();
            $table->text('rejected_reason')->nullable();
            $table->date('refunded_at')->nullable();
            $table->date('completed_at')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
