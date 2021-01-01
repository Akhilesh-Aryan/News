<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insert;
class Home extends Controller
{
    //
    public function homepage()
    {
        return view('home',["data"=>Insert::all()]);

    }
    public function insert(Request $req){
        $req->validate([
            'title'=>'required|min:4',
            'author'=>'required|',
            'post'=>'required| min:10',
        ]);
    //insert work
    Insert::create([
        'title'=>$req->title,
        'author'=>$req->author,
        'post'=>$req->post,
    ]);
    return redirect()->back();
    }
}

