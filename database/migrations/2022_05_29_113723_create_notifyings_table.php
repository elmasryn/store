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
        Schema::create('notifyings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->boolean('pending_orders')->default(true);  /* 1, '1', true active / 0, '0', false inactive */
            $table->tinyText('pending_orders_type')->default(1);  /* 1 database / 2 mail / 3 slack / 4 sms */
            $table->boolean('pending_orders_all')->default(true);  /* 1, '1', true active / 0, '0', false inactive */
            $table->tinyText('pending_orders_all_type')->default(1);  /* 1 database / 2 mail / 3 slack / 4 sms */
            $table->boolean('Bank_transaction_done')->default(true);  /* 1, '1', true active / 0, '0', false inactive */
            $table->tinyText('Bank_transaction_done_type')->default(1);  /* 1 database / 2 mail / 3 slack / 4 sms */
            $table->boolean('Bank_transaction_error')->default(true);  /* 1, '1', true active / 0, '0', false inactive */
            $table->tinyText('Bank_transaction_error_type')->default(1);  /* 1 database / 2 mail / 3 slack / 4 sms */
            $table->boolean('message_recieved')->default(true);  /* 1, '1', true active / 0, '0', false inactive */
            $table->tinyText('message_recieved_type')->default(1);  /* 1 database / 2 mail / 3 slack / 4 sms */
            $table->boolean('message_management_recieved')->default(true);  /* 1, '1', true active / 0, '0', false inactive */
            $table->tinyText('message_management_recieved_type')->default(1);  /* 1 database / 2 mail / 3 slack / 4 sms */
            $table->boolean('product_created')->default(true);  /* 1, '1', true active / 0, '0', false inactive */
            $table->tinyText('product_created_type')->default(1);  /* 1 database / 2 mail / 3 slack / 4 sms */
            $table->boolean('comment_created')->default(true);  /* 1, '1', true active / 0, '0', false inactive */
            $table->tinyText('comment_created_type')->default(1);  /* 1 database / 2 mail / 3 slack / 4 sms */
            $table->boolean('review_created')->default(true);  /* 1, '1', true active / 0, '0', false inactive */
            $table->tinyText('review_created_type')->default(1);  /* 1 database / 2 mail / 3 slack / 4 sms */
            $table->boolean('order_status')->default(true);  /* 1, '1', true active / 0, '0', false inactive */
            $table->tinyText('order_status_type')->default(1);  /* 1 database / 2 mail / 3 slack / 4 sms */
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
        Schema::dropIfExists('notifyings');
    }
};
