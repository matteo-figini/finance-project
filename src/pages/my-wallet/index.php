<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <title>La mia borsa - Finance Project</title>
        <?php include '../../partials/head-section.php'; ?>
    </head>
    <body>
        <div> <?php include '../../partials/top-container.php'; ?> </div>
        <div> <?php include '../../partials/sidebar-menu.php'; ?> </div>
        <div class="w3-overlay w3-hide-large w3-animate-opacity" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
        <div class="w3-main" style="margin-left:300px; margin-top:43px; margin-bottom:70px;">
            <div class="w3-container">
                <?php
                require_once('../../assets/backend/db-connection.php');

                if ($_POST) {
                    // Utente loggato
                }
                else {
                    // Utente non loggato
                    ?>
                    <header class="w3-container" style="padding-top:22px">
                        <h5>Area riservata</h5>
                    </header>
                    <div class="w3-container w3-row-padding w3-margin-bottom">
                        <form class="loginform" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                            <label>Username:&NonBreakingSpace;&NonBreakingSpace;</label>
                            <input type="text" name="username" placeholder="Username"><br><br>
                            <label>Password:&NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;</label>
                            <input type="password" name="password"><br><br>
                            <input class="w3-blue w3-button" type="submit" name="loginbutton" value="Accedi">
                        </form>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div> <?php include '../../partials/footer.php'; ?> </div>
        </div>
    </body>
</html>
