// ИКОНКИ
window.addEventListener('scroll', function() {
    const container = document.querySelector('.container_icons');
    const containerPosition = container.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.2; // Позиция экрана для активации анимации

    // Если контейнер иконок попадает в область видимости
    if (containerPosition < screenPosition) {
        container.classList.add('visible');
    } else {
        container.classList.remove('visible');
    }
});

// О НАС
window.addEventListener('scroll', function() {
    const aboutSection = document.querySelector('.container_about');
    const sectionPosition = aboutSection.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.2; // Позиция экрана для активации анимации

    // Если секция "О нас" попадает в область видимости
    if (sectionPosition < screenPosition) {
        aboutSection.classList.add('visible');
    } else {
        aboutSection.classList.remove('visible');
    }
});



window.addEventListener('scroll', function() {
    const purposeSection = document.querySelector('.container_purpose');
    const bloksSection = document.querySelector('.bloks');
    
    const sectionPosition = purposeSection.getBoundingClientRect().top;
    const bloksPosition = bloksSection.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.2; // Измените значение для настройки

    // Анимация для основной секции
    if (sectionPosition < screenPosition) {
        purposeSection.classList.add('visible');
    } else {
        purposeSection.classList.remove('visible');
    }

    // Анимация для блока .bloks
    if (bloksPosition < screenPosition) {
        bloksSection.classList.add('visible');
        
        // Анимация для каждого модуля
        const modules = bloksSection.querySelectorAll('.moduls');
        modules.forEach((module, index) => {
            setTimeout(() => {
                module.classList.add('visible');
            }, index * 200); // Задержка для каждого модуля
        });
    } else {
        bloksSection.classList.remove('visible');
        
        // Удаляем класс видимости у модулей, если они не в области видимости
        const modules = bloksSection.querySelectorAll('.moduls');
        modules.forEach(module => {
            module.classList.remove('visible');
        });
    }
});

window.addEventListener('scroll', function() {
    const callMeSection = document.querySelector('.container_all_call_me');
    
    const sectionPosition = callMeSection.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.2; // Измените значение для настройки

    // Анимация для блока .container_all_call_me
    if (sectionPosition < screenPosition) {
        callMeSection.classList.add('visible');
    } else {
        callMeSection.classList.remove('visible');
    }
});

AOS.init({
  duration: 1600, // продолжительность анимации
  delay: 100, // задержка перед началом анимации
  easing: 'zoom-in', // тип анимации
});
