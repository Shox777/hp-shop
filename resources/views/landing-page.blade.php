@extends('layout')
@section('content-of-landing-page')
    <!-- Header -->
    <header id="header">
        <div class="inner">
            <a href="/" class="logo"><h2>HP SHOP</h2></a>
            <nav id="nav">
                <a href=" {{route('shop.index')}} ">Shop</a>
                <a href=" {{route('shop.index')}} ">New In</a>
                <a href="#">About</a>
                <a href="#">Trending</a>
                <a href=" {{route('cart.index')}} ">Cart</a>
            </nav>
            <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        </div>
    </header>

<!-- Banner -->
    <section id="banner">
        <div class="inner">
            <header>
                <h1>HP The Next Level</h1>
            </header>

            <div class="flex ">

                <div>
                    <i style="font-size:35px"class="fa fa-laptop"></i>
                    <h3>Laptops</h3>
                    <p>View the latets versions</p>
                </div>

                <div>
                    <i style="font-size:35px"class="fa fa-mobile"></i>
                    <h3>Mobiles</h3>
                    <p>Get the right one</p>
                </div>

                <div>
                    <i style="font-size:35px"class="fa fa-bug"></i>
                    <h3>Service</h3>
                    <p>We never let you feel sad</p>
                </div>

            </div>

            <footer>
                <a href="#" class="button">Get Started</a>
            </footer>
        </div>
    </section>

    <div class="featured-section">
        <div class="container">
            <h1 class="text-center">Some Sort of Theme</h1>

            <p class="section-description">Contrary to popular belief, Lorem Ipsum 
                is not simply random text. It has roots in a piece of classical 
                Latin literature from 45 BC, making it over 2000 years old. 
                Richard McClintock, a Latin professor at Hampden-Sydney College 
                in Virginia.</p>

            <div class="text-center button-container">
                <a href="#" class="button1">Featured</a>
                <a href="#" class="button1">Selling</a>
            </div>   

        <div class="products text-center">

            @foreach ($products as $product)
            <div class="product">
                <a href="{{route('shop.show', $product->slug)}}"><img src="img/product.jpg" alt="product"></a>
                <a href="{{route('shop.show', $product->slug)}}"><div class="product-name"> {{$product->name}} </div></a>
                <div class="product-price"> {{ $product->price}} </div>
            </div>
            @endforeach
              
        </div> <!-- end of products -->

        <div class="text-center button-container">
            <a href=" {{route('shop.index')}} " class="button1">Exploere More</a>
        </div>

      </div> <!-- end of container -->
    </div> <!-- end of featured-section -->
    <div class="choose-item">
        <a href="#"> <div class="product-choose-items"><img src="../../img/gaming.jpg" width="300px" alt="">
            <h2>Gaming Choice</h2>
            <p>It is a long established fact that a reader will 
                be distracted by the readable content of a page when looking at its layout. 
                The point of using Lorem Ipsum is that it has a more-or-less normal 
                distribution of letters
            </p></div> </a>
            
        <a href="#"> <div class="product-choose-items"><img src="../../img/office.jpg" width="300px" alt="">
            <h2>Office Choice</h2>
            <p>It is a long established fact that a reader will 
                be distracted by the readable content of a page when looking at its layout. 
                The point of using Lorem Ipsum is that it has a more-or-less normal 
                distribution of letters
            </p></div> </a>
        </div> <!-- end of choose eather one -->

    <div class="blog-section">
        <div class="container">
            <h1 class="text-center"><i class="fa fa-windows"> </i> Set up Windows</h1>

            <p class="section-description">Contrary to popular belief, Lorem Ipsum 
                is not simply random text. It has roots in a piece of classical 
                Latin literature from 45 BC, making it over 2000 years old. 
                Richard McClintock, a Latin professor at Hampden-Sydney College 
                in Virginia.</p>

            <div class="blog-posts">
                <div class="blog-post">
                    <a href="#"><img src="img/windows1.png" alt=""></a>
                    <a href="#"><h2 class="blog-title">The blog post title</h2></a>
                    <div class="blog-description"> Lorem ipsum dolor sit amet 
                        consectetur adipisicing elit. Inventore nobis 
                        consequuntur sint?</div>
                </div>
                <div class="blog-post">
                    <a href="#"><img src="img/windows2.jpg" alt=""></a>
                    <a href="#"><h2 class="blog-title">The blog post title</h2></a>
                    <div class="blog-description"> Lorem ipsum dolor sit amet 
                        consectetur adipisicing elit. Inventore nobis 
                        consequuntur sint?</div>
                </div>
                <div class="blog-post">
                    <a href="#"><img src="img/windows3.jpg" alt=""></a>
                    <a href="#"><h2 class="blog-title">The blog post title</h2></a>
                    <div class="blog-description"> Lorem ipsum dolor sit amet 
                        consectetur adipisicing elit. Inventore nobis 
                        consequuntur sint?</div>
                </div>
            </div> <!-- end of blog-posts -->
        </div> <!-- end of container -->
    </div> <!-- end of blog-section -->
@endsection