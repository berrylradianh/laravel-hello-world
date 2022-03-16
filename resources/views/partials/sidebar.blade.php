<div class="right_content">
    <div class="languages_box"> <span class="red">Languages:</span> <a href="#" class="selected"><img src="{{asset('images/gb.gif')}}" alt="" border="0" /></a> <a href="#"><img src="{{asset('images/fr.gif')}}" alt="" border="0" /></a> <a href="#"><img src="{{asset('images/de.gif')}}" alt="" border="0" /></a> </div>
    <div class="currency"> <span class="red">Currency: </span> <a href="#">GBP</a> <a href="#">EUR</a> <a href="#" class="selected">USD</a> </div>
    <div class="cart">
      <div class="title"><span class="title_icon"><img src="{{asset('images/cart.gif')}}" alt="" /></span>My cart</div>
      <div class="home_cart_content"> 3 x items | <span class="red">TOTAL: 100$</span> </div>
      <a href="cart" class="view_cart">view</a> </div>
    <div class="title"><span class="title_icon"><img src="{{asset('images/bullet3.gif')}}" alt="" /></span>About Our Shop</div>
    <div class="about">
      <p> <img src="{{$posts[2]->images}}" alt="" class="right" /> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
    </div>
    <div class="right_box">
      <div class="title"><span class="title_icon"><img src="{{asset('images/bullet4.gif')}}" alt="" /></span>Promotions</div>
      @forelse ($posts as $item)
        <div class="new_prod_box"> <a href="#">{{ $item->title }}</a>
            <div class="new_prod_bg" style="margin-left: 0.5cm"> <span class="new_icon"><img src="{{$item->images}}" alt="" /></span> <a href="#"><img src="{{asset('images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
      @empty
        <div class="new_prod_box"> <a href="#">{{ $item->title }}</a>
            <div class="new_prod_bg" style="margin-left: 0.5cm"> <span class="new_icon"><img src="{{$item->images}}" alt="" /></span> <a href="#"><img src="{{asset('images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
      @endforelse
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
