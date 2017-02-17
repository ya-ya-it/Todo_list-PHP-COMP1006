<?php ob_start();
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <link rel="stylesheet" href="./Scripts/lib/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./Scripts/lib/bootstrap/dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="./Scripts/lib/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="./Content/app.css">

    </head>
    <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Todos</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="./Content/about_us.html">About us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log in </a></li>
            </ul>
        </div>
    </nav>

    <div class="loginForm">
        <form method="post" action="processLogin.php">
            <fieldset class="form-group">
                <label for="usernameTextField" class="col-lg-2">Username</label>
                <input type="text" id="usernameTextField" name="usernameTextField"
                       placeholder="Username" required>
            </fieldset>
            <fieldset class="form-group">
                <label for="password" class="col-lg-2">Password</label>
                <input type="password" id="password" name="password" required>
            </fieldset>
            <button id="LoginButton" class="btn btn-primary col-sm-offset-5">Login</button>
        </form>
    </div>
    <!-- JavaScript Section -->
    <script src="./Scripts/lib/jquery/dist/jquery.min.js"></script>
    <script src="./Scripts/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./Scripts/app.js"></script>

    </body>
    </html>


<?php ob_flush(); ?>