export function initNavbar() {
    const toggle = document.querySelector('.mobile-menu-toggle');
    const menu = document.querySelector('.mobile-menu');
    const links = document.querySelectorAll('.mobile-menu__link');

    if (!toggle || !menu) return;

    toggle.addEventListener('click', () => {
        toggle.classList.toggle('mobile-menu-toggle--open');
        menu.classList.toggle('mobile-menu--open');
        document.body.style.overflow = menu.classList.contains('mobile-menu--open') ? 'hidden' : '';
    });

    links.forEach((link) => {
        link.addEventListener('click', () => {
            toggle.classList.remove('mobile-menu-toggle--open');
            menu.classList.remove('mobile-menu--open');
            document.body.style.overflow = '';
        });
    });
}
