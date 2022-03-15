/*
*
* @JS (Navbar)
*
*/

var lastScrollTop = 0
navbar = $(".navbar")
navbarMini = $(".navbar-mini")
window.addEventListener("scroll", function () {
    var scrollTop = window.pageYOffset || this.document.documentElement.scrollTop
    if (scrollTop > "500") {
        navbar.css("top", "-10em");
        navbarMini.css("top","0");
    }
    else{
        navbar.css("top", "0em");
        navbarMini.css("top","-10em");
    }
    lastScrollTop = scrollTop
})