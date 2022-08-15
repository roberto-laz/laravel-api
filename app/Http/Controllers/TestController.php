<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return 'rober';
    }

    public function edit($id, $id2)
    {
        return $id . " " . $id2;
    }
}
