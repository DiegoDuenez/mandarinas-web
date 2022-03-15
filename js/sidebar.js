/*
*
* @JS (Sidebar)
*
*/

$(function () {

    $(".btnAbrir").click(function () {
        $("#sidebar").addClass('open')
        $('body').css('overflow-y','hidden')
    })

    $(".btnCerrar").click(function () {
        $("#sidebar").removeClass('open')
        $('body').css('overflow-y','scroll')

    })

    $(".sidebar__link").click(function(){
        $("#sidebar").removeClass('open')
        $('body').css('overflow-y','scroll')
    })

})