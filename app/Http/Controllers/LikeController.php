<?php

namespace App\Http\Controllers;

use App\Model\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function likeit(\App\Model\Reply $reply)
    {
        $reply->like()->create([
            'user_id' => '1'
        ]);
    }

    public function unlikeIt(\App\Model\Reply $reply)
    {
        //$reply->like()->where(['user_id', auth()->id()])->first()->delete();
        $reply->like()->where('user_id', '1')->first()->delete();
    }
}
