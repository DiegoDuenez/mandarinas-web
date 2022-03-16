<?php
    $archivo = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar">
    <div class="navbar__logo" data-aos="fade-right">
       <a href="./"><img src="resources/svg/logo.svg" alt="Mandarinas" title="Radio Taxis Mandarinas" class="navbar__image"></a>
    </div>
    <?php if($archivo == 'index.php'): ?>
        <div class="navbar__links" data-aos="fade-left">
            <a href="#" class="navbar__link">INICIO</a>
            <a href="#nosotros" class="navbar__link">NOSOTROS</a>
            <a href="#servicios" class="navbar__link">SERVICIOS</a>
            <a href="#app" class="navbar__link">APP</a>
            <a href="#contacto" class="navbar__link">CONTACTO</a>
            <a href="https://www.facebook.com/Mandarinas/" target="blank"><i class="fa-brands fa-facebook navbar__icon"></i></a>
            <a class="navbar__menu btnAbrir" ><img src="resources/menu.png" alt="menu"></a>
        </div>
    <?php elseif($archivo == 'taxis.php'): ?>
        <div class="navbar__links" data-aos="fade-left">
            <a href="#" class="navbar__link">INICIO</a>
            <a href="#taxis" class="navbar__link">TAXIS</a>
            <a href="#empresarial" class="navbar__link">EMPRESARIAL</a>
            <a href="#mandarinasplus" class="navbar__link">MANDARINAS PLUS</a>
            <a href="#contacto" class="navbar__link">CONTACTO</a>
            <a href="https://www.facebook.com/Mandarinas/" target="blank"><i class="fa-brands fa-facebook navbar__icon"></i></a>
            <a class="navbar__menu btnAbrir" ><img src="resources/menu.png" alt="menu"></a>
        </div>
    <?php elseif($archivo == 'gruas.php'): ?>
        <div class="navbar__links" data-aos="fade-left">
            <a href="#" class="navbar__link">INICIO</a>
            <a href="#gruas" class="navbar__link">GRUAS</a>
            <a href="#contacto" class="navbar__link">CONTACTO</a>
            <a href="https://www.facebook.com/Mandarinas/" target="blank"><i class="fa-brands fa-facebook navbar__icon"></i></a>
            <a class="navbar__menu btnAbrir" ><img src="resources/menu.png" alt="menu"></a>
        </div>
    <?php elseif($archivo == 'pickups.php'): ?>
        <div class="navbar__links" data-aos="fade-left">
            <a href="#" class="navbar__link">INICIO</a>
            <a href="#pickups" class="navbar__link">PICK UPS</a>
            <a href="#contacto" class="navbar__link">CONTACTO</a>
            <a href="https://www.facebook.com/Mandarinas/" target="blank"><i class="fa-brands fa-facebook navbar__icon"></i></a>
            <a class="navbar__menu btnAbrir" ><img src="resources/menu.png" alt="menu"></a>
        </div>    
    <?php endif; ?>
</nav>


<nav class="navbar-mini">
    <div class="navbar-mini__logo" data-aos="fade-right">
       <a href="./"><img src="resources/svg/logo.svg" alt="Mandarinas" title="Radio Taxis Mandarinas" class="navbar-mini__image"></a>
    </div>
    <div class="navbar-mini__links" data-aos="fade-left">
        <a href="#" class="navbar-mini__link">INICIO</a>
        <?php if($archivo == 'index.php'): ?>
            <a href="#nosotros" class="navbar-mini__link">NOSOTROS</a>
            <a href="#servicios" class="navbar-mini__link">SERVICIOS</a>
            <a href="#app" class="navbar-mini__link">APP</a>
        <?php elseif($archivo == 'taxis.php'): ?>
            <a href="#taxis" class="navbar-mini__link">TAXIS</a>
            <a href="#empresarial" class="navbar-mini__link">EMPRESARIAL</a>
            <a href="#mandarinasplus" class="navbar-mini__link">MANDARINAS PLUS</a>
        <?php elseif($archivo == 'gruas.php'): ?>
            <a href="#gruas" class="navbar-mini__link">GRÚAS</a>
        <?php elseif($archivo == 'pickups.php'): ?>
            <a href="#pickups" class="navbar-mini__link">PICK UPS</a>
        <?php endif; ?>

        <a href="#contacto" class="navbar-mini__link">CONTACTO</a>
        <a href="https://www.facebook.com/Mandarinas/" target="blank"><i class="fa-brands fa-facebook navbar-mini__icon"></i></a>
        <a  class="navbar-mini__menu btnAbrir"><img src="resources/menu.png" alt="menu"></a>
    </div>
</nav>


