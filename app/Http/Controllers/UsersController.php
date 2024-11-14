<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function Index(){
        $no=0;
        $no++;
        return View('Admin.Index',["title"=>"Control Panel","active"=>"Home"]);
    }
}
