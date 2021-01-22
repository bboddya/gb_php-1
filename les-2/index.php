<?php

//exp 5

$menu = renderTemplate("menu");
echo renderTemplate("layout", $menu);

$about = renderTemplate("about");
echo renderTemplate("layout", $about);

function renderTemplate($page, $content = "") {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}