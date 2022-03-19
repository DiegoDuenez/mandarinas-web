<?php
    $archivo = basename($_SERVER['PHP_SELF']);

?>


<div class="sidebar" id="sidebar">
    <div class="sidebar__content--right">
        <button class="btnCerrar"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="sidebar__content">
        <a href="#" class="sidebar__link">INICIO</a>
        <?php if($archivo == 'index.php'): ?>
            <a href="#nosotros" class="sidebar__link">NOSOTROS</a>
            <a href="#servicios" class="sidebar__link">SERVICIOS</a>
            <a href="#app" class="sidebar__link">APP</a>
        <?php elseif($archivo == 'taxis.php'): ?>
            <a href="#taxis" class="sidebar__link">TAXIS</a>
            <a href="#mandarinasplus" class="sidebar__link">MANDARINAS PLUS</a>
        <?php elseif($archivo == 'gruas.php'): ?>
            <a href="#gruas" class="sidebar__link">GRÚAS</a>
        <?php elseif($archivo == 'camionetas.php'): ?>
            <a href="#camionetas" class="sidebar__link">CAMIONETAS</a>        
        <?php endif; ?>
        <a href="#contacto" class="sidebar__link">CONTACTO</a>
        <a href="https://www.facebook.com/Mandarinas/" target="blank" class="sidebar__link">FACEBOOK</a>
        <!--<a href="index.php" class="sidebar__image">
            <img src="resources/mandarinas.png" alt="Mandarinas" title="Radio Taxis Mandarinas" >
        </a>-->
    </div>
</div>

