<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suka;

class LikeController extends Controller
{
    public function like($post_id,$user_id){

        $suka = new suka;
        $suka->user_id = $user_id;
        $suka->post_id = $post_id;
        $suka->save();
        return redirect()->back();
    }

    public function dislike($post_id,$user_id){

        $suka = suka::where('post_id',$post_id)->where('user_id',$user_id)->first();
        if($suka == null){
            return redirect()->back();
        }
        $suka->delete();
        return redirect()->back();
    }
}
