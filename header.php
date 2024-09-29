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
    <title>Школа современных родителей</title>
</head>
<body>
<div class="header">
    <div class="element_header">
        <div class="element_menu">
            <div class="horizontal_list" id="menuList">
                <p><a href="#about">О нас</a></p>
                <p><a href="#purpose">Разделы курса</a></p>
                <p><a href="#">Об авторе курса</a></p>
            </div>
            <button class="menu-button" onclick="toggleMenu()">☰</button> <!-- Кнопка для мобильной версии -->
        </div>
        <div class="btm_go_to_course">
            <a href="reg.php">Перейти к курсу</a>
        </div>
    </div>
</div>
<script>
    function toggleMenu() {
        const menu = document.getElementById('menuList');
        const items = document.querySelectorAll('.horizontal_list');
        
        if (menu.style.display === 'flex') {
            menu.style.display = 'none';
            items.forEach(item => item.classList.remove('visible'));
        } else {
            menu.style.display = 'flex';
            setTimeout(() => {
                items.forEach(item => item.classList.add('visible'));
            }, 10);
        }
    }

    window.onclick = function(event) {
        const menu = document.getElementById('menuList');
        if (!event.target.matches('.menu-button') && menu.style.display === 'flex') {
            menu.style.display = 'none';
            const items = document.querySelectorAll('.horizontal_list');
            items.forEach(item => item.classList.remove('visible'));
        }
    }
</script>
