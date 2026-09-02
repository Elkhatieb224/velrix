import AOS from 'aos';
import { initNavbar } from './modules/navbar';
import { initAccordion } from './modules/accordion';
import { initServicesSlider } from './modules/services-slider';
import { initContactForm } from './modules/contact-form';
import { initCounter } from './modules/counter';

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 80,
    });

    initNavbar();
    initAccordion();
    initServicesSlider();
    initContactForm();
    initCounter();
});
