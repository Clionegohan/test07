<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index(Post $post)
    {
        //'getPaginateByLimit'メソッドを使用して、投稿をページネーションして取得
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
        //brade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した&postを代入。
    }
}
?>

