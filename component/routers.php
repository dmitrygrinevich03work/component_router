<?php

class Router
{
    protected static $path_page_404;
    protected static $set_path_controller;
    protected static $url;
    protected static $routes = [];

    public static function set_path_controller($path) // Устанавливаем путь к контроллеру
    {
        self::$set_path_controller = $path;
    }

    public static function set_page_error_404($set_page_error_404)//уСТАНАВЛИВАЕМ путь к странице 404
    {
        return self::$path_page_404 = $set_page_error_404;
    }

    public static function set_component($url, $component)//Вот сам компонент который принемает параметр ссылки и параметр страница.php
    {
        self::$routes += array($url => $component);
    }

    public static function run_routers()//Фнкция start выполняет проверку и возвращает нужные нам действия.
    {
        $route = $_SERVER['REQUEST_URI'];
        if (array_key_exists($route, self::$routes)) {
            include self::$set_path_controller . self::$routes[$route];
            exit;
        }
        include self::$set_path_controller . self::$path_page_404;
        exit;
    }
}