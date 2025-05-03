import './bootstrap';
import ujs from '@rails/ujs';
ujs.start();

// Добавляем CSRF-токен во все AJAX-запросы
// document.addEventListener('DOMContentLoaded', () => {
//     const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
//     ujs.ajaxSetup({
//         headers: {
//             'X-CSRF-Token': csrfToken
//         }
//     });
// });
