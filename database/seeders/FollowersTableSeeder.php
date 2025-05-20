<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $user = User::first();
        $userId = $user->id;

        // 获取去除掉用户 ID 为 1 的所有用户的 ID 的数组
        $followers = $users->slice(1);
        $followerIds = $followers->pluck('id')->toArray();

        // 用户 1 关注所有其他用户
        $user->follow($followerIds);

        // 除了用户 1 之外的所有用户都关注用户 1
        foreach ($followers as $follower) {
            $follower->follow($userId);
        }

        // 所有用户关注用户名为 AlbertHan 的用户
        $albert = User::where('name', 'AlbertHan')->first();
        if ($albert) {
            $albertId = $albert->id;
            foreach ($users as $user) {
                // 避免用户自己关注自己
                if ($user->id !== $albertId) {
                    $user->follow($albertId);
                }
            }
        }
    }
}
