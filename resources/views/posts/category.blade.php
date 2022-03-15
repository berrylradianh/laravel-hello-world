@extends('layouts.main')

@section('crumb')
    <div class="crumb_nav"> <a href="/">home</a> &gt;&gt; {{ $menu }} </div>
@endsection

@section('main-left-content')
<div class="new_products">
    <div class="new_prod_box"> <a href="#">product name</a>
      <div class="new_prod_bg"> <a href="#"><img src="{{asset('images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
    </div>
    <div class="new_prod_box"> <a href="#">product name</a>
      <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('images/new_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('images/thumb2.gif')}}" alt="" class="thumb" border="0" /></a> </div>
    </div>
    <div class="new_prod_box"> <a href="#">product name</a>
      <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('images/promo_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('images/thumb3.gif')}}" alt="" class="thumb" border="0" /></a> </div>
    </div>
    <div class="new_prod_box"> <a href="#">product name</a>
      <div class="new_prod_bg"> <a href="#"><img src="{{asset('images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
    </div>
    <div class="new_prod_box"> <a href="#">product name</a>
      <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('images/promo_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('images/thumb2.gif')}}" alt="" class="thumb" border="0" /></a> </div>
    </div>
    <div class="new_prod_box"> <a href="#">product name</a>
      <div class="new_prod_bg"> <a href="#"><img src="{{asset('images/thumb3.gif')}}" alt="" class="thumb" border="0" /></a> </div>
    </div>
    <div class="new_prod_box"> <a href="#">product name</a>
      <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('images/new_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('images/thumb2.gif')}}" alt="" class="thumb" border="0" /></a> </div>
    </div>
    <div class="new_prod_box"> <a href="#">product name</a>
      <div class="new_prod_bg"> <a href="#"><img src="{{asset('images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
    </div>
    <div class="new_prod_box"> <a href="#">product name</a>
      <div class="new_prod_bg"> <a href="#"><img src="{{asset('images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
    </div>
    <div class="new_prod_box"> <a href="#">product name</a>
      <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('images/new_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
    </div>
    <div class="new_prod_box"> <a href="#">product name</a>
      <div class="new_prod_bg"> <a href="#"><img src="{{asset('images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
    </div>
    <div class="pagination"> <span class="disabled"><<</span><span class="current">1</span><a href="#">2</a><a href="#">3</a>�<a href="#">10</a><a href="#">11</a><a href="#">>></a> </div>
  </div>
@endsection
