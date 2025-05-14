{{-- resources/views/static_pages/home.blade.php --}}
@extends('layouts.default')

@section('title', '首页 - Weibo App') {{-- 请根据您的实际应用名调整 --}}

@section('content')
    <div class="row">
        {{-- 左侧分类区域 --}}
        <aside class="col-lg-3 col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white"> {{-- 醒目的头部 --}}
                    <h5 class="mb-0">商品分类</h5>
                </div>
                @if(isset($categories) && $categories->count() > 0)
                    <ul class="list-group list-group-flush category-sidebar-nav">
                        @foreach($categories as $category)
                            <li class="list-group-item {{ $category->children && $category->children->count() > 0 ? 'has-submenu' : '' }}">
                                <a href="{{ $category->url ?? '#' }}" class="d-flex justify-content-between align-items-center text-decoration-none">
                                    <span>{{ $category->name ?? '分类名称' }}</span>
                                    @if($category->children && $category->children->count() > 0)
                                        <i class="bi bi-chevron-down submenu-toggle-icon"></i> {{-- 使用 Bootstrap Icon --}}
                                    @endif
                                </a>
                                @if($category->children && $category->children->count() > 0)
                                    <ul class="list-group submenu ms-3 mt-1" style="display: none;">
                                        @foreach($category->children as $child)
                                            <li class="list-group-item border-0 py-1 px-2">
                                                <a href="{{ $child->url ?? '#' }}" class="text-decoration-none text-secondary small">{{ $child->name ?? '子分类' }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @else
                    <div class="card-body">
                        <p class="text-muted mb-0">暂无商品分类。</p>
                    </div>
                @endif
            </div>
            {{-- 您可以在侧边栏添加更多内容，例如广告、最新资讯等 --}}
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">推广信息</h5>
                    <p class="card-text small text-muted">这里可以放置一些广告或特别推广内容。</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">了解更多</a>
                </div>
            </div>
        </aside>

        {{-- 右侧主要内容区域 --}}
        <div class="col-lg-9 col-md-8">
            {{-- 1. 主视觉/轮播图区域 --}}
            <section class="hero-section mb-4 shadow-lg rounded overflow-hidden">
                {{-- 如果您有轮播图组件，可以替换这里。以下是一个静态图片示例 --}}
                {{-- 确保图片路径正确，或使用占位符 --}}
                <a href="#">
                    <img src="{{ asset('images/banners/main-banner.jpg') }}" class="img-fluid w-100" alt="主推广横幅" style="max-height: 400px; object-fit: cover;">
                </a>
                {{-- 也可以是一个更丰富的 Hero 单元 --}}
                {{-- <div class="p-5 mb-4 bg-light rounded-3">
                    <div class="container-fluid py-5">
                      <h1 class="display-5 fw-bold">春季新品上市</h1>
                      <p class="col-md-8 fs-4">探索最新时尚单品，打造您的专属风格。</p>
                      <button class="btn btn-primary btn-lg" type="button">立即查看</button>
                    </div>
                </div> --}}
            </section>

            {{-- 2. 特色/促销小区块 (可选) --}}
            <section class="features-section mb-4">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card text-center h-100 shadow-sm">
                            <div class="card-body">
                                {{-- <i class="bi bi-truck fs-1 text-primary"></i> --}}
                                <h5 class="card-title mt-2">急速发货</h5>
                                <p class="card-text small text-muted">全国主要城市次日达。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card text-center h-100 shadow-sm">
                            <div class="card-body">
                                {{-- <i class="bi bi-shield-check fs-1 text-success"></i> --}}
                                <h5 class="card-title mt-2">正品保障</h5>
                                <p class="card-text small text-muted">100%官方授权正品。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center h-100 shadow-sm">
                            <div class="card-body">
                                {{-- <i class="bi bi-arrow-counterclockwise fs-1 text-warning"></i> --}}
                                <h5 class="card-title mt-2">无忧退换</h5>
                                <p class="card-text small text-muted">7天无理由退换货。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- 3. 推荐商品区域 --}}
            <section class="featured-products-section" id="products">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="fw-bold mb-0">热卖推荐</h3>
                    <a href="#" class="btn btn-outline-secondary btn-sm">查看更多 &raquo;</a>
                </div>
                @if(isset($featuredProducts) && $featuredProducts->count() > 0)
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                        @foreach($featuredProducts as $product)
                            <div class="col">
                                <div class="card h-100 shadow-sm product-card-hover">
                                    <a href="{{ $product->product_url ?? '#' }}">
                                        <img src="{{ $product->image_url ?? asset('images/products/placeholder.png') }}"
                                             class="card-img-top product-image"
                                             alt="{{ $product->name ?? '商品名称' }}">
                                    </a>
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title product-name">
                                            <a href="{{ $product->product_url ?? '#' }}" class="text-decoration-none text-dark stretched-link">{{ $product->name ?? '商品名称加载中...' }}</a>
                                        </h5>
                                        <p class="card-text text-danger fw-bold fs-5 mb-3 product-price">
                                            {{ $product->formatted_price ?? ('¥' . number_format($product->price ?? 0, 2)) }}
                                        </p>
                                        <div class="mt-auto">
                                            <form action="{{-- route('cart.add', ['productId' => $product->id ?? 0]) --}}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-primary w-100 add-to-cart-btn"><i class="bi bi-cart-plus-fill"></i> 加入购物车</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="alert alert-info text-center" role="alert">
                        暂无推荐商品，敬请期待！
                    </div>
                @endif
            </section>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* 首页特定样式 */
        .category-sidebar-nav .list-group-item {
            border-radius: 0; /* 移除默认圆角以适应垂直列表 */
            border-left: 3px solid transparent;
            transition: background-color 0.2s ease-in-out, border-left-color 0.2s ease-in-out;
            padding-top: 0.6rem;
            padding-bottom: 0.6rem;
        }
        .category-sidebar-nav .list-group-item a {
            color: #333;
        }
        .category-sidebar-nav .list-group-item:hover,
        .category-sidebar-nav .list-group-item.active { /* 假设有 active 状态 */
            border-left-color: {{ $primaryColor ?? '#0d6efd' }}; /* 使用主题色 */
            background-color: #f8f9fa; /* 浅灰色背景 */
        }
        .category-sidebar-nav .list-group-item .submenu-toggle-icon {
            transition: transform 0.3s ease;
        }
        .category-sidebar-nav .list-group-item.open .submenu-toggle-icon {
            transform: rotate(180deg);
        }
        .category-sidebar-nav .submenu {
            border-top: 1px solid #eee;
            background-color: #fdfdfd;
        }
        .category-sidebar-nav .submenu .list-group-item a {
            font-size: 0.9em;
        }
        .product-image {
            height: 200px; /* 固定商品图片高度 */
            object-fit: cover; /* 裁剪图片以适应容器 */
        }
        .product-card-hover {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .product-card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }
        .product-name {
            font-size: 1rem; /* 调整商品名称大小 */
            font-weight: 500;
            min-height: 2.8em; /* 确保至少两行的高度 */
            line-height: 1.4em;
            /* 多行文字溢出省略 (可选) */
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .product-price {
            font-size: 1.1rem !important; /* 确保价格突出 */
        }
        .add-to-cart-btn i { /* 按钮中图标的样式 */
            margin-right: 0.3rem;
        }
        /* 确保您的主SCSS中已引入Bootstrap Icons或FontAwesome的CSS */
        /* @import "~bootstrap-icons/font/bootstrap-icons.css"; */
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const categoryItemsWithSubmenu = document.querySelectorAll('.category-sidebar-nav li.has-submenu > a');

            categoryItemsWithSubmenu.forEach(function (link) {
                link.addEventListener('click', function (event) {
                    // 如果链接本身有有效的目标地址，则不阻止默认行为
                    // 如果链接只是作为展开/收起的触发器，可以取消下一行注释
                    // event.preventDefault();

                    const parentLi = this.parentElement;
                    const submenu = parentLi.querySelector('.submenu');
                    const icon = this.querySelector('.submenu-toggle-icon');

                    if (submenu) {
                        if (submenu.style.display === 'none' || submenu.style.display === '') {
                            submenu.style.display = 'block';
                            parentLi.classList.add('open'); // 用于CSS控制图标等
                            if(icon) icon.classList.replace('bi-chevron-down', 'bi-chevron-up');
                        } else {
                            submenu.style.display = 'none';
                            parentLi.classList.remove('open');
                            if(icon) icon.classList.replace('bi-chevron-up', 'bi-chevron-down');
                        }
                    }
                });
            });
        });
    </script>
@endpush
