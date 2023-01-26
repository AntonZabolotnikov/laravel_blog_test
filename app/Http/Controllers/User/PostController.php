<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur, adipisicing elit. Facere, aut.'
        ];

        $posts = array_fill(0, 10, $post);

        return view('user.posts.index', compact('posts'));
    }

    public function create() {
        return view('user.posts.create');
    }

    public function store() {
        return 'store';
    }

    public function show($post) {

        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur, adipisicing elit. Facere, aut.'
        ];

        return view('user.posts.show', compact('post'));
    }

    public function edit($post) {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur, adipisicing elit. Facere, aut.'
        ];
        
        return view('user.posts.edit', compact('post'));
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
