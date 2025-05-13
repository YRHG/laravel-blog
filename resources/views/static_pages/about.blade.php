<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Albert_Buy - 关于我们</title>
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
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px 0;
            border-bottom: 3px solid #e67e22;
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
            color: #e67e22;
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
        .team-section {
            margin-top: 30px;
        }
        .team-member {
            text-align: center;
            margin-bottom: 20px;
        }
        .team-member img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            border: 3px solid #e67e22;
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
        <section class="content-section">
            <h1>关于 Albert_Buy</h1>
            <p>Albert_Buy 是一家致力于为全球消费者提供精选商品和卓越购物体验的在线零售平台。我们相信，好的设计和优质的产品能够提升生活品质。</p>

            <h2>我们的使命</h2>
            <p>我们的使命是通过创新技术和贴心服务，连接优质品牌与消费者，打造一个值得信赖的购物社区。我们努力搜寻独特且高品质的商品，确保每一位顾客都能在这里找到心仪之选。</p>

            <h2>我们的愿景</h2>
            <p>成为最受消费者喜爱的在线购物目的地之一，以多样化的商品选择、便捷的购物流程和个性化的客户关怀，引领电子商务的新潮流。</p>

            <h2>核心价值</h2>
            <ul>
                <li><strong>客户至上：</strong> 始终将客户的需求和满意度放在首位。</li>
                <li><strong>品质保证：</strong> 严格筛选商品，确保每一件都符合高标准。</li>
                <li><strong>持续创新：</strong> 不断探索和应用新技术，提升用户体验。</li>
                <li><strong>诚信经营：</strong> 以透明和负责任的态度对待所有商业行为。</li>
            </ul>

            <div class="team-section">
                <h2>我们的团队 (示例)</h2>
                <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
                    <div class="team-member">
                        <img src="https://via.placeholder.com/120x120.png?text=成员A" alt="团队成员 A">
                        <h3>卢老板</h3>
                        <p>创始人 & CEO</p>
                    </div>
                    <div class="team-member">
                        <img src="https://via.placeholder.com/120x120.png?text=成员B" alt="团队成员 B">
                        <h3>李老板</h3>
                        <p>首席技术官</p>
                    </div>
                    <div class="team-member">
                        <img src="https://via.placeholder.com/120x120.png?text=成员C" alt="团队成员 C">
                        <h3>张老板</h3>
                        <p>运营总监</p>
                    </div>
                </div>
            </div>
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
