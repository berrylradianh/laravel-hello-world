@extends('layouts.main')

@section('main-left-content')
<div class="feat_prod_box">
    <div class="prod_img"><a href="/"><img src="images/prod1.gif" alt="" border="0" /></a></div>
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
@endsection
