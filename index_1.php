<?php
$routes = [];

route('/', function () {
  echo "Home Page";
});

route('/login', function () {
  echo "Login Page";
});

route('/schd/section', function () {
  echo "Section timetable";
});

route('/schd/teacher', function () {
  echo "Techer timetable";
});

route('/schd/room', function () {
  echo "Room timetable";
});

route('/404', function () {
  echo "Page not found";
});

function route(string $path, callable $callback) {
  global $routes;
  $routes[$path] = $callback;
}

run();

function run() {
  global $routes;
  $uri = $_SERVER['REQUEST_URI'];
  $found = false;
  foreach ($routes as $path => $callback) {
    if ($path !== $uri) continue;

    $found = true;
    $callback();
  }

  if (!$found) {
    $notFoundCallback = $routes['/404'];
    $notFoundCallback();
  }
}

//require 'app/bootstrap.php';
//require_once __DIR__ . '/vendor/autoload.php';
//
//use GBU\Auth\User as User;
//use GBU\Blog\Comment as Comment;
//$user = new User('admin', '$ecurePa$$w0rd1');
//
//$comment = new Comment('<h1>Hello</h1>');
//echo $comment->getComment();
//echo $user->getUsername();
//echo $user->getPassword();