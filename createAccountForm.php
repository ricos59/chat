<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chat</title>
        <meta name="description" content="Chat avec SGBD">
        <meta name="author" content="Eric Six">
        <link href="src/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="src/css/style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <h3 class="text-center">
                        Bienvenue sur le chat
                    </h3>
                    <hr>

                    <form class="accueilForm" method="post" action ="validationAccount.php">
                        <label class="meslabel">Login</label><input type ="text" name="login" required><br/>
                        <label class="meslabel">Password</label><input type ="password" name="password" required><br/>
                        <input type="submit" value="Valider">
                    </form>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
        <script src="src/js/jquery.min.js" type="text/javascript"></script>
        <script src="src/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="src/js/scripts.js" type="text/javascript"></script>
    </body>
</html>
