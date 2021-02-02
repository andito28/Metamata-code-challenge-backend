<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\suka;
use \Auth;

class PostController extends Controller
{
    public function index(){
        $postAll = post::all();

        return view('cerita',compact('postAll'));
    }



    public function store(request $request){

        $request->validate([
            'content' => 'required'
        ]);

        post::create([
            'content' => $request->content,
            'user_id' => Auth::user()->id
        ]);

       return redirect()->back();
    }
}
