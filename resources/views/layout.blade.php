<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Greeting</title>        
        <!-- Icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>
         @yield('content-of-landing-page')
         @yield('products-page-grid')
         @yield('product-page-content')
         @yield('cart-page-contents')
        
        <footer class="ft">
            <div class="footer-content container">
                <div class="made-with">
                    <ul>
                        <li><a href="#"><i class="fa fa-globe"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul> 
                    Powered by HP Evolution <br> <span style="color:#999999; font-size: 14px">Any question? <a style="color:#999999;" href="#" >Contact Us</a></span> 
                    
                </div>
                <div class="copyright">
                    &copy; Untitled. Design: name, 2020
                </div>              
            </div> <!-- end of footer-content -->

        </footer>

        
		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

        
    </body>
</html>
