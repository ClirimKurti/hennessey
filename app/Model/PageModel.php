<?php

namespace Hennessey\Model;

class PageModel {

    public function getPageById($pageId = null) {
        if ($pageId) {
            $page = get_post($pageId);
        } else {
            global $post;
            $page = $post;
        }

        return $page;
    }
}
