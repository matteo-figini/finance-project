<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Home - Finance Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Inclusione dei file di scripting -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="../../assets/js/app.js"></script>
        <script src="../../assets/js/w3.js"></script>
        <!-- Inclusione dei fogli di stile -->
        <link rel="stylesheet" href="../../assets/css/w3.css">
        <link rel="stylesheet" href="../../assets/css/app.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
        <div> <?php include '../../partials/top-container.php'; ?> </div>
        <div> <?php include '../../partials/sidebar-menu.php'; ?> </div>
        <div class="w3-overlay w3-hide-large w3-animate-opacity" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
        <div class="w3-main" style="margin-left:300px;margin-top:43px;">
            <div> <?php include '../../partials/search-stock.php' ?></div>
            <div> <?php include '../../partials/footer.php'; ?> </div>
        </div>
    </body>
</html>
