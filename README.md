# Simple PHP Router


## Usage
```php 
require_once('Route.php');
```

## Typical Use
Before use you can set dir location with you actions files
```php
Route::setActionsDir('../controllers/');
```
and set 404 file location (in case action file not found) 
```php
Route::set404File('../file404.php');
``` 

Then you must add your routes. First call static method get() or post(), where as argument enter url. After you must call method path(), where as argument enter file location.
```php
Route::get('')->path('main.php');
Route::post('login')->path('login_handler.php');
```
After run router to execute
```php
Route::run();
```
## Simple Use

```php
Route::get('')->path('main.php');
Route::get('login')->path('login_form.php');
Route::post('login')->path('login_handler.php');
Route::get('register')->path('register_form.php');
Route::post('register')->path('register_handler.php');
Route::get('user')->path('user_info.php');

Route::run();
```