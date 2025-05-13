<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'short_description',
        'price',
        'sale_price',
        'sku',
        'stock_status',
        'quantity',
        'image',
        'images', // 注意: 如果 images 是 JSON 类型, 需要在 $casts 中定义
        'category_id',
        // 'brand_id',
        'is_featured',
        'is_active',
        // 'weight',
        // 'dimensions',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'images' => 'array', // 将 images 字段自动转换为数组
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'price' => 'decimal:2', // 确保价格按两位小数处理
        'sale_price' => 'decimal:2',
    ];

    /**
     * 获取此商品所属的分类 (多对一关系)
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * 获取此商品所属的品牌 (如果需要品牌功能)
     */


    /**
     * 获取格式化后的价格 (访问器示例)
     * 在 Blade 中可以像访问普通属性一样访问: $product->formatted_price
     */
    public function getFormattedPriceAttribute(): string
    {
        $priceToFormat = $this->sale_price ?? $this->price;
        return '¥' . number_format($priceToFormat, 2);
    }

    /**
     * 获取商品主图的完整URL (访问器示例)
     */
    public function getImageUrlAttribute(): ?string
    {
        // 假设图片存储在 storage/app/public/products 目录下，并且已执行 php artisan storage:link
        // 如果 image 字段为空，可以返回一个默认图片URL
        return $this->image ? asset('storage/products/' . $this->image) : asset('images/default-product.png');
    }

    /**
     * 获取商品更多图片的URL列表 (访问器示例)
     */
    public function getImageGalleryAttribute(): array
    {
        $gallery = [];
        if ($this->images) { // images 已经被 $casts 转换为数组
            foreach ($this->images as $imagePath) {
                $gallery[] = asset('storage/products/' . $imagePath);
            }
        }
        return $gallery;
    }
}
