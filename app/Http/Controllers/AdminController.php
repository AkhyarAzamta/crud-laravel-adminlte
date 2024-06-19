<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }
}
