<html>

    <meta name="viewport" content="width=decive-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/login.css">
    <link rel="stylesheet" href="../Styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <head>

        <div class="header">
            <h1 onclick="location.href='get-started.php'">LoL Drive</h1>

            <div class="login-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
            </svg>
                <a  href="account-creation.php" id="login-header-text-a">Register</a>

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
                <a href="login-board.php" id="login-header-text-b">Login</a>
            </div>
        </div>

    </head>

    <body>

        <div class=login-page-container>

            <div class="login-form">

                <div class="login-form-container">

                    <form action="login-verification.php" method="POST">
                        
                        <div id="login-header">

                            <h3>Login as Staff</h3>

                        </div>

                        <div id="login-content">

                            <div class="input-field">

                                <p>

                                    <label>Username: </label>

                                </p>

                                <p>

                                    <input type="text" id="input-field" name="user-name" size="35" required/>

                                </p>

                                <p>

                                    <label for="user-password">Password: </label>

                                </p>

                                <p>

                                    <input type="password" id="input-field" name="user-password" size="35" required/>

                                </p>

                            </div>

                        </div>

                        <div id=submit-form-button>

                            <input type="submit" name="login-form-submit" id="login-button" value="Login"/>

                        </div>

                        <div id="login-footer">

                            Login to access your staff dashboard. </br>

                        </div>

                    </form>

                <div>
                
            </div>

        </div>

    </body>

</html>