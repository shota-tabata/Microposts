<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFavoritesController extends Controller
{
    public function store($micropostsId)
    {
        //認証済みユーザ（閲覧者）が、投稿をお気に入り登録する
        \Auth::user()->favorite($micropostsId);
        //前のURLへリダイレクトリさせる
        return back();
    }
    
    public function destroy($micropostsId)
    {
        //認証済みユーザ（閲覧者）が、投稿をお気に入りから削除する
        \Auth::user()->unfavorite($micropostsId);
        //前のURLへリダイレクトさせる
        return back();
        
    }
}
