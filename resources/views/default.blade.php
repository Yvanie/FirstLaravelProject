
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <div class="nav">
        <a class="logo" href="#">
            <img class="logo" src="img/logo.png" alt="Yvanie logo">
        </a>
        <div class="navbar-toggler" type="button" id="bar">
            <span class="toggle-icon"></span>
            <span class="toggle-icon"></span>
            <span class="toggle-icon"></span>
        </div>
        <div class="menu-bar" id="navbar">
            <ul class="menu-items">
                <li><a href="/home">Home</a></li>
                <li><a href="/service">Services</a></li>
                <li><a href="/pricing">Pricing</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/users">User List</a></li>
            </ul>
        </div>
        <div class="navbar-social">
            <span>Follow us</span>
            <ul>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
   @yield('home')
</header>

<section class="container" id="container">

@yield('content')


</section>
<footer>
    <div class="row1">
        <a class="logo" href="#">
            <img class="logo" src="img/logo.png" alt="Yvanie logo">
        </a>
            <ul>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
    </div>
    <div class="row2">
        <div class="first-row">
            <h6 class="footer-title">Company</h6>
            <ul>
                <li><a href="#About">About</a></li>
                <li><a href="#About">Contact</a></li>
                <li><a href="#About">Serices</a></li>
            </ul>
        </div>
        <div class="first-row">
            <h6 class="footer-title">Product & Services</h6>
            <ul>
                <li><a href="#About">Product</a></li>
                <li><a href="#About">business</a></li>
                <li><a href="#About">Developper</a></li>
            </ul>
        </div>
        <div class="first-row">
            <h6 class="footer-title">Help and support</h6>
            <ul>
                <li><a href="#About">Product</a></li>
                <li><a href="#About">business</a></li>
                <li><a href="#About">Developper</a></li>
            </ul>
        </div>
        <div class="first-row">
            <h6 class="footer-title">Subscribe Newsletter</h6>
            <div class="newletter">
                <input type="text" name="Nletter" placeholder="Your mail">
                <button type="submit"><i class="fa fa-angle-double-right"></i></button>
            </div>
            <p class="text">Subscribe to our newsletter to be aware of any modification done</p>
        </div>
    </div>
</footer>
<div class="copyright">
    <p>template created by <a href="#">Yvanie Noelle</a> contact me via <a href="mail:nwouatouyvanienoelle@gmail.com"></a></p>
</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
