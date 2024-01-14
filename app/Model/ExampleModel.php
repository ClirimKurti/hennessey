<?php

namespace Hennessey\Model;

class PostModel {
    public function getPosts() {
        return get_posts();
    }
}