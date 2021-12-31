<?php
require_once "../component/routers.php";

Router::set_path_controller('../controller/');
Router::set_page_error_404('/page_404.php');

Router::set_component('/', 'homepage.php');
Router::set_component('/about', 'about.php');
Router::set_component('/sww', 'homepage.php');

Router::run_routers();
