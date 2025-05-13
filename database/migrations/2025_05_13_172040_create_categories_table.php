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
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // 主键, 无符号 BigInt, 自增
            $table->string('name'); // 分类名称
            $table->string('slug')->unique(); // URL友好的别名，唯一。unique表单里唯一
            $table->text('description')->nullable(); // 分类描述，可为空
            $table->unsignedBigInteger('parent_id')->nullable(); // 父分类ID，用于支持多级分类
            $table->string('image')->nullable(); // 分类图片路径，可为空
            $table->boolean('is_active')->default(true); // 是否激活/显示，默认为 true
            $table->integer('sort_order')->default(0); // 排序字段，默认为0
            $table->timestamps(); // created_at 和 updated_at 时间戳

            // 外键约束
            // $table->foreign('parent_id')->references('id')->on('categories')->onDelete('set null');
            // 如果父分类删除，子分类的 parent_id 设为 null，或者用 cascade 使子分类也删除。咋实现呢问ai
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
