<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goods-Management-System</title>

    <style>
        /* General Styles */
        body, html {
            height: 100%;
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(to right, #6a11cb, #2575fc); /* Gradient background */
            margin: 0;
        }

        /* Container Styling */
        .main .sign-in .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }

        /* Sign-in Content */
        .signin-content {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            padding: 50px;
            max-width: 900px;
            display: flex;
            gap: 30px;
        }

        /* Form and Image Styling */
        .signin-image img {
            border-radius: 8px;
            width: 100%;
        }

        .signin-image-link {
            color: #2575fc;
            font-weight: bold;
            display: block;
            text-align: center;
            margin-top: 15px;
            transition: color 0.3s;
        }

        .signin-image-link:hover {
            color: #6a11cb;
        }

        /* Form Title */
        .form-title {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 20px;
            color: #2575fc;
            text-align: center;
        }

        /* Input Styling */
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 25px;
            background: #f7f7f7;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #6a11cb;
            outline: none;
        }

        .form-group label i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6a11cb;
        }

        /* Button Styling */
        .form-submit {
            background: #6a11cb;
            border: none;
            color: white;
            padding: 12px;
            font-size: 16px;
            border-radius: 25px;
            transition: background-color 0.3s;
            cursor: pointer;
            width: 100%;
        }

        .form-submit:hover {
            background-color: #2575fc;
        }

        /* Social Login Styling */
        .social-login {
            text-align: center;
            margin-top: 20px;
        }

        .social-label {
            display: block;
            font-size: 16px;
            margin-bottom: 10px;
            color: #666;
        }

        .socials {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .socials li {
            list-style: none;
        }

        .socials li a {
            color: #6a11cb;
            font-size: 24px;
            transition: color 0.3s;
        }

        .socials li a:hover {
            color: #2575fc;
        }
    </style>
</head>
<body>

    <div class="main">
        <!-- Sign in Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('frontend') }}/images/signin-image.jpg" alt="sign up image"></figure>
                        <a href="{{ route('register') }}" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                        @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" required="" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required=""/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>
</html>
