<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Albert_Buy - 首页</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7f6;
            color: #333;
            line-height: 1.6;
        }
        .container {
            width: 90%;
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 15px;
        }
        header {
            background-color: #2c3e50; /* 深蓝灰色 */
            color: #ecf0f1; /* 浅云白色 */
            padding: 20px 0;
            border-bottom: 3px solid #e67e22; /* 橙色强调 */
        }
        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header .logo {
            font-size: 28px;
            font-weight: bold;
            text-decoration: none;
            color: #ecf0f1;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        nav ul li {
            margin-left: 25px;
        }
        nav ul li a {
            text-decoration: none;
            color: #ecf0f1;
            font-weight: 500;
            font-size: 16px;
            transition: color 0.3s ease;
        }
        nav ul li a:hover, nav ul li a.active {
            color: #e67e22; /* 橙色高亮 */
        }
        .main-content {
            padding: 40px 0;
        }
        .content-section {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }
        .content-section h1, .content-section h2 {
            color: #2c3e50;
            margin-top: 0;
        }
        .hero-section {
            text-align: center;
            padding: 60px 20px;
            background-color: #3498db; /* 亮蓝色 */
            color: white;
            border-radius: 8px;
        }
        .hero-section h1 {
            font-size: 3em;
            margin-bottom: 10px;
            color: white;
        }
        .hero-section p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            background-color: #e67e22;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #d35400; /* 深橙色 */
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .product-card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #eee;
            margin-bottom: 10px;
            padding-bottom: 10px;
        }
        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 25px 0;
            margin-top: 40px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <a href="{{ route('home') }}" class="logo">Albert_Buy</a>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">首页</a></li>
                <li><a href="{{ route('help') }}" class="{{ request()->routeIs('help') ? 'active' : '' }}">帮助中心</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">关于我们</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="main-content">
    <div class="container">
        <section class="hero-section content-section">
            <h1>欢迎来到 Albert_Buy！</h1>
            <p>发现最新潮流，选购优质商品。</p>
            <a href="#products" class="btn">立即选购</a>
        </section>

        <section class="content-section" id="products">
            <h2>热门商品</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="https://via.placeholder.com/250x200.png?text=商品A" alt="商品A">
                    <h3>时尚T恤</h3>
                    <p>¥129.00</p>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/250x200.png?text=商品B" alt="商品B">
                    <h3>舒适运动鞋</h3>
                    <p>¥399.00</p>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/250x200.png?text=商品C" alt="商品C">
                    <h3>智能手表</h3>
                    <p>¥899.00</p>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/250x200.png?text=商品D" alt="商品D">
                    <h3>无线耳机</h3>
                    <p>¥259.00</p>
                </div>
            </div>
        </section>

        <section class="content-section">
            <h2>我们的特色</h2>
            <p>在 Albert_Buy，我们致力于提供最优质的商品和无与伦比的购物体验。探索我们的最新系列，享受便捷的在线购物。</p>
            <ul>
                <li>精选全球好物</li>
                <li>快速安全的配送</li>
                <li>专业的客户服务</li>
                <li>轻松退换货政策</li>
            </ul>
        </section>
    </div>
</main>

<footer>
    <div class="container">
        <p>&copy; {{ date('Y') }} Albert_Buy. 保留所有权利。</p>
    </div>
</footer>
</body>
</html>
