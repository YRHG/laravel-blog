<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * UsersController constructor.
     *
     * This constructor applies middleware to the controller methods.
     * - auth: Only authenticated users can access certain methods.
     * - guest: Only guests can access the registration page.
     */
    public function __construct()
    {
        // 只允许未认证的用户访问注册页面
        // 如果访问非 show, create, store 方法则需要认证, 会自动重定向到登录页面
        $this->middleware('auth')->except(['show', 'create', 'store']);

        // 只允许未认证的用户访问注册页面
        $this->middleware('guest')->only('create');
    }

    /**
     * Show the registration form.
     *
     * @return View
     */
    public function create(): View
    {
        return view('users.create');
    }

    /**
     * Show the user profile.
     *
     * @param User $user
     * @return View
     */
    public function show(User $user): View
    {
        return view('users.show', compact('user'));
    }

    /**
     * Store a new user.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|unique:users|max:50',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // Log the user in
        auth()->login($user);

        // Redirect to the user's profile with a session flash message.
        return redirect()->route('users.show', $user)->with('success', 'User created successfully.');
    }

    /**
     * Show the edit user form.
     *
     * @param User $user
     * @return View
     * @throws AuthorizationException
     */
    public function edit(User $user): View
    {
        // 检查当前认证用户是否有权限更新该用户
        // 这会自动调用 UserPolicy 中的 update 方法进行权限判断
        // 如果用户无权限，将会抛出 403 Forbidden 响应

        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the user.
     *
     * @param Request $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:50',
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        // 更新用户信息
        // $request->filled() 用于判断字段是否存在且不为空
        // $request->only() 用于从请求中获取指定的字段

        $data = $request->only('name');
        if ($request->filled('password')) {
            $data = $request->only('name', 'password');
        }
        $user->update($data);

        // 重定向到用户的个人资料页，并携带一条 session 闪存消息

        return redirect()->route('users.show', $user)->with('success', 'User updated successfully.');
    }
}
