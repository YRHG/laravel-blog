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
            $table->id(); // 主键
            $table->string('name'); // 商品名称
            $table->string('slug')->unique(); // URL友好的别名，唯一
            $table->text('description')->nullable(); // 详细描述
            $table->string('short_description')->nullable(); // 简短描述 (用于列表页)
            $table->decimal('price', 10, 2); // 价格
            $table->decimal('sale_price', 10, 2)->nullable(); // 促销价，可为空
            $table->string('sku')->unique()->nullable(); // 库存单位 (Stock Keeping Unit)，唯一，可为空
            $table->enum('stock_status', ['in_stock', 'out_of_stock', 'on_backorder'])->default('in_stock'); // 库存状态
            $table->integer('quantity')->default(0); // 库存数量 (如果需要精细管理)
            $table->string('image')->nullable(); // 商品主图片路径
            $table->json('images')->nullable(); // 更多图片路径 (JSON 数组)
            $table->unsignedBigInteger('category_id')->nullable(); // 所属分类ID
            // $table->unsignedBigInteger('brand_id')->nullable(); // 所属品牌ID (如果需要品牌功能)
            $table->boolean('is_featured')->default(false); // 是否为推荐商品
            $table->boolean('is_active')->default(true); // 是否上架/激活
            // $table->decimal('weight', 8, 2)->nullable(); // 商品重量
            // $table->json('dimensions')->nullable(); // 商品尺寸 (L, W, H) (JSON 对象)
            $table->timestamps();

            // 外键约束
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null'); // 如果分类被删除，商品的 category_id 设为 null
            // $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null');
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
