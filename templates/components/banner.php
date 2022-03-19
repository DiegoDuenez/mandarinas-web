<?php
    $archivo = basename($_SERVER['PHP_SELF']);
   /* $texto = "hola";
    $numero = "871-718-1111";
    if($archivo == 'index.php') {
        $texto == "> OFRECEMOS UNA VARIEDAD DE SERVICIOS CON DIFERENTES CATEGORiAS Y PRECIOS";
    }
    elseif($archivo == 'taxis.php'){
        $texto = "> SERVICIO LAS 24 HORAS DEL DIA LOS 365 DÍAS DEL AÑO";
    }
    elseif($archivo == "gruas.php"){
        $texto = "> GRÚAS DE PLATAFORMA PARA CUIDAR AL MÁXIMO TU VEHÍCULO";
        $numero = "871-718-1010";
    }
    elseif($archivo == "camionetas.php"){
        $texto = "> LA FORMA MÁS PRÁCTICA Y ECONÓMICA DE TRANSPORTAR LO QUE NECESITES";
    }*/

?>
<?php if($archivo == 'index.php'): ?>
<div class="banner">
<?php elseif($archivo == 'taxis.php'): ?>
<div class="banner__bg-taxis">
<?php elseif($archivo == 'gruas.php'): ?>
<div class="banner__bg-gruas">
<?php elseif($archivo == 'camionetas.php'): ?>
<div class="banner__bg-camionetas">
<?php endif; ?>
    <div class="banner__mask">
        <?php if($archivo == 'index.php'): ?>
            <div class="banner__content  banner__content--p3">
                <h1 class="banner__title" data-aos="fade-up">> OFRECEMOS UNA VARIEDAD DE SERVICIOS CON DIFERENTES CATEGORÍAS Y PRECIOS</h1>
                <h2 class="banner__title" data-aos="fade-down">871-718-1111</h2>
            </div>  
            <div class="banner__content banner__content--row mb5">
                <a href="#servicios" class="banner__link" id="textoMovil" data-aos="fade-up">VER SERVICIOS</a>
                <a href="taxis.php" class="banner__link" data-aos="fade-up">TAXIS</a>
                <a href="gruas.php" class="banner__link" data-aos="fade-up">GRUAS</a>
                <a href="camionetas.php" class="banner__link" data-aos="fade-up">CAMIONETAS</a>
            </div>  
        <?php elseif($archivo == 'taxis.php'): ?>
            <div class="banner__content banner__content--p3 ">
                <h1 class="banner__title" data-aos="fade-up">> SERVICIO LAS 24 HORAS DEL DIA LOS 365 DÍAS DEL AÑO</h1>
                <h2 class="banner__title" data-aos="fade-down">871-718-1111</h2>
            </div>  
            <div class="banner__content banner__content--row mb5">
                <a href="#taxis" class="banner__link textoMovil" data-aos="fade-up" >TAXIS</a>
                <a href="#mandarinasplus" class="banner__link textoMovil" data-aos="fade-up">MANDARINAS PLUS</a>
            </div>  
        <?php elseif($archivo == 'gruas.php'): ?>
            <div class="banner__content banner__content--p3">
                <h1 class="banner__title" data-aos="fade-up">> GRÚAS DE PLATAFORMA PARA CUIDAR AL MÁXIMO TU VEHÍCULO</h1>
                <h2 class="banner__title" data-aos="fade-down">871-718-1010</h2>
            </div>  
            <div class="banner__content banner__content--row mb5">
                <a href="#gruas" class="banner__link textoMovil" data-aos="fade-up">GRÚAS</a>
            </div>  
        <?php elseif($archivo == 'camionetas.php'): ?>
            <div class="banner__content banner__content--p3 ">
                <h1 class="banner__title" data-aos="fade-up">> LA FORMA MÁS PRÁCTICA Y ECONÓMICA DE TRANSPORTAR LO QUE NECESITES</h1>
                <h2 class="banner__title" data-aos="fade-down">871-718-1111</h2>
            </div>  
            <div class="banner__content banner__content--row mb5">
                <a href="#camionetas" class="banner__link textoMovil"  data-aos="fade-up">CAMIONETAS</a>
            </div>  
        <?php endif; ?>
    </div>
</div>

<!--
<div class="banner">
    <div class="banner__mask">
    <?php if($archivo == 'index.php'): ?>
        <h1 class="banner__title bottom20 " data-aos="fade-up">> OFRECEMOS UNA VARIEDAD DE SERVICIOS CON DIFERENTES CATEGORÍAS Y PRECIOS.</h1>
        <h2 class="banner__title bottom10 " data-aos="fade-down">871-718-1111</h2>
        <div class="banner__links bottom8">
            <a href="#servicios" class="banner__text" data-aos="fade-up" data-aos-delay="200" id="textoInicial">VER <br> SERVICIOS</a>
            <a href="taxis.php" class="banner__text" data-aos="fade-up" data-aos-delay="200">TAXIS</a>
            <a href="gruas.php" class="banner__text" data-aos="fade-up" data-aos-delay="500">GRÚAS</a>
            <a href="camionetas.php" class="banner__text" data-aos="fade-up" data-aos-delay="1000">CAMIONETAS</a>
        </div>
    <?php elseif($archivo == 'taxis.php'): ?>
        <h1 class="banner__title bottom20 " data-aos="fade-up">> SERVICIO LAS 24 HORAS DEL DIA LOS 365 DÍAS DEL AÑO.</h1>
        <h2 class="banner__title bottom10 " data-aos="fade-down">871-718-1111</h2>
        <div class="banner__links bottom8">
            <a href="#taxis" class="banner__text banner__text-visible" data-aos="fade-up" data-aos-delay="200">TAXIS</a>
            <a href="#mandarinasplus" class="banner__text banner__text-visible" data-aos="fade-up" data-aos-delay="500">MANDARINAS PLUS</a>
        </div>
    <?php elseif($archivo == 'gruas.php'): ?>
        <h1 class="banner__title bottom20 " data-aos="fade-up">> GRÚAS DE PLATAFORMA PARA CUIDAR AL MÁXIMO TU VEHÍCULO.</h1>
        <h2 class="banner__title bottom10 " data-aos="fade-down">871-718-1010</h2>
        <div class="banner__links bottom8">
            <a href="#gruas" class="banner__text banner__text-visible" data-aos="fade-up" data-aos-delay="200">GRÚAS</a>
        </div>
    <?php elseif($archivo == 'camionetas.php'): ?>
        <h1 class="banner__title bottom20 " data-aos="fade-up">> LA FORMA MÁS PRÁCTICA Y ECONÓMICA DE TRANSPORTAR LO QUE NECESITES.</h1>
        <h2 class="banner__title bottom10 " data-aos="fade-down">871-718-1111</h2>
        <div class="banner__links bottom8">
            <a href="#camionetas" class="banner__text banner__text-visible" data-aos="fade-up" data-aos-delay="200">CAMIONETAS</a>
        </div>
    <?php endif; ?>

    </div>
    <?php if($archivo == 'index.php'): ?>
        <img src="resources/banner.jpg" alt="Taxi" class="banner__image" loading="lazy">
    <?php elseif($archivo == 'taxis.php'): ?>
        <img src="resources/taxibanner.jpg" alt="Taxi" class="banner__image" loading="lazy">
    <?php elseif($archivo == 'gruas.php'): ?>
        <img src="resources/gruabanner.jpg" alt="Taxi" class="banner__image" loading="lazy">
    <?php elseif($archivo == 'camionetas.php'): ?>
        <img src="resources/pickupbanner.jpg" alt="Taxi" class="banner__image" loading="lazy">
    <?php endif; ?>

</div>
    -->



<!--<div class="wrapper">
            <p>Ofrecemos servicios como</p>
            <div class="words">
                <span>Taxis</span>
                <span>Grúas</span>
                <span>CAMIONETAS</span>
            </div>
        </div>-->