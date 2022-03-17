@extends('layouts.main')

@section('left_content')
    <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Featured products</div>
    @forelse ($posts as $item )
    <div class="feat_prod_box">
        <div class="prod_img"><a href="#"><img src="{{ $item->images }}" alt="" border="0" /></a></div>
        <div class="prod_det_box">
          <div class="box_top"></div>
          <div class="box_center">
            <div class="prod_title">{{ $item->title }}</div>
            <p class="details">{{ $item->content }}</p>
            <a href="#" class="more"></a>
            <div class="clear"></div>
          </div>
          <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
      </div>
    @empty
        <div class="feat_prod_box">
            <div class="prod_img"><a href="#"><img src="#" alt="" border="0" /></a></div>
            <div class="prod_det_box">
            <div class="box_top"></div>
            <div class="box_center">
                <div class="prod_title">Belum ada data</div>
                <p class="details">Belum ada data</p>
                <a href="#" class="more"></a>
                <div class="clear"></div>
            </div>
            <div class="box_bottom"></div>
            </div>
            <div class="clear"></div>
        </div>
    @endforelse
    <div class="title"><span class="title_icon"><img src="images/bullet2.gif" alt="" /></span>New products</div>
    <div class="new_products">
        @forelse ($posts as $item )
    <div class="feat_prod_box">
        <div class="prod_img"><a href="#"><img src="{{ $item->images }}" alt="" border="0" /></a></div>
        <div class="prod_det_box">
          <div class="box_top"></div>
          <div class="box_center">
            <div class="prod_title">{{ $item->title }}</div>
            <p class="details">{{ $item->content }}</p>
            <a href="#" class="more"></a>
            <div class="clear"></div>
          </div>
          <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
      </div>
    @empty
        <div class="feat_prod_box">
            <div class="prod_img"><a href="#"><img src="#" alt="" border="0" /></a></div>
            <div class="prod_det_box">
            <div class="box_top"></div>
            <div class="box_center">
                <div class="prod_title">Belum ada data</div>
                <p class="details">Belum ada data</p>
                <a href="#" class="more"></a>
                <div class="clear"></div>
            </div>
            <div class="box_bottom"></div>
            </div>
            <div class="clear"></div>
        </div>
    @endforelse
      </div>
      <div class="clear"></div>

@endsection
