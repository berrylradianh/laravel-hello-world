@extends('layouts.main')

@section('left_content')
<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>About us</div>
<div class="feat_prod_box_details">
    <p class="details"> <img src="{{$posts[2]->images}}" alt="" class="right" />
        {{ $posts[0]->content }}
        {{ $posts[1]->content }}
        {{ $posts[2]->content }}
    </p>
    <p class="details">
        {{ $posts[2]->content }}
        {{ $posts[0]->content }}
        {{ $posts[1]->content }}
    </p>
  </div>
@endsection
