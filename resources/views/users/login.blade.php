<!DOCTYPE html>
<html>
<head>
	<title>Britishonline9</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="" sizes="180x180" href="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/user/style.css') }}">
</head>
<body class="body">
    <div class="cont">
        <div class="form sign-in">
        <h2>Sign In</h2>
        <label>
            <span>Contact Number</span>
            <input type="email" name="text">
        </label>
        <label>
            <span>Password</span>
            <input type="password" name="password">
        </label>
        <button class="submit" type="button">Sign In</button>
        <p class="forgot-pass">Contact with social media</p>

        <div class="social-media">
            <ul>
            <li><a href=""><img src="{{ asset('images/whatsapp.png.crdownload') }}"></li></a>
            <li><a href="https://www.instagram.com/britishonline9/"><img src="{{ asset('images/instagram.png') }}"></li></a>
            <li><a href="https://t.me/britishonline999"><img src="{{ asset('images/telegram.png.crdownload') }}"></li></a>
            <li><a href="https://m.facebook.com/Britishonline9-101040395193843/posts"><img src="{{ asset('images/facebook.png') }}"></li></a>
            </ul>
        </div>
        </div>

        <div class="sub-cont">
        <div class="img">
            <div class="img-text m-up">
            <a href="./index.html">
            <img src="{{ asset('images/logo.png') }}" alt=""></a>
            <h2>New here?</h2>
            <p>Sign up and discover great amount of new opportunities!</p>
            </div>
            <div class="img-text m-in">
            <a href="./index.html">
                <img src="{{ asset('images/logo.png') }}" alt=""></a>
            <h2>One of us?</h2>
            <p>If you already has an account, just sign in. We've missed you!</p>
            </div>
            <div class="img-btn">
                <span class="m-up">Sign Up</span>
                <span class="m-in">Sign In</span>
            </div>
        </div>
        <div class="form sign-up">
            <h2>Sign Up</h2>
            <label>
                <span>Name</span>
                <input type="text">
            </label>
            <label>
                <span>Contact Number</span>
                <input type="text">
            </label>
            <label>
                <span>Password</span>
                <input type="password">
            </label>
            <label>
                <span>Confirm Password</span>
                <input type="password">
            </label>
            <button type="button" class="submit">Sign Up Now</button>
        </div>
        </div>
    </div>
    <script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script>
        $(document).ready(function(){
            document.querySelector('.img-btn').addEventListener('click', function()
            {
                document.querySelector('.cont').classList.toggle('s-signup')
            });
        });
    </script>
</body>
</html>