<div class="left_content">
    @yield("crumb")
    <div class="title"><span class="title_icon"><img src="{{asset('images/bullet1.gif')}}" alt="" /></span>{{ $description }}</div>
    @yield('main-left-content');
    <div class="clear"></div>
  </div>
