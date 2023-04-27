<html>

    <meta name="viewport" content="width=decive-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/get-started.css">
    <link rel="stylesheet" href="../Styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <head>

        <div class="header">
            <h1>LoL Drive</h1>

            <div class="login-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
            </svg>
                <a href="register.php" id="login-header-text-a">Register</a>

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
                <a href="login.php" id="login-header-text-b">Login</a>
            </div>
        </div>

    </head>

    <body>

        <div class="get-started-banner">
            <div class="banner-header">
                <h2 id="banner-header">WELCOME TO SUMMONERS RIFT!</h2>
                <h4 id="banner-sub-header">Just kidding.. This is the League of Legends class drive.</h4>

                <div class="banner-pic">
                    <img id="lux-banner" src="../Pics/love-lots.png"></img>
                </div>
                <div class="get-started">
                    <div class="get-started-button">
                        <a href="get-started.php" id="get-started-button">GET STARTED</a>
                    </div>
                </div>
            </div>

        </div> 

        <div class="get-started-content-1">
            <div id="banner-content-1">
                <h2 id="banner-header-content-1">A FILE STORAGE THAT WILL KEEP YOU AS HAPPY AS LUX!</h2>
                <h4 id="banner-content-1-sub-header">"I don't have dark secrets - I have bright ones."</h4>

                <div class="content-1-banner-pic">
                    <button onclick="showImageCarousel(3)" id="content-1-button"><</button>
                    <img id="content-1-banner" src="../Pics/luxed.png"></img>
                    <button onclick="showImageCarousel(2)" id="content-1-button">></button>
                </div>

            </div>

            <div id="banner-content-2">
                <h2 id="banner-header-content-1">NO EXPLOSIONS HERE!</h2>
                <h4 id="banner-content-1-sub-header">"Slogan, catchphrase, tagline!"</h4>

                <div class="content-1-banner-pic">
                    <button onclick="showImageCarousel(1)" id="content-1-button"><</button>
                    <img id="content-1-banner" src="../Pics/jinxed.png"></img>
                    <button onclick="showImageCarousel(3)" id="content-1-button">></button>
                </div>

            </div>

            <div id="banner-content-3">
                <h2 id="banner-header-content-1">INCREDIBLE CONTROL OVER THEIR ASSIGNMENTS!</h2>
                <h4 id="banner-content-1-sub-header">“No one will stand in my way.”</h4>

                <div class="content-1-banner-pic">
                    <button onclick="showImageCarousel(2)" id="content-1-button"><</button>
                    <img id="content-1-banner" src="../Pics/ahried.png"></img>
                    <button onclick="showImageCarousel(1)" id="content-1-button">></button>
                </div>

            </div>

        </div> 

        <script src="../Javascript/get-started.js"></script>
    </body>

</html>