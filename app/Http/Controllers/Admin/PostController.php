<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return 'index Admin';
    }

    public function create() {
        return 'create';
    }

    public function store() {
        return 'store';
    }

    public function show($post) {
        return "show {$post}";
    }

    public function edit($post) {
        return "edit {$post}";
    }

    public function update() {
        return 'update';
    }

    public function delete() {
        return 'delete';
    }

    public function like() {
        return 'like';
    }
}
