<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/header.css">
        <link rel="stylesheet" href="style/hero.css">
        <link rel="stylesheet" href="style/ico.css">
        <link rel="stylesheet" href="style/about.css">
        <link rel="stylesheet" href="style/purpose.css">
        <link rel="stylesheet" href="style/call.css">
        <link rel="stylesheet" href="style/resulte.css">
    <title>Document</title>
</head>
<body>
<div class="header">
    <div class="element_header">
        <div class="element_menu">
            <div class="horizontal_list" id="menuList">
                <p><a href="#">Главная</a></p>
                <p><a href="#">О нас</a></p>
                <p><a href="#">Отзывы</a></p>
            </div>
            <button class="menu-button" onclick="toggleMenu()">☰</button> <!-- Кнопка меню для мобильной версии -->
        </div>
        <div class="btm_go_to_course">
            <a href="#">Перейти к курсу</a>
        </div>
    </div>
</div>

<script>
    function toggleMenu() {
    const menu = document.getElementById('menuList');
    menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
}

// Закрытие меню при клике вне его
window.onclick = function(event) {
    const menu = document.getElementById('menuList');
    if (!event.target.matches('.menu-button') && menu.style.display === 'flex') {
        menu.style.display = 'none';
    }
}

</script>