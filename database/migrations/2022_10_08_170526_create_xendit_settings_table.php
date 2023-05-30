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
        Schema::create('xendit_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60)->default('Xendit');
            $table->boolean('is_enabled')->default(false);
            $table->unsignedBigInteger('logo_id')->nullable();
            $table->enum('currency', ['IDR', 'PHP'])->default('IDR');
            $table->decimal('exchange_rate')->default(1);
            $table->integer('deposit_fee')->default(0);

            $table->foreign('logo_id')->references('id')->on('file_manager');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xendit_settings');
    }
};
