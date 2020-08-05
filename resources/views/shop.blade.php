@extends('layout')
@section('products-page-grid')
<body class="subpage">

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
              <a href="#navPanel" class="navPanelToggle"
                ><span class="fa fa-bars"></span
              ></a>
            </div>
          </header>
          <section class="guideline-box">
               <div class="guideline">
                    <a href="/">Home <i style="color: black;font-weight:bold" class="fa fa-angle-right"></i></a> 
                    <a href=" {{route('shop.index')}} "> Shop</a>
               </div>
          </section>
          <section class="shopping-items">

               <div class="shopping-links">
                    <h4>Categories</h4>
                    <ul>
                     <li>
                          <a href="#"> Laptops </a>
                     </li>
                     <li>
                          <a href="#"> Desktops </a>
                     </li>
                     <li>
                          <a href="#"> Accessories </a>
                     </li>
                     <li>
                          <a href="#"> Mobiles </a>
                     </li>
                     <li>
                          <a href="#"> Tablets </a>
                     </li>
                     <li>
                          <a href="#"> Digital Cameras </a>
                     </li>
                </ul> <br> 
                <h4> By price </h4>
                <ul>
                     <li>
                          <a href="#"> $29 - $800 </a>
                     </li>
                     <li>
                          <a href="#"> $800 - $3500 </a>
                     </li>
                </ul>
               </div>
      
               <div style="margin-left:100px">
                    <h2 style="color:rgb(22, 8, 71); font-weight: 400; border-bottom: solid 1px rgb(22, 8, 71); width: 70px">Laptops</h2>
                    <div class="products text-center">
                         @foreach ($products as $product)
                         <div class="product">
                              <a href=" {{route('shop.show', $product->slug)}} "><img src="img/product.jpg" alt="product"></a>
                                   <a href=" {{route('shop.show', $product->slug)}} "><div class="product-name"> {{$product->name}} </div></a>
                                   <div class="product-price"> {{$product->price}} </div>
                              </div>         
                         @endforeach
                    </div> 
               </div>
          </section>
      </body>
@endsection
