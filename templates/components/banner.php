<?php
    $archivo = basename($_SERVER['PHP_SELF']);
?>

<div class="banner">
    <div class="banner__mask">
    <?php if($archivo == 'index.php'): ?>
        <h1 class="banner__title bottom20 " data-aos="fade-up">> OFRECEMOS UNA VARIEDAD DE SERVICIOS CON DIFERENTES CATEGORÍAS Y PRECIOS.</h1>
        <h2 class="banner__title bottom10 " data-aos="fade-down">871-718-1111</h2>
        <div class="banner__links bottom8">
            <a href="taxis.php" class="banner__text" data-aos="fade-up" data-aos-delay="200">TAXIS</a>
            <a href="gruas.php" class="banner__text" data-aos="fade-up" data-aos-delay="500">GRÚAS</a>
            <a href="pickups.php" class="banner__text" data-aos="fade-up" data-aos-delay="1000">PICK UPS</a>
        </div>
    <?php elseif($archivo == 'taxis.php'): ?>
        <h1 class="banner__title bottom20 " data-aos="fade-up">> SERVICIO LAS 24 HORAS DEL DIA LOS 365 DÍAS DEL AÑO.</h1>
        <h2 class="banner__title bottom10 " data-aos="fade-down">871-718-1111</h2>
        <div class="banner__links bottom8">
            <a href="#taxis" class="banner__text" data-aos="fade-up" data-aos-delay="200">TAXIS</a>
            <a href="#empresarial" class="banner__text" data-aos="fade-up" data-aos-delay="200">EMPRESARIAL</a>
            <a href="#mandarinasplus" class="banner__text" data-aos="fade-up" data-aos-delay="500">MANDARINAS PLUS</a>
        </div>
    <?php elseif($archivo == 'gruas.php'): ?>
        <h1 class="banner__title bottom20 " data-aos="fade-up">> GRÚAS DE PLATAFORMA PARA CUIDAR AL MÁXIMO TU VEHÍCULO.</h1>
        <h2 class="banner__title bottom10 " data-aos="fade-down">871-718-1010</h2>
        <div class="banner__links bottom8">
            <a href="#taxis" class="banner__text" data-aos="fade-up" data-aos-delay="200">GRÚAS</a>
        </div>
    <?php elseif($archivo == 'pickups.php'): ?>
        <h1 class="banner__title bottom20 " data-aos="fade-up">> LA FORMA MÁS PRÁCTICA Y ECONÓMICA PARA TRANSPORTAR CUALQUIER COSA QUE NECESITES.</h1>
        <h2 class="banner__title bottom10 " data-aos="fade-down">871-718-1111</h2>
        <div class="banner__links bottom8">
            <a href="#taxis" class="banner__text" data-aos="fade-up" data-aos-delay="200">PICK UPS</a>
        </div>
    <?php endif; ?>

    </div>
    <?php if($archivo == 'index.php'): ?>
        <img src="resources/banner.jpg " alt="Taxi" class="banner__image" loading="lazy">
    <?php elseif($archivo == 'taxis.php'): ?>
        <img src="resources/servicios/banner.jpg " alt="Taxi" class="banner__image" loading="lazy">
    <?php elseif($archivo == 'gruas.php'): ?>
        <img src="resources/servicios/gruabanner.jpg " alt="Taxi" class="banner__image" loading="lazy">
    <?php elseif($archivo == 'pickups.php'): ?>
        <img src="resources/servicios/pickupbanner.jpg " alt="Taxi" class="banner__image" loading="lazy">
    <?php endif; ?>

</div>




<!--<div class="wrapper">
            <p>Ofrecemos servicios como</p>
            <div class="words">
                <span>Taxis</span>
                <span>Grúas</span>
                <span>Pick Ups</span>
            </div>
        </div>-->