<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <head>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="login.php">My Drive</a>

                <div class="navbar-nav">
                    <a class="nav-link active" href="login.php">
                        <span>
                            <i class="bi bi-person-add"></i>
                        </span>
                        Log in
                    </a>

                    <a class="nav-link" href="#"></span>
                        <span>
                            <i class="bi bi-box-arrow-in-right"></i>
                        </span>
                        Sign up
                    </a>
                <div>
                
            </div>
        </nav>
    </head>

    <body>

        <div class="container min-vh-100 d-flex justify-content-center align-items-right">
            <form action="login-verification.php" method="POST">
                <div class="form-group">
                    <label for="user-name">Username: </label>
                    <input type="text" class="form-control" id="user-name" name="user-name" required/>
                </div>

                <div class="form-group">
                    <label for="user-password">Password: </label>
                    <input type="password" class="form-control" id="user-password" name="user-password" required/>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-default" name="login-form-submit">Submit</button>
                </div>
            </form>
            
        </div>

    </body>

</html>