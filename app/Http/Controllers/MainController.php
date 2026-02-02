<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    // GET /
    public function index()
    {
        // index.blade.php 뷰 반환
        return view('index');
    }
}
