<?php
    $archivo = basename($_SERVER['PHP_SELF']);
?>

<div class="navigation">

       <a href="./" ><img src="resources/svg/logo.svg" alt="Mandarinas" title="Radio Taxis Mandarinas" class="navigation__brand"></a>

      <input type="checkbox" class="navigation__checkbox" id="nav-toggle" >
      <label for="nav-toggle" class="navigation__button">
        <span class="navigation__icon" aria-label="toggle navigation menu"></span>
      </label>
      <div class="navigation__background"></div>

      <nav class="navigation__nav" role="navigation">
            <ul class="navigation__list">
                <li class="navigation__item">
                    <a href="#" class="navigation__link" >Inicio</a>
                </li>
                <?php if($archivo == 'index.php'): ?>
                    <li class="navigation__item">
                        <a href="#nosotros" class="navigation__link">Nosotros</a>
                    </li>
                    <li class="navigation__item">
                        <a href="#servicios" class="navigation__link">Servicios</a>
                    </li>
                    <li class="navigation__item">
                        <a href="#app" class="navigation__link">App</a>
                    </li>
                <?php elseif($archivo == 'taxis.php'): ?>
                    <li class="navigation__item">
                        <a href="#taxis" class="navigation__link">Taxis</a>
                    </li>
                    <li class="navigation__item">
                        <a href="#mandarinasplus" class="navigation__link">Mandarinas plus</a>
                    </li>
                <?php elseif($archivo == 'gruas.php'): ?>
                    <li class="navigation__item">
                        <a href="#gruas" class="navigation__link">Grúas</a>
                    </li>
                <?php elseif($archivo == 'camionetas.php'): ?>
                    <li class="navigation__item">
                        <a href="#camionetas" class="navigation__link">Camionetas</a>
                    </li>
                <?php endif; ?>
                <li class="navigation__item">
                    <a href="#contacto" class="navigation__link">Contacto</a>
                </li>
                    
            </ul>
        </nav>
</div>