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
        <link rel="stylesheet" href="style/aftor.css">
        <link rel="stylesheet" href="style/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>


    <title>Школа современных родителей</title>

    
       <!-- Yandex.Metrika counter -->
       <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(98532874, "init", {
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
            });
        </script>
<noscript><div><img src="https://mc.yandex.ru/watch/98532874" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>
<div class="header">
    <div class="element_header">
        <div class="element_menu">
            <div class="horizontal_list" id="menuList">
                <p><a href="#about">О нас</a></p>
                <p><a href="#purpose">Разделы курса</a></p>
                <p><a href="#aftor">Об авторе курса</a></p>
            </div>
            <button class="menu-button" onclick="toggleMenu()">☰</button> <!-- Кнопка для мобильной версии -->
        </div>
        <div class="btm_go_to_course">
            <a href="reg.php">Оплатить курс</a>
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
