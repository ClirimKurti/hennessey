<?php

namespace Hennessey\Controller;

use Timber\Timber;

class PageController {
    public function display() {
        $context = Timber::context();
        $context['posts'] = Timber::get_posts();
        $context['title'] = get_the_title();
        
        Timber::render('page.twig', $context);
    }
}