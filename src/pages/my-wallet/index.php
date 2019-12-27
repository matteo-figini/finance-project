<?php

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>La mia borsa - Finance Project</title>
        <?php include '../../partials/head-section.php'; ?>
    </head>
    <body>
        <div> <?php include '../../partials/top-container.php'; ?> </div>
        <div> <?php include '../../partials/sidebar-menu.php'; ?> </div>
        <div class="w3-overlay w3-hide-large w3-animate-opacity" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
        <div class="w3-main" style="margin-left:300px; margin-top:43px; margin-bottom:70px;">
            <div class="w3-container" align="left">
                <header class="w3-container" style="padding-top:22px">
                    <h5>Area personale</h5>
                </header>
                <div class="w3-container w3-row-padding w3-margin-bottom">
                    <form action="" method="post">
                        <label>Username: </label><br>
                        <input type="text" name="username" placeholder="Il tuo username" required><br><br>
                        <label>Password: </label><br>
                        <input type="password" name="password" required><br><br>
                        <input class="w3-btn w3-blue" type="submit" name="login" value="Accedi"><br><br>
                    </form>
                    <div style="font-size: 11px;">
                        <a href="signup.php">Non hai un account? Registrati</a>
                    </div>
                </div>
            </div>
            <div> <?php include '../../partials/footer.php'; ?> </div>
         </div>
     </body>
</html>
