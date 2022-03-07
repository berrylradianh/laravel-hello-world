<!DOCTYPE>
<html>
<head>
<title>Flower Shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link
    rel="stylesheet"
    href="{{asset('css/style.css')}}"
    type="text/css"
/>
</head>
<body>
<div id="wrap">
  <div class="header">
    <div class="logo"><a href="/"><img src={{asset('images/logo.gif')}} alt="" border="0" /></a></div>
    <div id="menu">
      <ul>
        <li class="selected"><a href="/">home</a></li>
        <li><a href="about">about us</a></li>
        <li><a href="category">flowers</a></li>
        <li><a href="specials">specials gifts</a></li>
        <li><a href="myaccount">my accout</a></li>
        <li><a href="register2">register</a></li>
        <li><a href="details">prices</a></li>
        <li><a href="contact">contact</a></li>
      </ul>
    </div>
  </div>
  <div class="center_content">
    <div class="left_content">
      <div class="title"><span class="title_icon"><img src={{asset('images/bullet1.gif')}} alt="" /></span>Featured products</div>
      <div class="feat_prod_box">
        <div class="prod_img"><a href="#"><img src="images/prod1.gif" alt="" border="0" /></a></div>
        <div class="prod_det_box">
          <div class="box_top"></div>
          <div class="box_center">
            <div class="prod_title">Product name</div>
            <p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            <a href="#" class="more">- more details -</a>
            <div class="clear"></div>
          </div>
          <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="feat_prod_box">
        <div class="prod_img"><a href="#"><img src={{asset('images/prod2.gif')}} alt="" border="0" /></a></div>
        <div class="prod_det_box">
          <div class="box_top"></div>
          <div class="box_center">
            <div class="prod_title">Product name</div>
            <p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            <a href="#" class="more">- more details -</a>
            <div class="clear"></div>
          </div>
          <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="title"><span class="title_icon"><img src="{{asset('images/bullet2.gif')}}" alt="" /></span>New products</div>
      <div class="new_products">
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('images/new_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('images/new_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('images/thumb2.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('images/new_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('images/thumb3.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <!--end of left content-->
    <div class="right_content">
      <div class="languages_box"> <span class="red">Languages:</span> <a href="#" class="selected"><img src="{{asset('images/gb.gif')}}" alt="" border="0" /></a> <a href="#"><img src="{{asset('images/fr.gif')}}" alt="" border="0" /></a> <a href="#"><img src="{{asset('images/de.gif')}}" alt="" border="0" /></a> </div>
      <div class="currency"> <span class="red">Currency: </span> <a href="#">GBP</a> <a href="#">EUR</a> <a href="#" class="selected">USD</a> </div>
      <div class="cart">
        <div class="title"><span class="title_icon"><img src="{{asset('images/cart.gif')}}" alt="" /></span>My cart</div>
        <div class="home_cart_content"> 3 x items | <span class="red">TOTAL: 100$</span> </div>
        <a href="cart" class="view_cart">view cart</a> </div>
      <div class="title"><span class="title_icon"><img src="{{asset('images/bullet3.gif')}}" alt="" /></span>About Our Shop</div>
      <div class="about">
        <p> <img src="{{asset('images/about.gif')}}" alt="" class="right" /> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="{{asset('images/bullet4.gif')}}" alt="" /></span>Promotions</div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('images/promo_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('images/promo_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('images/thumb2.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('images/promo_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('images/thumb3.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="{{asset('images/bullet5.gif')}}" alt="" /></span>Categories</div>
        <ul class="list">
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
        </ul>
        <div class="title"><span class="title_icon"><img src="{{asset('images/bullet6.gif')}}" alt="" /></span>Partners</div>
        <ul class="list">
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
        </ul>
      </div>
    </div>
    <!--end of right content-->
    <div class="clear"></div>
  </div>
  <!--end of center content-->
  <div class="footer">
    <div class="left_footer"><img src="{{asset('images/footer_logo.gif')}}" alt="" /><br />
      <a href="http://csscreme.com"><img src="{{asset('images/csscreme.gif')}}" alt="" border="0" /></a></div>
    <div class="right_footer"> <a href="/">home</a> <a href="about">about us</a> <a href="category">services</a> <a href="#">privacy policy</a> <a href="contact">contact us</a> </div>
  </div>
</div>
</body>
</html>
