<?php

namespace App\Http\Controllers;

// Postモデルクラスのuse宣言
use App\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    // index関数の定義
    public function index(Post $post)
    {
        return $post->get();
        // $postはPostクラスのインスタンス
    }
    //
}