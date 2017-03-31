$(document).ready(function () {
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        autoplay: 2500,
        effect: 'fade',
        paginationBulletRender: function (swiper, index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
        }
    });
});

