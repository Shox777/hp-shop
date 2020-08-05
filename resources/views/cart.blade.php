@extends('layout')

@section('cart-page-contents')

<body class="subpage">

     <!-- Header -->
     <header id="header">
       <div class="inner">
          <a href="/" class="logo"><h2>HP SHOP</h2></a> 
         <nav id="nav">
           <a href="/shop">Shop</a>
           <a href="#">New In</a>
           <a href="#">About</a>
           <a href="#">Trending</a>
           <a href="#">Cart</a>
         </nav>
         <a href="#navPanel" class="navPanelToggle"
           ><span class="fa fa-bars"></span
         ></a>
       </div>
     </header>
     <section class="guideline-box">
          <div class="guideline">
               <a href="/"> Home <i style="color: black; font-weight:bold" class="fa fa-angle-right"></i></a> 
               <a href="/products"> Shopping Cart</a>
          </div>
     </section>
     <div class="hight-of-cart">
     <div class="wrap"><h2>2 Item(s) in Shopping Cart</h2></div>

     <div class="cart-page-content wrap">
       <div class="make-f"><img src="../../img/product_cart.jpg" width="100px" alt="">
        <ul>
          <li><h3>The product name</h3></li>
          <li>The product info</li>
        </ul>
      </div>
       <ul class="make-f-2">
         <li>
           <ul>
            <li> <a href="#">Remove</a></li>
            <li> <a href="#">Save it</a></li>
          </ul>
         </li>
         <li>
          <input type="number" style="width: 40px" min="1" max="15" value="1" step="1" ondrop="return false;" onpaste="return false;">

          </li>
          <li>$1499.90</li>
       </ul>
     </div>

    <div class="cart-page-content wrap">
      <div class="make-f"><img src="../../img/product_cart.jpg" width="100px" alt="">
       <ul>
         <li><h3>The product name</h3></li>
         <li>The product info</li>
       </ul>
     </div>
      <ul class="make-f-2">
        <li>
          <ul>
            <li> <a href="#">Remove</a></li>
            <li> <a href="#">Save it</a></li>
         </ul>
        </li>
        <li>
          <input type="number" style="width: 40px" min="1" max="15" value="1" step="1" ondrop="return false;" onpaste="return false;">
         </li>
         <li>$1499.90</li>
      </ul>
    </div>
    </div>
    <div class="wrap voucher">
      <form action="">
        <h3>Apply Voucher if you have</h3>
        <input type="text" name="" placeholder="Enter Voucher.." id="">
        <button type="button">Apply</button>
      </form>
    </div>
    <div class="total wrap-2">
      <div style="width: 60%">
        <p>Lorem, ipsum dolor sit amet 
          consectetur adipisicing elit consectetur adipisicing elit. 
          Quos ratione 
          repellendus amet!</p>
      </div>
      <ul class="total-2">
        <li>
          <ul>
            <li>Subtotal</li>
            <li>Tax</li>
            <li><h3>Total</h3></li>
          </ul>
        </li>
        <li>
          <ul>
            <li>$0000</li>
            <li>$000</li>
            <li><h3>$00000</h3></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="wrap-2-1">
      <button class="proceed-btn-1"> Continue Shopping </button>

      <button class="proceed-btn"> Proceed to Checkout </button>
    </div>
</body>

@endsection
