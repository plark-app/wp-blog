(function() {
    var button = document.querySelector('button.menu-toggle[aria-controls="primary-menu"]');

    var menu = document.querySelector('#primary-menu.menu');
    var menuStatus = Boolean(menu.getAttribute('aria-expanded'));
    var mainNavigation = document.getElementById('site-navigation');

    var toggleMenuButton = document.querySelector('.menu-toggle[aria-controls="primary-menu"]');

    // if (!button) {
        //     return;
        // }

    button.addEventListener('click', function() {
        if (menuStatus) {
            menu.setAttribute('aria-expanded', false)
            toggleMenuButton.classList.remove('is-open');
            mainNavigation.classList.remove('expanded');
            menuStatus = false
        } else {
            menu.setAttribute('aria-expanded', true);
            mainNavigation.classList.add('expanded');
            toggleMenuButton.classList.add('is-open');
            menuStatus = true
        }
    })

    window.addEventListener('load', function () {
        if (window.innerWidth >= 768) {
            menu.setAttribute('aria-expanded', true)
        }
    })


    var header = document.getElementById('masthead');

    if (header) {
        window.addEventListener('scroll', function() {
            if(window.scrollY > 200) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        })
    }
})();