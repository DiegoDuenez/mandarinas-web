/*
*
* @JS (Index)
*
*/

$(document).ready(function(){
    AOS.init()
    repetir('#parent',60)
})

    /*var $banner = $('.banner__links');
    var url=location.href;
    var urlFilename = url.substring(url.lastIndexOf('/')+1);
    console.log(url)
    console.log(urlFilename)


    if (screen.width <= 1000) 
    {
        if(urlFilename === 'taxis.php' || urlFilename === "gruas.php" || urlFilename === "camionetas.php"){
            alert("laaa")
            $banner.addClass('banner__links--no-top') 
        }
    }
    else $banner.removeClass('banner__links--no-top');*/


if(screen.width <= 1369){
    $("#circuloPideTaxi").removeAttr("data-aos-delay").removeAttr("data-aos-once");;
    $("#circuloRastreaTaxi").removeAttr("data-aos-delay").removeAttr("data-aos-once");;
    $("#circuloViaja").removeAttr("data-aos-delay").removeAttr("data-aos-once");;
    $("#circuloTicket").removeAttr("data-aos-delay").removeAttr("data-aos-once");;
    $("#circuloEvalua").removeAttr("data-aos-delay").removeAttr("data-aos-once");
}

function getPlatform() {
    var platform = ["Win32", "Android", "iOS"];
 
    for (var i = 0; i < platform.length; i++) {
 
        if (navigator.platform.indexOf(platform[i]) >- 1) {
 
            return platform[i];
        }
    }
}
 
if(getPlatform()=="Win32" || getPlatform()=="Android"){
    $("#appPasajero").click(function(){
        window.open('https://play.google.com/store/apps/details?id=com.mandarinasplus.passenger&hl=en_US&gl=US', '_blank');
    })
    $("#appConductor").click(function(){
        window.open('https://play.google.com/store/apps/details?id=com.mandarinasplus.driver&hl=en_US&gl=US', '_blank');
    })
}
else if(getPlatform()=="iOS"){
    $("#appPasajero").click(function(){
        window.open('https://apps.apple.com/mx/app/mandarinas-plus-pasajero/id1468053369', '_blank');
    })
    $("#appConductor").click(function(){
        window.open('https://apps.apple.com/mx/app/mandarinas-plus-conductor/id1468051790', '_blank');
    })
}


function repetir(parent,count){
    parent = $(parent);
    delay = 0
    for(i = 0;i<count;i++)
    {
        delay += 50
        $(parent).append(`
        <div class="servicios__card-line" data-aos="zoom-in"  data-aos-duration="500" data-aos-once="true" data-aos-delay="${delay}"></div>`)
    }
}