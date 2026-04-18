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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // اسم المنتج (مثلاً: صندوق سعادة)
        $table->string('slug')->unique(); // رابط للمنتج (sonduq-saada)
        $table->text('description'); // وصف الهدية ومكوناتها
        $table->decimal('price', 8, 2); // السعر (مثلاً 99.99)
        $table->string('image')->nullable(); // مسار الصورة الأساسية
        $table->integer('stock')->default(0); // كم قطعة متوفرة
        $table->boolean('is_available')->default(true); // متاح للبيع أم لا
        $table->text('wrapping_options')->nullable(); // ملاحظات عن التغليف المتاح
        $table->timestamps(); // بيعمل أعمدة created_at و updated_at تلقائياً
        $table->string('slug')->unique(); // هذا هو العمود الذي يشتكي لارفل من غيابه
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
