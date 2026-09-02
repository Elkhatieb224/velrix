export function initAccordion() {
    const items = document.querySelectorAll('.faq__item');

    items.forEach((item) => {
        const header = item.querySelector('.faq__header');
        if (!header) return;

        header.addEventListener('click', () => {
            if (!item.querySelector('.faq__body')) return;

            const isOpen = item.classList.contains('faq__item--open');

            items.forEach((other) => {
                other.classList.remove('faq__item--open');
                const otherHeader = other.querySelector('.faq__header');
                if (otherHeader) {
                    otherHeader.setAttribute('aria-expanded', 'false');
                }
            });

            if (!isOpen) {
                item.classList.add('faq__item--open');
                header.setAttribute('aria-expanded', 'true');
            }
        });
    });
}
