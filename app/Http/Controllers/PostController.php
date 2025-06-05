<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getNewsTemplate(Request $request) {
        return view("news");
    }
}
