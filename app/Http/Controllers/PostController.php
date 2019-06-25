<?php

namespace App\Http\Controllers;

use App\Model\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function allPost(Request $request){
        $data = Posts::all();
        return $this->result($data);
    }
}
