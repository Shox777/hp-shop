@extends('layout')

@section('product-page-content')
<head>
     <style>
@charset "utf-8";
@import "node_modules/reset-css/_reset";
@import url(font-awesome.min.css);
@import url("https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap");

/**** reset code ****/
html,
body,
div,
span,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
abbr,
address,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
samp,
small,
strong,
sub,
sup,
var,
b,
i,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section,
summary,
time,
mark,
audio,
video {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
}

body {
    margin: 0;
    padding: 0;
    line-height: 1;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
    display: block;
}

nav ul {
    list-style: none;
}

blockquote,
q {
    quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
    content: "";
    content: none;
}

a {
    margin: 0;
    padding: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
}

/* change colours to suit your needs */
ins {
    background-color: #ff9;
    color: #000;
    text-decoration: none;
}

/* change colours to suit your needs */
mark {
    background-color: #ff9;
    color: #000;
    font-style: italic;
    font-weight: bold;
}

del {
    text-decoration: line-through;
}

abbr[title],
dfn[title] {
    border-bottom: 1px dotted;
    cursor: help;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

/* change border colour to suit your needs */
hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #cccccc;
    margin: 1em 0;
    padding: 0;
}
li {
    list-style-type: none;
}

input,
select {
    vertical-align: middle;
}

/**** My codes ****/

/* variables 
$text-color: #212121;
$white: #e9e9e9;
$light-gray-background: #f5f5f5;
$gray-background: #535353;
$suparator-color: #cdcdcd;
$gutter: 30px;
*/

html {
    box-sizing: border-box;
}

*,
*:before,
*:after {
    box-sizing: inherit;
}
body {
    font-family: "Source Sans Pro", sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.6;
}
a {
    text-decoration: none;
    color: #212121;
}
h1 {
    font-size: 38px;
}
h2 {
    font-size: 22px;
}
img {
    max-width: 100%;
}
.text-center {
    text-align: center;
}
.container {
    max-width: 1200px;
    margin: auto;
}
@media screen and (max-width: 980px) {
    #nav {
        display: none;
    }
}

#navPanel {
    -moz-transform: translatex(20em);
    -webkit-transform: translatex(20em);
    -ms-transform: translatex(20em);
    transform: translatex(20em);
    -moz-transition: -moz-transform 0.2s ease-in-out,
        visibility 0.2s ease-in-out;
    -webkit-transition: -webkit-transform 0.2s ease-in-out,
        visibility 0.2s ease-in-out;
    -ms-transition: -ms-transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
    transition: transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
    -webkit-overflow-scrolling: touch;
    visibility: hidden;
    overflow-y: auto;
    position: fixed;
    right: 0;
    top: 0;
    background: #000;
    color: #daefe3;
    height: 100%;
    max-width: 80%;
    width: 20em;
    padding: 0.5em 1.25em;
    z-index: 10010;
}

#navPanel.visible {
    -moz-transform: translatex(0);
    -webkit-transform: translatex(0);
    -ms-transform: translatex(0);
    transform: translatex(0);
    box-shadow: 0 0 1.5em 0 rgba(0, 0, 0, 0.2);
    visibility: visible;
}

#navPanel a:not(.close) {
    border-top: solid 1px #8dcca9;
    color: #daefe3;
    font-weight: 600;
    display: block;
    padding: 0.75em 0;
    text-decoration: none;
    font-weight: 400;
}

#navPanel a:not(.close):first-child {
    border: none;
}

#navPanel .close {
    text-decoration: none;
    -moz-transition: color 0.2s ease-in-out;
    -webkit-transition: color 0.2s ease-in-out;
    -ms-transition: color 0.2s ease-in-out;
    transition: color 0.2s ease-in-out;
    -webkit-tap-highlight-color: transparent;
    border: 0;
    color: #daefe3;
    cursor: pointer;
    display: block;
    height: 4em;
    padding-right: 1.25em;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
    vertical-align: middle;
    width: 5em;
}

#navPanel .close:before {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-transform: none !important;
    content: "\f00d";
    width: 3em;
    height: 3em;
    line-height: 3em;
    display: block;
    position: absolute;
    right: 0;
    top: 0;
    text-align: center;
}

#navPanel .close:hover {
    color: inherit;
}

.subpage {
    padding-top: 44px;
}

.subpage #header {
    background: #010058;
    top: 0;
    height: 44px;
    line-height: 44px;
    position: fixed;
}

#header {
    color: #fff;
    cursor: default;
    height: 3.25em;
    left: 0;
    line-height: 3.25em;
    position: absolute;
    text-align: right;
    top: 2em;
    width: 100%;
    z-index: 10001;
}

#header .inner {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
}

#header .logo {
    color: #ffffff;
    display: inline-block;
    font-weight: 400;
    height: inherit;
    left: 0;
    line-height: inherit;
    margin: 0;
    padding: 0;
    position: absolute;
    top: 0;
    font-size: 1em;
}

#header .logo strong {
    color: #ffffff;
    font-weight: 600;
}

#header a {
    -moz-transition: color 0.2s ease-in-out;
    -webkit-transition: color 0.2s ease-in-out;
    -ms-transition: color 0.2s ease-in-out;
    transition: color 0.2s ease-in-out;
    display: inline-block;
    padding: 0 0.75em;
    color: inherit;
    text-decoration: none;
    font-size: 1em;
}

#header a:hover {
    color: #ffffff;
}

#header a:last-child {
    padding-right: 0;
}

#header a.navPanelToggle {
    display: none;
    text-decoration: none;
    height: 4em;
    width: 4em;
    z-index: 10003;
}

#header a.navPanelToggle .fa {
    font-size: 1.25em;
}

@media screen and (max-width: 980px) {
    #header a.navPanelToggle {
        display: inline-block;
    }
}

@media screen and (max-width: 736px) {
    #header a {
        padding: 0 0.5em;
    }
}

@media screen and (max-width: 980px) {
    #header {
        top: 1em;
    }
}

@media screen and (max-width: 736px) {
    #header {
        top: 0.5em;
    }
}

@media screen and (max-width: 480px) {
    #header {
        font-size: 0.9em;
    }
}

/* Nav */

@media screen and (max-width: 980px) {
    #nav {
        display: none;
    }
}

#navPanel {
    -moz-transform: translatex(20em);
    -webkit-transform: translatex(20em);
    -ms-transform: translatex(20em);
    transform: translatex(20em);
    -moz-transition: -moz-transform 0.2s ease-in-out,
        visibility 0.2s ease-in-out;
    -webkit-transition: -webkit-transform 0.2s ease-in-out,
        visibility 0.2s ease-in-out;
    -ms-transition: -ms-transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
    transition: transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
    -webkit-overflow-scrolling: touch;
    visibility: hidden;
    overflow-y: auto;
    position: fixed;
    right: 0;
    top: 0;
    background: #000;
    color: #daefe3;
    height: 100%;
    max-width: 80%;
    width: 20em;
    padding: 0.5em 1.25em;
    z-index: 10010;
}

#navPanel.visible {
    -moz-transform: translatex(0);
    -webkit-transform: translatex(0);
    -ms-transform: translatex(0);
    transform: translatex(0);
    box-shadow: 0 0 1.5em 0 rgba(0, 0, 0, 0.2);
    visibility: visible;
}

#navPanel a:not(.close) {
    border-top: solid 1px gray;
    color: #daefe3;
    font-weight: 600;
    display: block;
    padding: 0.75em 0;
    text-decoration: none;
    font-weight: 400;
}

#navPanel a:not(.close):first-child {
    border: none;
}

#navPanel .close {
    text-decoration: none;
    -moz-transition: color 0.2s ease-in-out;
    -webkit-transition: color 0.2s ease-in-out;
    -ms-transition: color 0.2s ease-in-out;
    transition: color 0.2s ease-in-out;
    -webkit-tap-highlight-color: transparent;
    border: 0;
    color: #daefe3;
    cursor: pointer;
    display: block;
    height: 4em;
    padding-right: 1.25em;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
    vertical-align: middle;
    width: 5em;
}

#navPanel .close:before {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-transform: none !important;
    content: "\f00d";
    width: 3em;
    height: 3em;
    line-height: 3em;
    display: block;
    position: absolute;
    right: 0;
    top: 0;
    text-align: center;
}

#navPanel .close:hover {
    color: inherit;
}

/* Banner */

#banner {
    padding: 8em 0 9em 0;
    background-image: url(../../img/banner.jpg);
    background-size: cover;
    background-position: bottom;
    background-attachment: fixed;
    background-repeat: no-repeat;
    text-align: center;
    position: relative;
}

#banner:before {
    content: "";
    background: rgba(61, 61, 88, 0.788);
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

#banner .inner {
    border-top: 2px solid rgba(255, 255, 255, 0.2);
    position: relative;
    z-index: 10005;
    padding-top: 8em;
}

#banner h1 {
    font-size: 3.5em;
    font-weight: 400;
    color: #fff;
    line-height: 1em;
    margin: 0 0 1em 0;
    padding: 0;
}

#banner h3 {
    font-weight: 400;
    color: #fff;
    margin: 0;
    font-size: 1.5em;
}

#banner .icon {
    color: #6cc091;
    font-size: 2em;
}

#banner p {
    font-size: 1em;
    color: rgba(255, 255, 255, 0.55);
    margin-bottom: 1.75em;
}

#banner .flex {
    -ms-flex-pack: center;
    -moz-justify-content: center;
    -webkit-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
    text-align: center;
    margin: 0 auto 4em auto;
}

#banner .flex div {
    border-right: 2px solid rgba(255, 255, 255, 0.2);
    padding: 0 8em;
}

#banner .flex div:last-child {
    border: none;
    padding-right: 0;
}

#banner .flex div:first-child {
    padding-left: 0;
}

#banner .flex div p {
    margin: 0;
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) {
    #banner {
        background-attachment: scroll;
    }
}

@media screen and (max-width: 1680px) {
    #banner .flex div {
        padding: 0 6em;
    }
}

@media screen and (max-width: 1280px) {
    #banner {
        padding: 7em 0 6em 0;
    }

    #banner .inner {
        padding-top: 6em;
    }

    #banner h1 {
        font-size: 3em;
    }

    #banner h3 {
        font-size: 1.25em;
    }

    #banner .flex div {
        padding: 0 3em;
    }
}

@media screen and (max-width: 980px) {
    #banner {
        background-attachment: scroll;
        padding: 5em 0 4em 0;
    }

    #banner .inner {
        padding-top: 4em;
    }

    #banner h1 {
        font-size: 2.5em;
    }

    #banner h3 {
        font-size: 1.25em;
    }

    #banner .flex div {
        font-size: 0.85em;
        padding: 0 1.5em;
    }
}

@media screen and (max-width: 736px) {
    #banner {
        padding: 4em 0 3em 0;
    }

    #banner .inner {
        padding-top: 3em;
    }

    #banner h1 {
        font-size: 2em;
    }

    #banner h3 {
        font-size: 1.25em;
    }

    #banner .flex {
        -moz-flex-direction: column;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        margin: 0 auto 2em auto;
    }

    #banner .flex div {
        font-size: 0.85em;
        padding: 0;
        border: none;
        margin-bottom: 1em;
    }
}

@media screen and (max-width: 480px) {
    #banner h1 {
        font-size: 1.5em;
    }
}

/* Flex */

.flex {
    display: -ms-flexbox;
    -ms-flex-wrap: wrap;
    -ms-flex-pack: justify;
    -moz-justify-content: space-between;
    -webkit-justify-content: space-between;
    -ms-justify-content: space-between;
    justify-content: space-between;
    display: -moz-flex;
    display: -webkit-flex;
    display: -ms-flex;
    display: flex;
    -moz-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    width: 100%;
}
.button {
    -moz-appearance: none;
    -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
    -webkit-transition: background-color 0.2s ease-in-out,
        color 0.2s ease-in-out;
    -ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
    background-color: transparent;
    box-shadow: inset 0 0 0 3px #6cc091;
    color: #6cc091 !important;
    border-radius: 30px;
    border: 0;
    cursor: pointer;
    display: inline-block;
    font-size: 0.75em;
    font-weight: 400;
    height: 3.75em;
    line-height: 3.85em;
    letter-spacing: 2px;
    padding: 0 4em;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    white-space: nowrap;
}
.button:hover {
    background-color: rgba(108, 192, 145, 0.15);
}
.button1 {
    border: 1px solid #000000;
    padding: 12px 40px;
    transition: all 0.3s ease-in;
}
.button1:hover {
    color: #ffffff;
    background-color: #000000;
}
.inner {
    max-width: 1200px;
    margin: auto;
}
/* Icon */

i {
    color: #6cc091;
}
.inner ul {
    display: flex;
    text-transform: uppercase;
    justify-content: space-between;
    width: 40%;
}
ul a {
    color: #ffffff;
}

/* featured section */
.featured-section {
    padding: 50px 0;
}
.products {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-gap: 30px;
}
.section-description {
    text-align: center;
    width: 80%;
    margin: auto;
    padding: 30px 0;
}
.button-container {
    margin: 80px 0;
}
.choose-item {
    max-width: 1000px;
    margin: 0 auto 30px auto;
    display: flex;
    justify-content: space-between;
}

.choose-item a {
    text-decoration: none;
}
.product-choose-items {
    text-align: center;
    color: #000;
    padding: 0 10px;
}

.blog-section {
    background-color: #f5f5f5;
    padding: 50px 0;
    border-top: 1px solid #cdcdcd;
}
.blog-posts {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 30px;
}
.ft {
    position: static;
    bottom: 0;
    width: 100%;
    background-color: #000000;
    padding: 40px 0;
    color: #fff;
}

/***********  Products Page **************/
.shopping-items {
    max-width: 1000px;
    margin: 20px auto;
    display: flex;
    justify-content: space-between;
}
.shopping-links a {
    text-decoration: none;
    color: #000;
}
.shopping-links {
    display: block;
}

.shopping-links a:hover {
    text-decoration: underline;
}

.wrap-product-item-row1 {
    text-decoration: none;
    max-width: 1000px;
    margin: auto;
    display: flex;
    justify-content: space-between;
}
.wrap-product-item-row1 a {
    text-decoration: none;
}
.product-items {
    text-align: center;
    color: #000;
    margin: 10px;
}
.product-choose-items {
    text-align: center;
    color: #000;
    padding: 0 10px;
}

.footer-content ul {
    display: flex;
    float: right;
}
.footer-content ul li {
    padding-left: 22px;
}
.copyright {
    text-align: center;
    font-size: 12px;
}
/***********  Item page **************/

.item-page {
    display: flex;
    max-width: 800px;
    margin: 80px auto;
    justify-content: space-between;
    height: 49vh;
}
.view-img {
    width: 300px;
}
/***********  Guideline **************/
.guideline-box {
    width: 100%;
    background-color: #f5f5f5;
}
.guideline {
    font-size: 16px;
    padding: 10px 0;
    max-width: 1000px;
    margin: auto;
}

     </style>
</head>

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
           <a href="/cart">Cart</a>
         </nav>
         <a href="#navPanel" class="navPanelToggle"
           ><span class="fa fa-bars"></span
         ></a>
       </div>
     </header>
     <section class="guideline-box">
          <div class="guideline">
               <a href="/"> Home <i style="color: black; font-weight:bold" class="fa fa-angle-right"></i></a> 
               <a href="/shop"> Shop <i style="color: black;font-weight:bold" class="fa fa-angle-right"></i></a>
               <a href="#"> name</a>
          </div>
     </section>

     <section class="item-page">
          <div style="margin-right: 60px"> 
               <div class="view-img">
                    <img src="../../img/product.jpg" alt="">
               </div>
          </div>
          <div> <h2 style="font-weight: 600;"> {{$product->name}} </h2>
                <ul>
                <li style="font-weight:bold">
                    {{$product->details}} 
                </li>
               <li style="font-weigth:900; font-size:30px; color:#000">
                    {{$product->price}}
               </li>
                <li style="margin-bottom: 60px">
                    {{$product->description}}
                </li>
           </ul>
           <a href=" {{route('cart.index')}} "  class="button1">Add Cart</a>
          </div>
     </section>
     		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>
</body>

@endsection
