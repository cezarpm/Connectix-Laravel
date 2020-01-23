const searchIcon = $('.nav-icon');
const navInput = $('#nav-input');

searchIcon.click(function () {
    navInput.slideToggle(300);
})

$('.carousel').carousel('pause');
