export function initContactForm() {
    const form = document.querySelector('.contact-form');
    const textarea = form?.querySelector('textarea[name="message"]');
    const counter = form?.querySelector('.form-group__counter');

    if (textarea && counter) {
        const updateCounter = () => {
            counter.textContent = `${textarea.value.length} / 500`;
        };
        textarea.addEventListener('input', updateCounter);
        updateCounter();
    }

    form?.addEventListener('submit', (e) => {
        e.preventDefault();
    });
}
