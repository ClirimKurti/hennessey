<?php 
namespace Hennessey\Controller;

class FrontPageController {
    public function display() {
        ob_start();
        wp_head();
        $wp_head = ob_get_clean();

        ob_start();
        wp_footer();
        $wp_footer = ob_get_clean();

        $data = [
            'posts' => get_posts(),
            'title' => get_the_title(),
            'wp_head' => $wp_head,
            'wp_footer' => $wp_footer,
        ];

        $loader = new \Twig\Loader\FilesystemLoader(MOD_TEMPLATE . '/views');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('example_view.twig', $data);
    }
}
