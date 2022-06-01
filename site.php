<?php

    use \Hcode\Page;
    use \Hcode\Model\Category;

    $app->get('/', function() {
            
        $page = new Page();

        $page->setTpl("index");

    });



?>