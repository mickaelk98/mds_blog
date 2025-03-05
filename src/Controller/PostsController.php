<?php

namespace App\Controller;

class PostsController extends AppController {
    public function index() {
        $posts = $this->Posts->find("all");
        $this->set(compact('posts'));
    }

    public function post($id = null) {
        $post = $this->Posts->get($id, ["contain" => "Comments"]);
        $this->set(compact('post'));
    }

    public function newPost()
    {
        
    }
    

    public function editPost($id) {
        
    }

    public function deletePost($id) {
       
    }

    public function newComment() {

    }
}

