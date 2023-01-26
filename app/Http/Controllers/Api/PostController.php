<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return 'index Api';
    }

    public function show($post) {
        return "show Api {$post}";
    }

    public function like($post) {
        return "like Api {$post}";
    }
}
