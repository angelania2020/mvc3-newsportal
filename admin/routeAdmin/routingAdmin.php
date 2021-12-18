<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' or $path == 'index.php') {
    // Главная страница -
    $response = ControllerAdmin::formLoginSite();
}
// ---- ВХОД ----
elseif ($path == 'login') {
    // Форма входа
    $response = ControllerAdmin::loginAction();
} elseif ($path == 'logout') {
    // Выход
    $response = ControllerAdmin::logoutAction();
}
// listNews
elseif ($path == 'newsAdmin') {
    $response = ControllerAdminNews::newsList();
} else {  // Страница не существует
    $response = ControllerAdmin::error404();
}
