<!DOCTYPE html>
<html lang="en">
<head>
    <!--===== REQUIRED METATAGS =====-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Radio Taxis Mandarinas | Grúas</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="Radio taxis, mandarinas, taxis torreón, taxis mandarinas">
    <meta name="description" content="Grúas de Plataforma para cuidar al máximo tu vehículo.">
    <!--===== FAVICON =====-->
    <link rel="apple-touch-icon" sizes="180x180" href="resources/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources/favicon/favicon-16x16.png">
    <link rel="manifest" href="resources/favicon/site.webmanifest">
    <link rel="mask-icon" href="resources/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
     <!--===== FONTAWESOME ICONS =====-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--====== AOS CSS ======-->
    <link rel="stylesheet" href="libs/aos/dist/aos.css">
    <!--====== MAIN CSS ======-->
    <link rel="stylesheet" href="css/settings/normalize.css">
    <link rel="stylesheet" href="css/settings/root.css">
    <link rel="stylesheet" href="css/index.css">
    <!--====== GOOGLE RECAPTCHA ======-->
    <script src="https://www.google.com/recaptcha/api.js"></script>

</head>
<body>

    <!--=== NAVBAR START ===-->
    <?php include('templates/components/navbar.php') ?>
    <!--=== NAVBAR END===-->

    <!--=== SIDEBAR START ===-->
    <?php include('templates/components/sidebar.php') ?>
    <!--=== SIDEBAR END===-->

    <!--=== BANNER START ===-->
    <?php include('templates/components/banner.php') ?>
    <!--=== BANNER END===-->

    <!--=== GRUAS START ===-->
    <?php include('templates/layouts/servicios/gruas.html'); ?>
    <!--=== GRUAS END===-->

    <!--=== CONTACTO START ===-->
    <?php include('templates/layouts/contacto.html'); ?>
    <!--=== CONTACTO END===-->

    <!--=== FOOTER START ===-->
    <?php include('templates/components/footer.html') ?>
    <!--=== FOOTER END===-->
    
    <!--=== JQUERY ===-->
    <script src="libs/jquery/jquery,min.js"></script>
    <!--=== AOS JS ===-->
    <script src="libs/aos/dist/aos.js"></script>
    <!--=== SWEETALERT2 ===-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>
    <!--=== MAIN JS ===-->
    <script src="js/index.js"></script>
    <script src="js/sidebar.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/mail.js"></script>


</body>
</html>