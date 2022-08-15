<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function singlePost($id)
    {
        //dd($id);
        return "only the post with id " .  $id .  " is returned";
    }

    public function allPost()
    {
        return "all posts returned";
    }

    public function doubleParameter($id,$color)
    {
        return "the post id is " .  $id .  " and the color is " . $color;
    }
}
