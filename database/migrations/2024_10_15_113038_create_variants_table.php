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
        Schema::create('variants', function (Blueprint $table) {
            $table->id('variant_id');
            $table->foreignId('Item_item_id')->constrained('items', 'item_id')->
                onDelete('cascade');
            $table->string('variant_name');
            $table->string('image_back')->nullable();
            $table->string('image_front');
            $table->string('image_side')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variants');
    }
};
