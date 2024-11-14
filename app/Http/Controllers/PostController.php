<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;
use App\Models\Post;

class PostController extends Controller
{
    public function Index(){
        $no=0;
        $no++;
        $Post=Post::all();
        return View('Post.Index',["title"=>"Control Panel","active"=>"Postingan"],compact('Post'));
    }
}
