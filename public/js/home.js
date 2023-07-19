/**
 * navbar appearing
 */

window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');
    var scrolledClass = 'navbar-scrolled';

    if (window.pageYOffset > 50) {
        navbar.classList.add(scrolledClass);
    } else {
        navbar.classList.remove(scrolledClass);
    }
});

/**
 * type effect
 */

const typed = document.querySelector('.homeText');
if (typed) {
    let typed_strings = typed.getAttribute('data-typed-items');
    typed_strings = typed_strings.split(',');
    new Typed('.homeText', {
        strings: typed_strings,
        loop: true,
        typeSpeed: 100,
        backSpeed: 50,
        backDelay: 2000
    });
}
