$('#logout-button').on('click', function(e) {
    e.preventDefault();
    $('#logout-form').submit();
});

import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


