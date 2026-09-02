export function initNavbar() {
    const toggle = document.querySelector('.mobile-menu-toggle');
    const menu = document.querySelector('.mobile-menu');
    const backdrop = document.querySelector('.mobile-menu-backdrop');
    const links = document.querySelectorAll('.mobile-menu__link, .mobile-menu__cta');

    if (!toggle || !menu) return;

    const setOpen = (open) => {
        toggle.classList.toggle('mobile-menu-toggle--open', open);
        menu.classList.toggle('mobile-menu--open', open);
        backdrop?.classList.toggle('mobile-menu-backdrop--open', open);
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        menu.setAttribute('aria-hidden', open ? 'false' : 'true');
        backdrop?.setAttribute('aria-hidden', open ? 'false' : 'true');
        document.body.classList.toggle('mobile-menu-open', open);
    };

    toggle.addEventListener('click', () => {
        setOpen(!menu.classList.contains('mobile-menu--open'));
    });

    backdrop?.addEventListener('click', () => setOpen(false));

    links.forEach((link) => {
        link.addEventListener('click', () => setOpen(false));
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && menu.classList.contains('mobile-menu--open')) {
            setOpen(false);
        }
    });
}
