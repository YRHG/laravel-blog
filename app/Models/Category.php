<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
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
        'parent_id',
        'image',
        'is_active',
        'sort_order',
    ];

    /**
     * 获取此分类下的所有商品 (一对多关系)
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * 获取此分类的父分类 (多对一，自身关联)
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * 获取此分类的所有子分类 (一对多，自身关联)
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    /**
     * 获取所有顶层分类
     */
    public static function getTopLevelCategories()
    {
        return self::whereNull('parent_id')->where('is_active', true)->orderBy('sort_order')->get();
    }
}
