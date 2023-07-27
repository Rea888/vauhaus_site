/**
 * navbar scrolling
 */

document.getElementById("toggler").addEventListener("change", function(){
    if(this.checked){
        document.body.classList.add("no-scroll");
    }else{
        document.body.classList.remove("no-scroll");
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
