<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('customer_name');
        $table->string('customer_identity', 16);
        $table->string('phone');
        $table->foreignId('bus_class_id')->constrained()->onDelete('cascade');
        $table->date('departure_date');
        $table->integer('total_passengers');
        $table->integer('elderly_passengers');
        $table->integer('ticket_price');
        $table->integer('discount')->default(0);
        $table->integer('total_payment');
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
