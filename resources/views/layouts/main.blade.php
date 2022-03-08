<!DOCTYPE>
<html>
<head>
<title>Flower Shop - {{ $title }}</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link
    rel="stylesheet"
    href="{{asset('css/style.css')}}"
    type="text/css"
/>
@yield('style')
</head>
<body>
    <div id="wrap">
        <!--Header-->
            @include('partials.header');
        <!--End of Header-->
      <div class="center_content">
        <!--Left Content-->
            @include('partials.content');
        <!--end of left content-->

        <!--Right Content-->
            @include('partials.sidebar');
        <!--end of right content-->

        <div class="clear"></div>
      </div>
      <!--end of center content-->
      <!--Footer-->
        @include('partials.footer');
      <!--End of Footer-->
    </div>
    </body>
</html>
