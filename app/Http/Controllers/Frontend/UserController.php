<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index() {
        $users = Http::get("http://127.0.0.1:8000/api/user")->json();
        return view("user", compact("users"));
    }
}
