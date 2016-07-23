<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="content-language" content="vi" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @yield("title")
  @yield("meta")
  <link rel="canonical" href='/' />
  <link rel="alternate" media="handheld" href='/' />
  <link href="public/kingtech/css/cp/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">
 
  <script src="public/kingtech/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <link href="public/kingtech/css/cssWeb.css" rel="stylesheet" type="text/css">
    <!-- <link href="public/kingtech/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
    <link href="public/kingtech/flexslider/slick.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>

 @include("fontend.layout.headerTop")
 <article>
    @include("fontend.layout.headMenu")
    @include("fontend.layout.categoryMenu")
    <section>
      @yield("index")
      @yield("search")
    </section>

  </article>

  @include("fontend.layout.footer")

  @include("fontend.layout.ads")
 <!--nơi paste code-->
   
  <a href="#" class="top" style="display: none;"></a>
  <!--end html-->
  <script type='text/javascript' src="public/kingtech/flexslider/scripts.min.js"></script>
  <script>
    jQuery(document).ready(function()
    {
      var offset = 10;
      var duration = 500;
      jQuery(window).scroll(function()
      {
        if (jQuery(this).scrollTop() > offset)
        {
          jQuery('.top').fadeIn(duration);
        } else {
          jQuery('.top').fadeOut(duration);
        }
      });

      jQuery('.top').click(function(event)
      {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
      })

      $(window).bind('scroll', function() {
        /*var navHeight = $( window ).height() - 70;*/
        var navHeight = 170;
        if ($(window).scrollTop() > navHeight)
        {
          $('nav').addClass('fixed');
        }
        else {
          $('nav').removeClass('fixed');
        }
      });
    });
  </script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js"></script><div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;"><iframe id="_atssh290" title="AddThis utility frame" style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;"></iframe></div><style id="service-icons-0"></style>
<script type="text/javascript" src="public/kingtech/flexslider/slick.min.js"></script>
<!-- <script type="text/javascript" src="public/kingtech/bootstrap/js/bootstrap.min.js"></script> -->
</body>
</html>