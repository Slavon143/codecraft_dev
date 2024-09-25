<?php

namespace App\Controllers;

class MainController {
    public function index() {
        // Подключаем заголовок и основной контент главной страницы
        $title = "Home";
        include __DIR__ . '/../includes/header.php';
        include __DIR__ . '/../pages/home.php';
        include __DIR__ .'/../includes/footer.php';
    }

    public function about() {
        // Подключаем заголовок и основной контент главной страницы
        $title = "Home";
        include __DIR__ . '/../includes/header.php';
        include __DIR__ . '/../pages/about.php';
        include __DIR__ .'/../includes/footer.php';
    }
}
