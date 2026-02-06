<?php

use App\Http\Controllers\ProductTypeController;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->foreignIdFor(\App\Models\ProductType::class)->nullable()->constrained();
            $table->string('image')->nullable();
            $table->string('original_price')->nullable();
            $table->string('sale_price')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
