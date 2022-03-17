@extends('layouts.main')

@section('left_content')
<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Contact Us</div>
<div class="feat_prod_box_details">
    <p class="details">
        {{ $posts[0]->content }}
        {{ $posts[1]->content }}
    </p>
    <div class="contact_form">
      <div class="form_subtitle">All Fields are Requierd</div>
      <div class="form_row">
        <label class="contact"><strong>Name:</strong></label>
        <input type="text" class="contact_input" required/>
      </div>
      <div class="form_row">
        <label class="contact"><strong>Email:</strong></label>
        <input type="text" class="contact_input" required/>
      </div>
      <div class="form_row">
        <label class="contact"><strong>Phone:</strong></label>
        <input type="text" class="contact_input" required/>
      </div>
      <div class="form_row">
        <label class="contact"><strong>Company:</strong></label>
        <input type="text" class="contact_input" required />
      </div>
      <div class="form_row">
        <label class="contact"><strong>Message:</strong></label>
        <textarea class="contact_textarea" required></textarea>
      </div>
      <div class="form_row"> <a href="#" class="contact">send</a> </div>
    </div>
  </div>
@endsection
