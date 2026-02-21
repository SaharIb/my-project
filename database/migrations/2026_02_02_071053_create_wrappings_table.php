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
        Schema::create('wrappings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type'); // نوع التغليف (مثلاً: ورق ملون، كرتون فاخر)
            $table->decimal('extra_price', 8, 2)->default(0); // السعر الإضافي للتغليف
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wrappings');
    }
};
