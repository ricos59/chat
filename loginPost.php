<?php
session_start();
require_once("includes/account.php");

if (isset($_POST["login"])) {
    $login = $_POST["login"];
    $password = $_POST["password"];
} else {
    $login = $_SESSION["login"];
    $password = $_SESSION["password"];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="javascript/jquery-3.1.1.js" type="text/javascript"></script>
        <script type="text/javascript">

            $(function () {// Exécuté une fois que tt le document est chargé.

                $('#envoi').click(function () {
                    var p = {
                        message: $("#message").val(),
                        login: "<?php echo $login; ?>"
                    };
                    $.post("includes/traitement.php", p);
                });
            });
        </script>

    </head>
    <body>

        <?php
        if (checkAccount($login, $password) == true) {
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = 'index.php?msg=erreur';
            header("Location: http://$host$uri/$extra");
        } else {
            echo "Vous êtes log in!";

            echo "Bienvenue sur le chat";
        }
        ?>



        <form method="post" >
            <div name="chat" id="chat">              
            </div>
            <label>Message</label><input type="text" name="message" id="message">
            <input type="button" id="envoi" value ="Valider">
        </form>

        <script>
            $(document).ready(function () {
                setInterval(function () {

                    $.getJSON('includes/chatMsg.php',
                            function (data) {
                                $('#chat').empty();
                                for (var i = 0; i < data.length; i++)
                                {
                                    $('#chat').append(data[i].date + "  " + data[i].login + ' dit: ' + ' Message : ' + data[i].message + '<br>');
                                }
                            });
                }, 3000);
            });
        </script>
    </body>
</html>