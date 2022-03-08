@extends('layouts.main')

@section('main-left-content')
<div class="feat_prod_box_details">
    <table class="cart_table">
      <tr class="cart_title">
        <td>Item pic</td>
        <td>Product name</td>
        <td>Unit price</td>
        <td>Qty</td>
        <td>Total</td>
      </tr>
      <tr>
        <td><a href="#"><img src="{{asset('images/cart_thumb.gif')}}" alt="" border="0" class="cart_thumb" /></a></td>
        <td>Gift flowers</td>
        <td>100$</td>
        <td>1</td>
        <td>100$</td>
      </tr>
      <tr>
        <td><a href="#"><img src="{{asset('images/cart_thumb.gif')}}" alt="" border="0" class="cart_thumb" /></a></td>
        <td>Gift flowers</td>
        <td>100$</td>
        <td>1</td>
        <td>100$</td>
      </tr>
      <tr>
        <td><a href="#"><img src="{{asset('images/cart_thumb.gif')}}" alt="" border="0" class="cart_thumb" /></a></td>
        <td>Gift flowers</td>
        <td>100$</td>
        <td>1</td>
        <td>100$</td>
      </tr>
      <tr>
        <td colspan="4" class="cart_total"><span class="red">TOTAL SHIPPING:</span></td>
        <td> 250$</td>
      </tr>
      <tr>
        <td colspan="4" class="cart_total"><span class="red">TOTAL:</span></td>
        <td> 325$</td>
      </tr>
    </table>
    <a href="#" class="continue">&lt; continue</a> <a href="#" class="checkout">checkout &gt;</a> </div>
@endsection
