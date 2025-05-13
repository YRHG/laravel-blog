<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Albert_Buy - 帮助中心</title>
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
        .content-section h1, .content-section h2, .content-section h3 {
            color: #2c3e50;
            margin-top: 0;
        }
        .faq-item {
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }
        .faq-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .faq-item h3 {
            margin-bottom: 8px;
            font-size: 1.2em;
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
            <h1>帮助中心</h1>
            <p>我们在这里帮助您解决遇到的任何问题。查找常见问题解答或联系我们的客服团队。</p>

            <h2>常见问题 (FAQ)</h2>
            <div class="faq-item">
                <h3>如何下单？</h3>
                <p>浏览我们的商品，选择您喜欢的商品加入购物车，然后按照结账流程操作即可。您需要提供配送地址和支付信息。</p>
            </div>
            <div class="faq-item">
                <h3>支持哪些支付方式？</h3>
                <p>我们支持多种支付方式，包括信用卡（Visa, MasterCard）、支付宝、微信支付等。具体请在支付页面查看。</p>
            </div>
            <div class="faq-item">
                <h3>配送需要多长时间？</h3>
                <p>配送时间取决于您的地理位置和所选的配送方式。通常情况下，国内订单会在3-7个工作日内送达。</p>
            </div>
            <div class="faq-item">
                <h3>如何退换货？</h3>
                <p>如果您对购买的商品不满意，可以在收到商品后的7天内申请退换货。请确保商品未经使用且包装完好。详情请参阅我们的<a href="#">退换货政策</a>。</p>
            </div>

            <h2>联系我们</h2>
            <p>如果您没有找到您问题的答案，请随时通过以下方式联系我们：</p>
            <ul>
                <li><strong>电子邮件:</strong> support@albertbuy.com</li>
                <li><strong>客服电话:</strong> 400-123-4567 (工作时间：周一至周五 9:00-18:00)</li>
                <li>您也可以通过网站的<a href="#">在线客服</a>系统与我们联系。</li>
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
