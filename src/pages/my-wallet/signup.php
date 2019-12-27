<?php
$error = "";
require_once("../../assets/backend/db-connection.php");

$db_conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = hash("sha512", $db_conn->real_escape_string($_POST["password"]));
    $username = $db_conn->real_escape_string($_POST["username"]);
    $email = $db_conn->real_escape_string($_POST["email"]);
    $sql = "INSERT INTO Utenti (Email, Username, Password) VALUES ('$email', '$username', '$password')";
    if ($db_conn->query($sql) === TRUE) {
        header("location: index.php");
    }
    else {
        $error = "Registrazione fallita. Riprova...";
    }
}
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
                    <h5>Registrati</h5>
                </header>
                <div class="w3-container w3-row-padding w3-margin-bottom">
                    <form action="" method="post">
                        <label>E-mail: </label><br>
                        <input type="email" name="email"><br><br>
                        <label>Username: </label><br>
                        <input type="text" name="username" placeholder="Il tuo username"><br><br>
                        <label>Password: </label><br>
                        <input type="password" name="password"><br><br>
                        <input class="w3-btn w3-blue" type="submit" name="login" value="Registrati"><br><br>
                    </form>
                    <div style="font-size: 11px; color: #cc0000; margin-top: 10px"><?php echo $error; ?></div>
                </div>
            </div>
            <div> <?php include '../../partials/footer.php'; ?> </div>
         </div>
     </body>
</html>
