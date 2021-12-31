## 1.Connect component Query Builder:
```php 
require_once "../component/routers.php";
```

## 2.Installing the controller for routes
2.1 Before use you can set dir location with you actions files
```php
Router::set_path_controller('../controller/');
```
Set path to 404 page!
```php
Router::set_page_error_404('/page_404.php');
``` 

2.2 Add your routes. Call the Router :: set_component method with "url" and "file location" as an argument.
```php
Router::set_component('url', 'page.php');
```
2.3 After registering the routes, call the Router :: run_routers method
```php
Router::run_routers();
```
## 4. Execute a query as in examples below:

```php
require_once "../component/routers.php";

Router::set_path_controller('../controller/');
Router::set_page_error_404('/page_404.php');

Router::set_component('/', 'homepage.php');
Router::set_component('/about', 'about.php');
Router::set_component('/sww', 'homepage.php');

Router::run_routers();

```
