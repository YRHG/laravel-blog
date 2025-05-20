@extends('layouts.default')
@section('title', 'About')

@section('content')
    <div class="max-w-3xl mx-auto py-10 px-4 bg-white shadow-md rounded-2xl">
        <h1 class="text-3xl font-bold text-green-600 mb-6">关于本站</h1>

        <p class="text-gray-700 leading-relaxed mb-6">
            欢迎来到我们的吃瓜网站！这是一个分享 <strong class="text-green-700">瓜田</strong>、<strong class="text-green-700">瓜友</strong> 的平台。
        </p>

        <h3 class="text-xl font-semibold text-gray-800 mb-2">🍉 网站宗旨</h3>
        <p class="text-gray-700 leading-relaxed mb-6">
            我们致力于创建一个开放、友好、有深度的内容社区，鼓励用户记录生活、发表见解、交流成长。
        </p>

        <h3 class="text-xl font-semibold text-gray-800 mb-2">📌 主要内容</h3>
        <ul class="list-disc list-inside text-gray-700 mb-6 space-y-1">
            <li>技术分享（如：Laravel、PHP、JavaScript 等）</li>
            <li>生活记录：主要是吃瓜</li>
            <li>吃瓜 & 贩瓜</li>
            <li>作品展示</li>
        </ul>

        <h3 class="text-xl font-semibold text-gray-800 mb-2">👤 作者简介</h3>
        <p class="text-gray-700 leading-relaxed mb-6">
            本博客由 <strong class="text-green-700">AlbertHan</strong> 创建与维护，一名热爱编程、热衷学习的开发者。
        </p>

        <h3 class="text-xl font-semibold text-gray-800 mb-2">📮 联系方式</h3>
        <ul class="text-gray-700 mb-6 space-y-1">
            <li>Email: <a href="mailto:975816342hhz@gmail.com" class="text-blue-600 underline">975816342hhz@gmail.com</a></li>
            <li>GitHub: <a href="https://github.com/AlbertHan" target="_blank" class="text-blue-600 underline">AlbertHan</a></li>
        </ul>

        <p class="text-center text-sm text-gray-500 mt-10">感谢你的访问与支持！❤️</p>
    </div>
@stop
