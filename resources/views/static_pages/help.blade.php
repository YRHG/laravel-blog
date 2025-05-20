@extends('layouts.default')
@section('title', 'Help')

@section('content')
    <div class="max-w-3xl mx-auto py-10 px-4 bg-white shadow-md rounded-2xl">
        <h1 class="text-3xl font-bold text-blue-600 mb-6">帮助中心</h1>

        <p class="text-gray-700 leading-relaxed mb-6">
            欢迎来到 <strong class="text-blue-700">吃瓜帮帮站</strong>！这里是你遇到问题时的第一站。
        </p>

        <h3 class="text-xl font-semibold text-gray-800 mb-3">📌 常见问题（FAQ）</h3>
        <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
            <li><strong>如何注册账号？</strong> 点击右上角“注册”按钮，填写基本信息即可。</li>
            <li><strong>如何发布瓜？</strong> 登录后，点击“发瓜”按钮，输入内容即可发布。</li>
            <li><strong>我能删除自己的瓜吗？</strong> 可以，进入个人主页即可管理你的瓜。</li>
            <li><strong>为什么我看不到别人的瓜？</strong> 请确认是否已登录，或对方设置了隐私权限。</li>
        </ul>

        <h3 class="text-xl font-semibold text-gray-800 mb-3">🛠 使用指南</h3>
        <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
            <li>浏览主页可以查看最新的瓜与热门事件。</li>
            <li>在用户资料页可以关注/取关其他瓜友。</li>
            <li>可以对帖子进行评论、点赞或举报。</li>
        </ul>

        <h3 class="text-xl font-semibold text-gray-800 mb-3">📮 联系我们</h3>
        <p class="text-gray-700 mb-2">如果你在使用过程中遇到技术问题、举报内容或账号问题，请联系我们：</p>
        <ul class="text-gray-700 space-y-1">
            <li>Email: <a href="mailto:975816342hhz@gmail.com" class="text-blue-600 underline">975816342hhz@gmail.com</a></li>
            <li>GitHub: <a href="https://github.com/AlbertHan" target="_blank" class="text-blue-600 underline">AlbertHan</a></li>
        </ul>

        <p class="text-center text-sm text-gray-500 mt-10">感谢你为净化吃瓜环境贡献力量 🍉</p>
    </div>
@stop
