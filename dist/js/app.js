var $window = $(window);
var $section = $('section');
var $navItem = $('.navigation a');

function updateNavigation() {
  $section.toArray().forEach(function (el) {
    var $el = $(el);
    var activeSection = $('.navigation a[href="#' + $el.attr('id') + '"]').data('number') - 1;
    var isActive = $el.offset().top - $window.height() / 2 < $window.scrollTop() && $el.offset().top + $el.height() - $window.height() / 2 > $window.scrollTop() ? 'active' : '';
    $navItem.eq(activeSection).removeClass('active').addClass(isActive);
  });
}

function smoothScroll(target) {
  $('body, html').animate({ 'scrollTop': target.offset().top }, 600);
}

updateNavigation();

$window.scroll(function () {
  updateNavigation();
});

$navItem.on('click', function (e) {
  e.preventDefault();
  smoothScroll($(e.currentTarget.hash));
});


