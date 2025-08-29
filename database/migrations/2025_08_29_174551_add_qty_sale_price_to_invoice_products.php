<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('invoice_products', function (Blueprint $table) {
            $table->integer('qty');
            $table->float('sale_price');
            $table->foreignId('invoice_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invoice_products', function (Blueprint $table) {
            $table->dropForeign(['invoice_id', 'product_id', 'user_id']);
            $table->dropColumn(['qty', 'sale_price', 'invoice_id', 'product_id', 'user_id']);
        });
    }
};
