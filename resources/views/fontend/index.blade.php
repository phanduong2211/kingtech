@extends('fontend.layout')
@section('title')
<title>kingtech | android tv box | loa bluetooth| camera the thao | but trinh chieu| ong nhom | camera hanh trinh | tai nghe bluetooth </title>
@endsection
@section('meta')
<meta name='description' content='KINGTECH chuyên phân phối android tv box | loa bluetooth| camera the thao | but trinh chieu| ong nhom | camera hanh trinh | tai nghe bluetooth giá tốt nhất ' >
  <meta name='keywords' content='kingtech | android tv box | loa bluetooth| camera the thao | but trinh chieu| ong nhom | camera hanh trinh | tai nghe bluetooth | Pin du phong | bo phat wifi' >
  
  <meta property="og:type" content="website" />
  <meta property="og:url" content="/" />
  <meta property="og:title" content="KINGTECH chuyên phân phối android tv box, loa bluetooth, camera the thao" />
  <meta property="og:description" content="KINGTECH chuyên phân phối android tv box | loa bluetooth| camera the thao | but trinh chieu| ong nhom | camera hanh trinh | tai nghe bluetooth giá tốt nhất " />
  <meta property="og:site_name" content="kingtech" />
  <meta property="og:image" content="images/logo_jpg.jpg" />
  <meta property="fb:app_id" content="1700293566862288" />
  <meta name='robots' content='INDEX,FOLLOW' />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>  
  <meta name='Search Engines' content='www.google.com, www.google.com.vn, www.yahoo.com' />
@endsection
@section('center')
      <div class="body_pages">
        <link rel="stylesheet" href="public/kingtech/css/TweenMax.css" type="text/css">

@include("fontend.home.slide")
<div class="box_tieudem">
  <div class="box_tieudem_title">
    <aside> <strong>Tiêu điểm:</strong>
      <ul class="flv_tieudiem" id="nt-title" style="height: 30px; overflow: hidden;">
                @for($i=0;$i< count($newsHot);$i++)
                  <li style="margin-top: 0px;"><a href="{{$newsHot[$i]->url}}" title="{{$newsHot[$i]->title}}">{{$newsHot[$i]->title}}</a></li>
                @endfor
              </ul>
    </aside>
      @for($i=0;$i< count($news_cate);$i++)        

        @if($i==0)
        <span class="tieude_khuyenmai"><a href="{{$news_cate[$i]->url}}" title="{{$news_cate[$i]->name}}">{{$news_cate[$i]->name}}</a></span>        
        @elseif($i==1)
        <span class="tieude_thuthuat"><a href="{{$news_cate[$i]->url}}" title="{{$news_cate[$i]->name}}">{{$news_cate[$i]->name}}</a></span>
        @elseif($i==2)
        <span class="tieude_tinmoi"><a href="{{$news_cate[$i]->url}}" title="{{$news_cate[$i]->name}}">{{$news_cate[$i]->name}}</a></span>
        @endif
      @endfor
      </div>
  <div class="slider_item">
  <!-- begin tin tức hiển thị trang chủ -->
    @for($i=0;$i< count($news);$i++)
      <div class="item">
        
        <figure>
          <a href="{{$news[$i]->url}}" title="{{$news[$i]->title}}"><img src="public/kingtech/images/n/{{$news[$i]->image}}" alt="{{$news[$i]->title}}">
          </a>
        </figure>
        <a href="{{$news[$i]->url}}" title="{{$news[$i]->title}}"></a>
        <h2>
          <a href="{{$news[$i]->url}}" title="{{$news[$i]->title}}"></a><a href="{{$news[$i]->url}}" title="{{$news[$i]->title}}">{{$news[$i]->title}}<span>({{$news[$i]->updated_at}})</span> </a>
        </h2>
        <a href="{{$news[$i]->url}}" title="{{$news[$i]->title}}">
        <label>Đọc tiếp</label>
        </a> 
      </div>
    @endfor
  <!-- end tin tức hiển thị trang chủ -->
      </div>
</div>
@include("fontend.home.search")
<div class="box_pages fl_padding2">
  @include("fontend.home.adsLeft")
  <div class="box_pages_center">
    <div class="slider_croll">
      <div class="box_title">
        <aside>
          <label>Sản phẩm mới</label>
          <span></span> </aside>
      </div>
      <div class="slider-info-items slick-initialized slick-slider"> <span class="span_left"> <a href="" id="slider-nav-back" onclick="return false" style="display: inline;"> <img src="public/kingtech/images/pre.png"></a> </span>
                <div class="slick-list draggable" tabindex="0"><div class="slick-track" style="opacity: 1; width: 3880px; transform: translate3d(-776px, 0px, 0px);"><div class="item_pro slick-slide slick-cloned" index="-4" style="width: 178px;">
          <figure><a href="/p/1730-may-nghe-nhac-xe-hoi-bluetooth-egtong" title="Máy nghe nhạc xe hơi Bluetooth EGTONG"><img src="public/kingtech/images/p/may-nghe-nhac-xe-hoi-bluetooth-egtong-8.jpg" alt="Máy nghe nhạc xe hơi Bluetooth EGTONG"></a></figure>
          <h2><a href="/p/1730-may-nghe-nhac-xe-hoi-bluetooth-egtong" title="Máy nghe nhạc xe hơi Bluetooth EGTONG">Máy nghe nhạc xe hơi Bluetooth EGTONG</a></h2>
          <span><code>550,000 đ</code></span> </div><div class="item_pro slick-slide slick-cloned" index="-3" style="width: 178px;">
          <figure><a href="/p/1727-dang-cap-hd-box-d8-pro-bao-hanh-2-nam" title="Đẳng Cấp HD Box D8 PRO, Bảo Hành 2 Năm"><img src="public/kingtech/images/p/dang-cap-hd-box-d8-pro-4.jpg" alt="Đẳng Cấp HD Box D8 PRO, Bảo Hành 2 Năm"></a></figure>
          <h2><a href="/p/1727-dang-cap-hd-box-d8-pro-bao-hanh-2-nam" title="Đẳng Cấp HD Box D8 PRO, Bảo Hành 2 Năm">Đẳng Cấp HD Box D8 PRO, Bảo Hành 2 Năm</a></h2>
          <span><code>1,790,000 đ</code></span> </div><div class="item_pro slick-slide slick-cloned" index="-2" style="width: 178px;">
          <figure><a href="/p/1726-android-tv-box-m8s-plus-android-51-amlogic-s905-2g" title="Android TV Box M8S Plus Android 5.1 Amlogic S905 2G"><img src="public/kingtech/images/p/android-tv-box-m8s-plus-android-51-amlogic-s905-2g-0.jpg" alt="Android TV Box M8S Plus Android 5.1 Amlogic S905 2G"></a></figure>
          <h2><a href="/p/1726-android-tv-box-m8s-plus-android-51-amlogic-s905-2g" title="Android TV Box M8S Plus Android 5.1 Amlogic S905 2G">Android TV Box M8S Plus Android 5.1 Amlogic S905 ...</a></h2>
          <span><code>1,590,000 đ</code></span> </div><div class="item_pro slick-slide slick-cloned" index="-1" style="width: 178px;">
          <figure><a href="/p/1705-vong-deo-tay-thong-minh-wristband-fitbit" title="Vòng đeo tay thông minh Wristband Fitbit"><img src="public/kingtech/images/p/vong-deo-tay-thong-minh-wristband-fitbit-1.jpg" alt="Vòng đeo tay thông minh Wristband Fitbit"></a></figure>
          <h2><a href="/p/1705-vong-deo-tay-thong-minh-wristband-fitbit" title="Vòng đeo tay thông minh Wristband Fitbit">Vòng đeo tay thông minh Wristband Fitbit</a></h2>
          <span><code>650,000 đ</code></span> </div><div class="item_pro slick-slide slick-active" index="0" style="width: 178px;">
          <figure><a href="/p/1757-may-bay-xiaomi-mi-drone-wifi-fpv-quadcopte-1080p" title="Máy bay Xiaomi Mi Drone WIFI FPV Quadcopte 1080P"><img src="public/kingtech/images/p/may-bay-xiaomi-mi-drone-wifi-fpv-quadcopte-1080p-1.jpg" alt="Máy bay Xiaomi Mi Drone WIFI FPV Quadcopte 1080P"></a></figure>
          <h2><a href="/p/1757-may-bay-xiaomi-mi-drone-wifi-fpv-quadcopte-1080p" title="Máy bay Xiaomi Mi Drone WIFI FPV Quadcopte 1080P">Máy bay Xiaomi Mi Drone WIFI FPV Quadcopte 1080P</a></h2>
          <span><code>11,900,000 đ</code></span> </div><div class="item_pro slick-slide slick-active" index="1" style="width: 178px;">
          <figure><a href="/p/1756-pin-du-phong-mp909-5000mah" title="Pin dự phòng MP909 5000mAh"><img src="public/kingtech/images/p/pin-du-phong-mp909-5000mah-1.jpg" alt="Pin dự phòng MP909 5000mAh"></a></figure>
          <h2><a href="/p/1756-pin-du-phong-mp909-5000mah" title="Pin dự phòng MP909 5000mAh">Pin dự phòng MP909 5000mAh</a></h2>
          <span><code>99,000 đ</code></span> </div><div class="item_pro slick-slide slick-active" index="2" style="width: 178px;">
          <figure><a href="/p/1755-sjcam-sj4000-wifi-20-phien-ban-moi-nhat-mua-1-tang-4" title="Sjcam SJ4000 Wifi 2.0, phiên bản mới nhất, mua 1 tặng 4"><img src="public/kingtech/images/p/sjcam-sj4000-wifi-20-phien-ban-moi-nhat-2.jpg" alt="Sjcam SJ4000 Wifi 2.0, phiên bản mới nhất, mua 1 tặng 4"></a></figure>
          <h2><a href="/p/1755-sjcam-sj4000-wifi-20-phien-ban-moi-nhat-mua-1-tang-4" title="Sjcam SJ4000 Wifi 2.0, phiên bản mới nhất, mua 1 tặng 4">Sjcam SJ4000 Wifi 2.0, phiên bản mới nhất, ...</a></h2>
          <span><code>2,290,000 đ</code></span> </div><div class="item_pro slick-slide slick-active" index="3" style="width: 178px;">
          <figure><a href="/p/1754-chuong-trinh-khuyen-mai-cuc-soc-voi-san-pham-dang-hot-nhat-2016-hien-nay--sjcam-m20" title="CHƯƠNG TRÍNH KHUYẾN MÃI CỰC SỐC VỚI SẢN PHẨM ĐANG HOT NHẤT 2016 HIỆN NAY- SJCAM M20"><img src="public/kingtech/images/p/chuong-trinh-khuyen-mai-cuc-soc-voi-san-pham-dang-hot-nhat-2016-hien-nay--sjcam-m20-1.jpg" alt="CHƯƠNG TRÍNH KHUYẾN MÃI CỰC SỐC VỚI SẢN PHẨM ĐANG HOT NHẤT 2016 HIỆN NAY- SJCAM M20"></a></figure>
          <h2><a href="/p/1754-chuong-trinh-khuyen-mai-cuc-soc-voi-san-pham-dang-hot-nhat-2016-hien-nay--sjcam-m20" title="CHƯƠNG TRÍNH KHUYẾN MÃI CỰC SỐC VỚI SẢN PHẨM ĐANG HOT NHẤT 2016 HIỆN NAY- SJCAM M20">CHƯƠNG TRÍNH KHUYẾN MÃI CỰC SỐC VỚI ...</a></h2>
          <span><code>2,990,000 đ</code></span> </div><div class="item_pro slick-slide" index="4" style="width: 178px;">
          <figure><a href="/p/1748-may-chieu-mini-thong-minh-dlp800w" title="Máy chiếu mini thông minh DLP800W"><img src="public/kingtech/images/p/may-chieu-mini-thong-minh-dlp800w-4.jpg" alt="Máy chiếu mini thông minh DLP800W"></a></figure>
          <h2><a href="/p/1748-may-chieu-mini-thong-minh-dlp800w" title="Máy chiếu mini thông minh DLP800W">Máy chiếu mini thông minh DLP800W</a></h2>
          <span><code>8,950,000 đ</code></span> </div><div class="item_pro slick-slide" index="5" style="width: 178px;">
          <figure><a href="/p/1746-vong-deo-tay-thong-minh-xiaomi-miband-2" title="Vòng đeo tay thông minh Xiaomi Miband 2"><img src="public/kingtech/images/p/vong-deo-tay-thong-minh-xiaomi-miband-2-1.jpg" alt="Vòng đeo tay thông minh Xiaomi Miband 2"></a></figure>
          <h2><a href="/p/1746-vong-deo-tay-thong-minh-xiaomi-miband-2" title="Vòng đeo tay thông minh Xiaomi Miband 2">Vòng đeo tay thông minh Xiaomi Miband 2</a></h2>
          <span><code>990,000 đ</code></span> </div><div class="item_pro slick-slide" index="6" style="width: 178px;">
          <figure><a href="/p/1743-bo-chia-hdmi-201-ra-2-1x2-hdmi-splitter-4k2k-co-remote-dolby-truehd-lpcm7" title="Bộ Chia HDMI 2.0,1 ra 2, 1x2 HDMI Splitter (4K*2K) có Remote Dolby TrueHD /LPCM7"><img src="public/kingtech/images/p/bo-chia-hdmi-201-ra-2-1x2-hdmi-splitter-4k2k-co-remote-1.jpg" alt="Bộ Chia HDMI 2.0,1 ra 2, 1x2 HDMI Splitter (4K*2K) có Remote Dolby TrueHD /LPCM7"></a></figure>
          <h2><a href="/p/1743-bo-chia-hdmi-201-ra-2-1x2-hdmi-splitter-4k2k-co-remote-dolby-truehd-lpcm7" title="Bộ Chia HDMI 2.0,1 ra 2, 1x2 HDMI Splitter (4K*2K) có Remote Dolby TrueHD /LPCM7">Bộ Chia HDMI 2.0,1 ra 2, 1x2 HDMI Splitter ...</a></h2>
          <span><code>1,100,000 đ</code></span> </div><div class="item_pro slick-slide" index="7" style="width: 178px;">
          <figure><a href="/p/1741-huawei-b683-modem-wifi-3g-huawei-b683-toc-do-288mbps-4-port-lan" title="Huawei B683, Modem Wifi 3G Huawei B683 tốc độ 28.8Mbps, 4 port LAN"><img src="public/kingtech/images/p/modem-wifi-3g-huawei-b683-toc-do-288mbps-4-port-lan-rat-phu-hop-cho-xe-khach-co-lon-7.jpg" alt="Huawei B683, Modem Wifi 3G Huawei B683 tốc độ 28.8Mbps, 4 port LAN"></a></figure>
          <h2><a href="/p/1741-huawei-b683-modem-wifi-3g-huawei-b683-toc-do-288mbps-4-port-lan" title="Huawei B683, Modem Wifi 3G Huawei B683 tốc độ 28.8Mbps, 4 port LAN">Huawei B683, Modem Wifi 3G Huawei B683 tốc ...</a></h2>
          <span><code>1,550,000 đ</code></span> </div><div class="item_pro slick-slide" index="8" style="width: 178px;">
          <figure><a href="/p/1730-may-nghe-nhac-xe-hoi-bluetooth-egtong" title="Máy nghe nhạc xe hơi Bluetooth EGTONG"><img src="public/kingtech/images/p/may-nghe-nhac-xe-hoi-bluetooth-egtong-8.jpg" alt="Máy nghe nhạc xe hơi Bluetooth EGTONG"></a></figure>
          <h2><a href="/p/1730-may-nghe-nhac-xe-hoi-bluetooth-egtong" title="Máy nghe nhạc xe hơi Bluetooth EGTONG">Máy nghe nhạc xe hơi Bluetooth EGTONG</a></h2>
          <span><code>550,000 đ</code></span> </div><div class="item_pro slick-slide" index="9" style="width: 178px;">
          <figure><a href="/p/1727-dang-cap-hd-box-d8-pro-bao-hanh-2-nam" title="Đẳng Cấp HD Box D8 PRO, Bảo Hành 2 Năm"><img src="public/kingtech/images/p/dang-cap-hd-box-d8-pro-4.jpg" alt="Đẳng Cấp HD Box D8 PRO, Bảo Hành 2 Năm"></a></figure>
          <h2><a href="/p/1727-dang-cap-hd-box-d8-pro-bao-hanh-2-nam" title="Đẳng Cấp HD Box D8 PRO, Bảo Hành 2 Năm">Đẳng Cấp HD Box D8 PRO, Bảo Hành 2 Năm</a></h2>
          <span><code>1,790,000 đ</code></span> </div><div class="item_pro slick-slide" index="10" style="width: 178px;">
          <figure><a href="/p/1726-android-tv-box-m8s-plus-android-51-amlogic-s905-2g" title="Android TV Box M8S Plus Android 5.1 Amlogic S905 2G"><img src="public/kingtech/images/p/android-tv-box-m8s-plus-android-51-amlogic-s905-2g-0.jpg" alt="Android TV Box M8S Plus Android 5.1 Amlogic S905 2G"></a></figure>
          <h2><a href="/p/1726-android-tv-box-m8s-plus-android-51-amlogic-s905-2g" title="Android TV Box M8S Plus Android 5.1 Amlogic S905 2G">Android TV Box M8S Plus Android 5.1 Amlogic S905 ...</a></h2>
          <span><code>1,590,000 đ</code></span> </div><div class="item_pro slick-slide" index="11" style="width: 178px;">
          <figure><a href="/p/1705-vong-deo-tay-thong-minh-wristband-fitbit" title="Vòng đeo tay thông minh Wristband Fitbit"><img src="public/kingtech/images/p/vong-deo-tay-thong-minh-wristband-fitbit-1.jpg" alt="Vòng đeo tay thông minh Wristband Fitbit"></a></figure>
          <h2><a href="/p/1705-vong-deo-tay-thong-minh-wristband-fitbit" title="Vòng đeo tay thông minh Wristband Fitbit">Vòng đeo tay thông minh Wristband Fitbit</a></h2>
          <span><code>650,000 đ</code></span> </div><div class="item_pro slick-slide slick-cloned" index="12" style="width: 178px;">
          <figure><a href="/p/1757-may-bay-xiaomi-mi-drone-wifi-fpv-quadcopte-1080p" title="Máy bay Xiaomi Mi Drone WIFI FPV Quadcopte 1080P"><img src="public/kingtech/images/p/may-bay-xiaomi-mi-drone-wifi-fpv-quadcopte-1080p-1.jpg" alt="Máy bay Xiaomi Mi Drone WIFI FPV Quadcopte 1080P"></a></figure>
          <h2><a href="/p/1757-may-bay-xiaomi-mi-drone-wifi-fpv-quadcopte-1080p" title="Máy bay Xiaomi Mi Drone WIFI FPV Quadcopte 1080P">Máy bay Xiaomi Mi Drone WIFI FPV Quadcopte 1080P</a></h2>
          <span><code>11,900,000 đ</code></span> </div><div class="item_pro slick-slide slick-cloned" index="13" style="width: 178px;">
          <figure><a href="/p/1756-pin-du-phong-mp909-5000mah" title="Pin dự phòng MP909 5000mAh"><img src="public/kingtech/images/p/pin-du-phong-mp909-5000mah-1.jpg" alt="Pin dự phòng MP909 5000mAh"></a></figure>
          <h2><a href="/p/1756-pin-du-phong-mp909-5000mah" title="Pin dự phòng MP909 5000mAh">Pin dự phòng MP909 5000mAh</a></h2>
          <span><code>99,000 đ</code></span> </div><div class="item_pro slick-slide slick-cloned" index="14" style="width: 178px;">
          <figure><a href="/p/1755-sjcam-sj4000-wifi-20-phien-ban-moi-nhat-mua-1-tang-4" title="Sjcam SJ4000 Wifi 2.0, phiên bản mới nhất, mua 1 tặng 4"><img src="public/kingtech/images/p/sjcam-sj4000-wifi-20-phien-ban-moi-nhat-2.jpg" alt="Sjcam SJ4000 Wifi 2.0, phiên bản mới nhất, mua 1 tặng 4"></a></figure>
          <h2><a href="/p/1755-sjcam-sj4000-wifi-20-phien-ban-moi-nhat-mua-1-tang-4" title="Sjcam SJ4000 Wifi 2.0, phiên bản mới nhất, mua 1 tặng 4">Sjcam SJ4000 Wifi 2.0, phiên bản mới nhất, ...</a></h2>
          <span><code>2,290,000 đ</code></span> </div><div class="item_pro slick-slide slick-cloned" index="15" style="width: 178px;">
          <figure><a href="/p/1754-chuong-trinh-khuyen-mai-cuc-soc-voi-san-pham-dang-hot-nhat-2016-hien-nay--sjcam-m20" title="CHƯƠNG TRÍNH KHUYẾN MÃI CỰC SỐC VỚI SẢN PHẨM ĐANG HOT NHẤT 2016 HIỆN NAY- SJCAM M20"><img src="public/kingtech/images/p/chuong-trinh-khuyen-mai-cuc-soc-voi-san-pham-dang-hot-nhat-2016-hien-nay--sjcam-m20-1.jpg" alt="CHƯƠNG TRÍNH KHUYẾN MÃI CỰC SỐC VỚI SẢN PHẨM ĐANG HOT NHẤT 2016 HIỆN NAY- SJCAM M20"></a></figure>
          <h2><a href="/p/1754-chuong-trinh-khuyen-mai-cuc-soc-voi-san-pham-dang-hot-nhat-2016-hien-nay--sjcam-m20" title="CHƯƠNG TRÍNH KHUYẾN MÃI CỰC SỐC VỚI SẢN PHẨM ĐANG HOT NHẤT 2016 HIỆN NAY- SJCAM M20">CHƯƠNG TRÍNH KHUYẾN MÃI CỰC SỐC VỚI ...</a></h2>
          <span><code>2,990,000 đ</code></span> </div></div></div>
                
                
                
                
                
                
                
                
                
                
                
                <span class="span_right"><a href="" id="slider-nav-next" onclick="return false" style="display: inline;"> <img src="public/kingtech/images/next.png"></a> </span> </div>
    </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/298-camera-ip-hd" title="Camera IP HD">Camera IP HD</a></label>
          <span></span> </aside>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/1473-camera-ip-thong-minh-wifi-sricam-sp008-onvif-720p-zoom-5x" title="Camera IP thông minh Wifi Sricam SP008 Onvif 720P Zoom 5X"><img src="public/kingtech/images/p/camera-ip-thong-minh-wifi-sricam-sp008-onvif-720p-zoom-5x-0.jpg" alt="Camera IP thông minh Wifi Sricam SP008 Onvif 720P Zoom 5X"></a></figure>
          <h2><a href="/p/1473-camera-ip-thong-minh-wifi-sricam-sp008-onvif-720p-zoom-5x" title="Camera IP thông minh Wifi Sricam SP008 Onvif 720P Zoom 5X">Camera IP thông minh Wifi Sricam SP008 Onvif ...</a></h2>
          <span><code>3,590,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1706-camera-ip-thong-minh-hong-ngoai-360" title="Camera IP thông minh hồng ngoại 360"><img src="public/kingtech/images/p/camera-ip-thong-minh-hong-ngoai-360-8.jpg" alt="Camera IP thông minh hồng ngoại 360"></a></figure>
          <h2><a href="/p/1706-camera-ip-thong-minh-hong-ngoai-360" title="Camera IP thông minh hồng ngoại 360">Camera IP thông minh hồng ngoại 360</a></h2>
          <span><code>0 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1496-camera-ip-thong-minh-wifi-sricam-sp014-onvif-720p" title="Camera IP thông minh Wifi Sricam SP014 Onvif 720P"><img src="public/kingtech/images/p/sricam-sp014-camera-ip-2.jpg" alt="Camera IP thông minh Wifi Sricam SP014 Onvif 720P"></a></figure>
          <h2><a href="/p/1496-camera-ip-thong-minh-wifi-sricam-sp014-onvif-720p" title="Camera IP thông minh Wifi Sricam SP014 Onvif 720P">Camera IP thông minh Wifi Sricam SP014 Onvif 720P</a></h2>
          <span><code>1,490,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1555-camera-ip-thong-minh-wifi-sricam-sp011" title="Camera IP thông minh Wifi Sricam SP011"><img src="public/kingtech/images/p/camera-ip-thong-minh-wifi-sp011-1.jpg" alt="Camera IP thông minh Wifi Sricam SP011"></a></figure>
          <h2><a href="/p/1555-camera-ip-thong-minh-wifi-sricam-sp011" title="Camera IP thông minh Wifi Sricam SP011">Camera IP thông minh Wifi Sricam SP011</a></h2>
          <span><code>1,490,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1471-camera-ip-thong-minh-wifi-siepem-ip-s6211y" title="Camera IP thông minh Wifi Siepem IP S6211Y"><img src="public/kingtech/images/p/camera-ip-thong-minh-wifi-siepem-ip-s6211y-0.jpg" alt="Camera IP thông minh Wifi Siepem IP S6211Y"></a></figure>
          <h2><a href="/p/1471-camera-ip-thong-minh-wifi-siepem-ip-s6211y" title="Camera IP thông minh Wifi Siepem IP S6211Y">Camera IP thông minh Wifi Siepem IP S6211Y</a></h2>
          <span><code>1,390,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/355-camera-the-thao-sjcam" title="Camera thể thao Sjcam">Camera thể thao Sjcam</a></label>
          <span></span> </aside>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/977-camera-the-thao-sjcam-sj5000-wifi" title="Camera thể thao SJCAM SJ5000 Wifi"><img src="public/kingtech/images/p/977-camera-the-thao-sjcam-sj5000-wifi.jpg" alt="Camera thể thao SJCAM SJ5000 Wifi"></a></figure>
          <h2><a href="/p/977-camera-the-thao-sjcam-sj5000-wifi" title="Camera thể thao SJCAM SJ5000 Wifi">Camera thể thao SJCAM SJ5000 Wifi</a></h2>
          <span><code>3,190,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/728-camera-the-thao-sjcam-sj5000-plus" title="Camera thể thao SJCAM SJ5000 Plus"><img src="public/kingtech/images/p/728-camera-the-thao-sjcam-sj5000-plus.jpg" alt="Camera thể thao SJCAM SJ5000 Plus"></a></figure>
          <h2><a href="/p/728-camera-the-thao-sjcam-sj5000-plus" title="Camera thể thao SJCAM SJ5000 Plus">Camera thể thao SJCAM SJ5000 Plus</a></h2>
          <span><code>3,890,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/730-camera-the-thao-sjcam-m10-wifi-mini" title="Camera thể thao SJCAM M10 WiFi Mini"><img src="public/kingtech/upload/sanpham/sjcam-m10-wifi-mini-cube-action-camera-standard-version-15-inch-waterproof-hd-camcorder-car-dvr-6475.jpg" alt="Camera thể thao SJCAM M10 WiFi Mini"></a></figure>
          <h2><a href="/p/730-camera-the-thao-sjcam-m10-wifi-mini" title="Camera thể thao SJCAM M10 WiFi Mini">Camera thể thao SJCAM M10 WiFi Mini</a></h2>
          <span><code>2,390,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1752-xạc-doi-sjcam-m20" title="Xạc Đôi Sjcam M20"><img src="public/kingtech/images/p/xạc-doi-sjcam-m20-chính-hãng-1.jpg" alt="Xạc Đôi Sjcam M20"></a></figure>
          <h2><a href="/p/1752-xạc-doi-sjcam-m20" title="Xạc Đôi Sjcam M20">Xạc Đôi Sjcam M20</a></h2>
          <span><code>200,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/726-camera-the-thao-sjcam-sj4000-wifi" title="Camera thể thao SJCAM SJ4000 WiFi"><img src="public/kingtech/images/p/726-camera-the-thao-sjcam-sj4000-wifi.jpg" alt="Camera thể thao SJCAM SJ4000 WiFi"></a></figure>
          <h2><a href="/p/726-camera-the-thao-sjcam-sj4000-wifi" title="Camera thể thao SJCAM SJ4000 WiFi">Camera thể thao SJCAM SJ4000 WiFi</a></h2>
          <span><code>2,290,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_center_add">
            <a href="/p/1727-dang-cap-hd-box-d8-pro" target="_blank"><img src="public/kingtech/images/links/httpdangcapdigitalcomp1727-dang-cap-hd-box-d8-pro-113.jpg" alt="/p/1727-dang-cap-hd-box-d8-pro"></a>
          </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/384-xe-thang-bang" title="Xe thăng bằng">Xe thăng bằng</a></label>
          <span></span> </aside>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/1537-smart-balance-wheel-smw-10s" title="SMART BALANCE WHEEL SMW-10S"><img src="public/kingtech/images/p/smart-balance-whell-smw-10s-0.jpg" alt="SMART BALANCE WHEEL SMW-10S"></a></figure>
          <h2><a href="/p/1537-smart-balance-wheel-smw-10s" title="SMART BALANCE WHEEL SMW-10S">SMART BALANCE WHEEL SMW-10S</a></h2>
          <span><code>6,990,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1549-smart-balance-wheel-hismart-sbw-n7" title="SMART BALANCE WHEEL HISMART SBW-N7"><img src="public/kingtech/images/p/smart-balance-wheel-hismart-sbw-n7-1.jpg" alt="SMART BALANCE WHEEL HISMART SBW-N7"></a></figure>
          <h2><a href="/p/1549-smart-balance-wheel-hismart-sbw-n7" title="SMART BALANCE WHEEL HISMART SBW-N7">SMART BALANCE WHEEL HISMART SBW-N7</a></h2>
          <span><code>5,900,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1526-op-lung-nhua-abs-cho-xe-tu-can-bang-65-inches" title="Ốp lưng nhựa ABS cho xe tự cân bằng 6,5 Inches"><img src="public/kingtech/images/p/op-lung-nhua-abs-cho-xe-tu-can-bang-65-inches-0.jpg" alt="Ốp lưng nhựa ABS cho xe tự cân bằng 6,5 Inches"></a></figure>
          <h2><a href="/p/1526-op-lung-nhua-abs-cho-xe-tu-can-bang-65-inches" title="Ốp lưng nhựa ABS cho xe tự cân bằng 6,5 Inches">Ốp lưng nhựa ABS cho xe tự cân bằng 6,5 ...</a></h2>
          <span><code>900,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1536-smart-balance-wheel-sbw-80s-plus" title="SMART BALANCE WHEEL SBW-80S PLUS"><img src="public/kingtech/images/p/smart-balance-whell-smw-80s-plus-0.jpg" alt="SMART BALANCE WHEEL SBW-80S PLUS"></a></figure>
          <h2><a href="/p/1536-smart-balance-wheel-sbw-80s-plus" title="SMART BALANCE WHEEL SBW-80S PLUS">SMART BALANCE WHEEL SBW-80S PLUS</a></h2>
          <span><code>6,490,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1545-smart-balance-wheel-hismart-sbw-10" title="SMART BALANCE WHEEL HISMART SBW-10"><img src="public/kingtech/images/p/smart-balance-whell-smw-10-0.jpg" alt="SMART BALANCE WHEEL HISMART SBW-10"></a></figure>
          <h2><a href="/p/1545-smart-balance-wheel-hismart-sbw-10" title="SMART BALANCE WHEEL HISMART SBW-10">SMART BALANCE WHEEL HISMART SBW-10</a></h2>
          <span><code>6,490,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/385-thiet-bi-nha-thong-minh" title="Thiết bị nhà thông minh">Thiết bị nhà thông minh</a></label>
          <span></span> </aside>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/1423-cong-tac-thong-minh-5a-smart-switch-swp06-1-loop-white" title="Công tắc thông minh 5A Smart Switch SWP06 1 Loop White"><img src="public/kingtech/images/p/cong-tac-thong-minh-5a-smart-switch-swp06-1-loop-white-3.jpg" alt="Công tắc thông minh 5A Smart Switch SWP06 1 Loop White"></a></figure>
          <h2><a href="/p/1423-cong-tac-thong-minh-5a-smart-switch-swp06-1-loop-white" title="Công tắc thông minh 5A Smart Switch SWP06 1 Loop White">Công tắc thông minh 5A Smart Switch SWP06 1 ...</a></h2>
          <span><code>1,050,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1416-camera-ip-gdx-z6-hd-thong-minh-dam-thoai-2-chieu" title="Camera IP GDX Z6 HD thông minh đàm thoại 2 chiều"><img src="public/kingtech/images/p/camera-ip-gdx-z6-hd-thong-minh-dam-thoai-2-chieu-0.jpg" alt="Camera IP GDX Z6 HD thông minh đàm thoại 2 chiều"></a></figure>
          <h2><a href="/p/1416-camera-ip-gdx-z6-hd-thong-minh-dam-thoai-2-chieu" title="Camera IP GDX Z6 HD thông minh đàm thoại 2 chiều">Camera IP GDX Z6 HD thông minh đàm thoại 2 ...</a></h2>
          <span><code>1,399,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1422-cong-tac-thong-minh-5a-smart-switch-swp06-1-loop-black" title="Công tắc thông minh 5A Smart Switch SWP06 1 Loop Black"><img src="public/kingtech/images/p/cong-tac-thong-minh-5a-smart-switch-swp06-4.jpg" alt="Công tắc thông minh 5A Smart Switch SWP06 1 Loop Black"></a></figure>
          <h2><a href="/p/1422-cong-tac-thong-minh-5a-smart-switch-swp06-1-loop-black" title="Công tắc thông minh 5A Smart Switch SWP06 1 Loop Black">Công tắc thông minh 5A Smart Switch SWP06 1 ...</a></h2>
          <span><code>1,050,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1421-cong-tac-thong-minh-5a-smart-switch-swp06-1-loop-black" title="Công tắc thông minh 5A Smart Switch SWP06 1 Loop Black"><img src="public/kingtech/images/p/cong-tac-thong-minh-5a-smart-switch-swp06-–-1-loop-black-3.jpg" alt="Công tắc thông minh 5A Smart Switch SWP06 1 Loop Black"></a></figure>
          <h2><a href="/p/1421-cong-tac-thong-minh-5a-smart-switch-swp06-1-loop-black" title="Công tắc thông minh 5A Smart Switch SWP06 1 Loop Black">Công tắc thông minh 5A Smart Switch SWP06 1 ...</a></h2>
          <span><code>1,050,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1409-o-cam-hen-gio-so-tge2b" title="Ổ Cắm Hẹn Giờ Số TGE2B"><img src="public/kingtech/images/p/o-cam-hen-gio-so-tge2b-1.jpg" alt="Ổ Cắm Hẹn Giờ Số TGE2B"></a></figure>
          <h2><a href="/p/1409-o-cam-hen-gio-so-tge2b" title="Ổ Cắm Hẹn Giờ Số TGE2B">Ổ Cắm Hẹn Giờ Số TGE2B</a></h2>
          <span><code>550,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_center_add">
            <a href="/p/1727-dang-cap-hd-box-d8-pro" target="_blank"><img src="public/kingtech/images/links/httpdangcapdigitalcomp1727-dang-cap-hd-box-d8-pro-115.jpg" alt="/p/1727-dang-cap-hd-box-d8-pro"></a>
          </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/408-may-hut-bui-thong-minh" title="Máy hút bụi thông minh">Máy hút bụi thông minh</a></label>
          <span></span> </aside>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/1582-may-hut-bui-tu-dong-chuwi-ilife-v5-plus" title="Máy hút bụi tự động Chuwi iLife V5 Plus"><img src="public/kingtech/images/p/may-hut-bui-tu-dong-chuwi-ilive-v5-plus-0.jpg" alt="Máy hút bụi tự động Chuwi iLife V5 Plus"></a></figure>
          <h2><a href="/p/1582-may-hut-bui-tu-dong-chuwi-ilife-v5-plus" title="Máy hút bụi tự động Chuwi iLife V5 Plus">Máy hút bụi tự động Chuwi iLife V5 Plus</a></h2>
          <span><code>3,650,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1581-may-hut-bui-tu-dong-chuwi-ilife-v7" title="Máy hút bụi tự động Chuwi iLife V7"><img src="public/kingtech/images/p/may-hut-bui-tu-dong-chuwi-ilive-v7-0.jpg" alt="Máy hút bụi tự động Chuwi iLife V7"></a></figure>
          <h2><a href="/p/1581-may-hut-bui-tu-dong-chuwi-ilife-v7" title="Máy hút bụi tự động Chuwi iLife V7">Máy hút bụi tự động Chuwi iLife V7</a></h2>
          <span><code>3,950,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1728-robot-hut-bui-vbot-s30c" title="Robot hút bụi VBOT S30C"><img src="public/kingtech/images/p/robot-hut-bui-vbot-s30c-1.jpg" alt="Robot hút bụi VBOT S30C"></a></figure>
          <h2><a href="/p/1728-robot-hut-bui-vbot-s30c" title="Robot hút bụi VBOT S30C">Robot hút bụi VBOT S30C</a></h2>
          <span><code>2,800,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1583-may-hut-bui-tu-dong-vbot-t270" title="Máy hút bụi tự động VBOT T270"><img src="public/kingtech/images/p/may-hut-bui-tu-dong-vbot-t270-0.jpg" alt="Máy hút bụi tự động VBOT T270"></a></figure>
          <h2><a href="/p/1583-may-hut-bui-tu-dong-vbot-t270" title="Máy hút bụi tự động VBOT T270">Máy hút bụi tự động VBOT T270</a></h2>
          <span><code>2,500,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1584-may-hut-bui-tu-dong-vbot-t271" title="Máy hút bụi tự động VBOT T271"><img src="public/kingtech/images/p/may-hut-bui-tu-dong-vbot-t271-0.jpg" alt="Máy hút bụi tự động VBOT T271"></a></figure>
          <h2><a href="/p/1584-may-hut-bui-tu-dong-vbot-t271" title="Máy hút bụi tự động VBOT T271">Máy hút bụi tự động VBOT T271</a></h2>
          <span><code>3,200,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/409-dinh-vi-xuyen-viet" title="Định Vị Xuyên Việt">Định Vị Xuyên Việt</a></label>
          <span></span> </aside>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/1691-dinh-vi-xuyen-viet-xv100-gps" title="Định vị xuyên việt XV100 GPS"><img src="public/kingtech/images/p/dinh-vi-xuyen-viet-lk100-gps-0.jpg" alt="Định vị xuyên việt XV100 GPS"></a></figure>
          <h2><a href="/p/1691-dinh-vi-xuyen-viet-xv100-gps" title="Định vị xuyên việt XV100 GPS">Định vị xuyên việt XV100 GPS</a></h2>
          <span><code>1,490,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1695-dinh-vi-xuyen-viet-xv209c" title="Định Vị Xuyên Việt XV209C"><img src="public/kingtech/images/p/dinh-vi-xuyen-viet-lk209c-0.jpg" alt="Định Vị Xuyên Việt XV209C"></a></figure>
          <h2><a href="/p/1695-dinh-vi-xuyen-viet-xv209c" title="Định Vị Xuyên Việt XV209C">Định Vị Xuyên Việt XV209C</a></h2>
          <span><code>1,850,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1696-dinh-vi-xuyen-viet-xv108-gps" title="Định vị xuyên việt XV108 GPS"><img src="public/kingtech/images/p/dinh-vi-xuyen-viet-lk108-gps-0.jpg" alt="Định vị xuyên việt XV108 GPS"></a></figure>
          <h2><a href="/p/1696-dinh-vi-xuyen-viet-xv108-gps" title="Định vị xuyên việt XV108 GPS">Định vị xuyên việt XV108 GPS</a></h2>
          <span><code>1,290,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1689-dinh-vi-xuyen-viet-xv106-gps" title="Định vị xuyên việt XV106 GPS"><img src="public/kingtech/images/p/dinh-vi-xuyen-viet-lk106-gps-6.jpg" alt="Định vị xuyên việt XV106 GPS"></a></figure>
          <h2><a href="/p/1689-dinh-vi-xuyen-viet-xv106-gps" title="Định vị xuyên việt XV106 GPS">Định vị xuyên việt XV106 GPS</a></h2>
          <span><code>1,450,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1694-dinh-vi-xuyen-viet-xv209b-gps" title="Định vị xuyên việt XV209B GPS"><img src="public/kingtech/images/p/dinh-vi-xuyen-viet-lk209b-gps-0.jpg" alt="Định vị xuyên việt XV209B GPS"></a></figure>
          <h2><a href="/p/1694-dinh-vi-xuyen-viet-xv209b-gps" title="Định vị xuyên việt XV209B GPS">Định vị xuyên việt XV209B GPS</a></h2>
          <span><code>1,790,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_center_add">
            <a href="/c/329-sjcam" target="_blank"><img src="public/kingtech/images/links/httpdangcapdigitalcomc329-sjcam-45.gif" alt="/c/329-sjcam"></a>
          </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/326-phu-kien-android-box" title="Phụ kiện Android Box">Phụ kiện Android Box</a></label>
          <span></span> </aside>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/1183-ban-phim-khong-day-air-mouse-v2" title="Bàn Phím Không Dây Air Mouse V2"><img src="public/kingtech/images/p/1183-ban-phim-khong-day-air-mouse-v2.jpg" alt="Bàn Phím Không Dây Air Mouse V2"></a></figure>
          <h2><a href="/p/1183-ban-phim-khong-day-air-mouse-v2" title="Bàn Phím Không Dây Air Mouse V2">Bàn Phím Không Dây Air Mouse V2</a></h2>
          <span><code>290,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1310-ban-phim-chuot-bay-km800" title="Bàn Phím Chuột Bay KM800"><img src="public/kingtech/images/p/1310-ban-phim-chuot-bay-km800.jpg" alt="Bàn Phím Chuột Bay KM800"></a></figure>
          <h2><a href="/p/1310-ban-phim-chuot-bay-km800" title="Bàn Phím Chuột Bay KM800">Bàn Phím Chuột Bay KM800</a></h2>
          <span><code>450,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/413-ban-phim-khong-day-rii-i24" title="Bàn phím không dây Rii I24"><img src="public/kingtech/upload/sanpham/29-4135.jpg" alt="Bàn phím không dây Rii I24"></a></figure>
          <h2><a href="/p/413-ban-phim-khong-day-rii-i24" title="Bàn phím không dây Rii I24">Bàn phím không dây Rii I24</a></h2>
          <span><code>790,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1184-chuot-khong-day-dell" title="Chuột không dây DELL"><img src="public/kingtech/images/p/1184-chuot-khong-day-dell.jpg" alt="Chuột không dây DELL"></a></figure>
          <h2><a href="/p/1184-chuot-khong-day-dell" title="Chuột không dây DELL">Chuột không dây DELL</a></h2>
          <span><code>150,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/511-ban-phim-rii-mwk10" title="Bàn phím Rii mwk10"><img src="public/kingtech/upload/sanpham/RII_RT-MWK10-2-(1)-9807.jpg" alt="Bàn phím Rii mwk10"></a></figure>
          <h2><a href="/p/511-ban-phim-rii-mwk10" title="Bàn phím Rii mwk10">Bàn phím Rii mwk10</a></h2>
          <span><code>750,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/332-android-box-gia-re" title="Android Box Gía Rẻ">Android Box Gía Rẻ</a></label>
          <span></span> </aside>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/1726-android-tv-box-m8s-plus-android-51-amlogic-s905-2g" title="Android TV Box M8S Plus Android 5.1 Amlogic S905 2G"><img src="public/kingtech/images/p/android-tv-box-m8s-plus-android-51-amlogic-s905-2g-0.jpg" alt="Android TV Box M8S Plus Android 5.1 Amlogic S905 2G"></a></figure>
          <h2><a href="/p/1726-android-tv-box-m8s-plus-android-51-amlogic-s905-2g" title="Android TV Box M8S Plus Android 5.1 Amlogic S905 2G">Android TV Box M8S Plus Android 5.1 Amlogic S905 ...</a></h2>
          <span><code>1,590,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1482-android-tv-box-q-box-loi-8-s905-ram-2gb-rom-16-gb" title="ANDROID TV BOX Q-BOX, Lõi 8 S905, Ram 2Gb, Rom 16 Gb"><img src="public/kingtech/images/p/android-tv-box-q-box-loi-8-s905-ram-2gb-rom-16-gb-0.jpg" alt="ANDROID TV BOX Q-BOX, Lõi 8 S905, Ram 2Gb, Rom 16 Gb"></a></figure>
          <h2><a href="/p/1482-android-tv-box-q-box-loi-8-s905-ram-2gb-rom-16-gb" title="ANDROID TV BOX Q-BOX, Lõi 8 S905, Ram 2Gb, Rom 16 Gb">ANDROID TV BOX Q-BOX, Lõi 8 S905, Ram 2Gb, Rom ...</a></h2>
          <span><code>2,450,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1476-android-tv-box-mxr-4k-mxr-rk3229-quad-core-ram1g-8g-rom" title="Android Tv Box MXR 4K MXR RK3229 Quad Core RAM1G 8G ROM"><img src="public/kingtech/images/p/android-tv-box-mxr-4k-mxr-rk3229-quad-core-ram1g-8g-rom-5.jpg" alt="Android Tv Box MXR 4K MXR RK3229 Quad Core RAM1G 8G ROM"></a></figure>
          <h2><a href="/p/1476-android-tv-box-mxr-4k-mxr-rk3229-quad-core-ram1g-8g-rom" title="Android Tv Box MXR 4K MXR RK3229 Quad Core RAM1G 8G ROM">Android Tv Box MXR 4K MXR RK3229 Quad Core RAM1G ...</a></h2>
          <span><code>999,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1499-android-tv-box-mx-plus-quad-core-amlogic-s905-1g--8g-rom" title="Android TV Box MX Plus Quad Core Amlogic S905 1G / 8G ROM"><img src="public/kingtech/images/p/android-tv-box-mx-plus-quad-core-amlogic-s905-1g--8g-rom-0.jpg" alt="Android TV Box MX Plus Quad Core Amlogic S905 1G / 8G ROM"></a></figure>
          <h2><a href="/p/1499-android-tv-box-mx-plus-quad-core-amlogic-s905-1g--8g-rom" title="Android TV Box MX Plus Quad Core Amlogic S905 1G / 8G ROM">Android TV Box MX Plus Quad Core Amlogic S905 1G ...</a></h2>
          <span><code>1,590,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1738-may-choi-game-razer-forge-tv-bundle" title="Máy chơi game Razer Forge TV Bundle"><img src="public/kingtech/images/p/razer-forge-tv-bundle-1.jpg" alt="Máy chơi game Razer Forge TV Bundle"></a></figure>
          <h2><a href="/p/1738-may-choi-game-razer-forge-tv-bundle" title="Máy chơi game Razer Forge TV Bundle">Máy chơi game Razer Forge TV Bundle</a></h2>
          <span><code>2,800,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/379-hismart" title="Hismart">Hismart</a></label>
          <span></span> </aside>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/1162-dong-ho-thong-minh-hismart-hsw-09-ban-sao-apple-watch" title="Đồng hồ thông minh Hismart HSW-09, Bản sao Apple Watch"><img src="public/kingtech/images/p/1162-dong-ho-thong-minh-hismart-hsw-09.jpg" alt="Đồng hồ thông minh Hismart HSW-09, Bản sao Apple Watch"></a></figure>
          <h2><a href="/p/1162-dong-ho-thong-minh-hismart-hsw-09-ban-sao-apple-watch" title="Đồng hồ thông minh Hismart HSW-09, Bản sao Apple Watch">Đồng hồ thông minh Hismart HSW-09, Bản ...</a></h2>
          <span><code>1,190,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1353-camera-ip-hismart-pro-09-hd" title="Camera IP Hismart Pro 09 HD"><img src="public/kingtech/images/p/camera-ip-hismart-pro-09-6.jpg" alt="Camera IP Hismart Pro 09 HD"></a></figure>
          <h2><a href="/p/1353-camera-ip-hismart-pro-09-hd" title="Camera IP Hismart Pro 09 HD">Camera IP Hismart Pro 09 HD</a></h2>
          <span><code>1,500,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1319-loa-bluetooth-hismart-hs-1001" title="Loa Bluetooth Hismart HS 1001"><img src="public/kingtech/images/p/1319-loa-bluetooth-hismart-hs01.jpg" alt="Loa Bluetooth Hismart HS 1001"></a></figure>
          <h2><a href="/p/1319-loa-bluetooth-hismart-hs-1001" title="Loa Bluetooth Hismart HS 1001">Loa Bluetooth Hismart HS 1001</a></h2>
          <span><code>390,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1322-loa-bluetooth-hismart-hs-1004" title="Loa Bluetooth Hismart HS 1004"><img src="public/kingtech/images/p/loa-bluetooth-hismart-hs-1004-10.jpg" alt="Loa Bluetooth Hismart HS 1004"></a></figure>
          <h2><a href="/p/1322-loa-bluetooth-hismart-hs-1004" title="Loa Bluetooth Hismart HS 1004">Loa Bluetooth Hismart HS 1004</a></h2>
          <span><code>600,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1159-dong-ho-thong-minh-hismart-hsw-08" title="Đồng hồ thông minh Hismart HSW 08"><img src="public/kingtech/images/p/1159-dong-ho-thong-minh-smartwatch-dz09.jpg" alt="Đồng hồ thông minh Hismart HSW 08"></a></figure>
          <h2><a href="/p/1159-dong-ho-thong-minh-hismart-hsw-08" title="Đồng hồ thông minh Hismart HSW 08">Đồng hồ thông minh Hismart HSW 08</a></h2>
          <span><code>1,150,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/334-smart-watch" title="Smart Watch">Smart Watch</a></label>
          <span></span> </aside>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/1116-dong-ho-thong-minh-the-thao-iwown-i5" title="Đồng hồ thông minh thể thao Iwown i5"><img src="public/kingtech/images/p/1116-dong-ho-thong-minh-the-thao--iwown-i5.jpg" alt="Đồng hồ thông minh thể thao Iwown i5"></a></figure>
          <h2><a href="/p/1116-dong-ho-thong-minh-the-thao-iwown-i5" title="Đồng hồ thông minh thể thao Iwown i5">Đồng hồ thông minh thể thao Iwown i5</a></h2>
          <span><code>400,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1153-dong-ho-thong-minh-smartwatch-u8" title="Đồng hồ thông minh Smartwatch U8"><img src="public/kingtech/images/p/1153-dong-ho-thong-minh-smartwatch-u8.JPG" alt="Đồng hồ thông minh Smartwatch U8"></a></figure>
          <h2><a href="/p/1153-dong-ho-thong-minh-smartwatch-u8" title="Đồng hồ thông minh Smartwatch U8">Đồng hồ thông minh Smartwatch U8</a></h2>
          <span><code>370,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1159-dong-ho-thong-minh-hismart-hsw-08" title="Đồng hồ thông minh Hismart HSW 08"><img src="public/kingtech/images/p/1159-dong-ho-thong-minh-smartwatch-dz09.jpg" alt="Đồng hồ thông minh Hismart HSW 08"></a></figure>
          <h2><a href="/p/1159-dong-ho-thong-minh-hismart-hsw-08" title="Đồng hồ thông minh Hismart HSW 08">Đồng hồ thông minh Hismart HSW 08</a></h2>
          <span><code>1,150,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1109-dong-ho-deo-tay-thong-minh-smart-watch-ukoeo-uk9" title="Đồng hồ đeo tay thông minh Smart Watch UKOEO UK9"><img src="public/kingtech/images/p/1109-dong-ho-deo-tay-thong-minh-smartwatch-ukoeo-uk9.jpg" alt="Đồng hồ đeo tay thông minh Smart Watch UKOEO UK9"></a></figure>
          <h2><a href="/p/1109-dong-ho-deo-tay-thong-minh-smart-watch-ukoeo-uk9" title="Đồng hồ đeo tay thông minh Smart Watch UKOEO UK9">Đồng hồ đeo tay thông minh Smart Watch ...</a></h2>
          <span><code>1,350,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1151-dong-ho-led-cam-ung-thoi-trang-cuc-dep-mau-moi-2015" title="Đồng hồ led cảm ứng thời trang - Cực đẹp - Mẫu mới 2015"><img src="public/kingtech/images/p/1151-dong-ho-led-cam-ung-thoi-trang-cuc-dep-mau-moi-2015.jpg" alt="Đồng hồ led cảm ứng thời trang - Cực đẹp - Mẫu mới 2015"></a></figure>
          <h2><a href="/p/1151-dong-ho-led-cam-ung-thoi-trang-cuc-dep-mau-moi-2015" title="Đồng hồ led cảm ứng thời trang - Cực đẹp - Mẫu mới 2015">Đồng hồ led cảm ứng thời trang - Cực ...</a></h2>
          <span><code>99,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/335-xiaomi" title="Xiaomi">Xiaomi</a></label>
          <span></span> </aside>
                <big>
                <h2><a href="/c/391-phu-kien-camera-the-thao-xiaomi-yi" title="Phụ Kiện Camera Thể Thao Xiaomi Yi">Phụ Kiện Camera Thể Thao Xiaomi Yi (3)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/388-pin-tieu-xiaomi" title="Pin Tiểu Xiaomi">Pin Tiểu Xiaomi (1)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/337-tai-nghe-xiaomi" title="Tai Nghe XiaoMi">Tai Nghe XiaoMi (5)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/339-camera-xiaomi-yi" title="Camera Xiaomi Yi">Camera Xiaomi Yi (8)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/341-o-cam-thong-minh" title="Ổ Cắm Thông Minh">Ổ Cắm Thông Minh (3)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/351-android-tv-box" title="Android TV Box">Android TV Box (2)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/374-thiet-bi-do-huyet-ap-di-dong-ihealth" title="Thiết Bị Đo Huyết Áp Di Động Ihealth">Thiết Bị Đo Huyết Áp Di Động Ihealth (1)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/406-phu-kien-gopro" title="Phụ Kiện GoPro">Phụ Kiện GoPro (0)</a></h2>
        <span class="cate_line"></span>
                </big>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/1122-xiaomi-power-bank-10400" title="XiaoMi Power Bank 10400"><img src="public/kingtech/images/p/1122-xiaomi-power-bank-10400.jpg" alt="XiaoMi Power Bank 10400"></a></figure>
          <h2><a href="/p/1122-xiaomi-power-bank-10400" title="XiaoMi Power Bank 10400">XiaoMi Power Bank 10400</a></h2>
          <span><code>380,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1126-xiaomi-powerbank-5000-chinh-hang" title="Xiaomi PowerBank 5000 Chính Hãng"><img src="public/kingtech/images/p/xiaomi-powerbank-5000-chinh-hang-1.jpg" alt="Xiaomi PowerBank 5000 Chính Hãng"></a></figure>
          <h2><a href="/p/1126-xiaomi-powerbank-5000-chinh-hang" title="Xiaomi PowerBank 5000 Chính Hãng">Xiaomi PowerBank 5000 Chính Hãng</a></h2>
          <span><code>290,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1452-camera-hanh-trinh-oto-xiaomi-yi-chinh-hang" title="Camera Hành Trình Ôtô Xiaomi YI Chính Hãng"><img src="public/kingtech/images/p/camera-hanh-trinh-oto-xiaomi-yi-chinh-hang-2.jpg" alt="Camera Hành Trình Ôtô Xiaomi YI Chính Hãng"></a></figure>
          <h2><a href="/p/1452-camera-hanh-trinh-oto-xiaomi-yi-chinh-hang" title="Camera Hành Trình Ôtô Xiaomi YI Chính Hãng">Camera Hành Trình Ôtô Xiaomi YI Chính Hãng</a></h2>
          <span><code>2,190,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1664-loa-bluetooth-xiaomi-version-2" title="Loa Bluetooth Xiaomi Version 2"><img src="public/kingtech/images/p/loa-bluetooth-xiaomi-version-2-0.jpg" alt="Loa Bluetooth Xiaomi Version 2"></a></figure>
          <h2><a href="/p/1664-loa-bluetooth-xiaomi-version-2" title="Loa Bluetooth Xiaomi Version 2">Loa Bluetooth Xiaomi Version 2</a></h2>
          <span><code>690,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1705-vong-deo-tay-thong-minh-wristband-fitbit" title="Vòng đeo tay thông minh Wristband Fitbit"><img src="public/kingtech/images/p/vong-deo-tay-thong-minh-wristband-fitbit-1.jpg" alt="Vòng đeo tay thông minh Wristband Fitbit"></a></figure>
          <h2><a href="/p/1705-vong-deo-tay-thong-minh-wristband-fitbit" title="Vòng đeo tay thông minh Wristband Fitbit">Vòng đeo tay thông minh Wristband Fitbit</a></h2>
          <span><code>650,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/361-blutooth-ket-noi-am-li" title="Blutooth Kết Nối Âm Li">Blutooth Kết Nối Âm Li</a></label>
          <span></span> </aside>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/1250-thiet-bi-ket-noi-blutooth-cho-ampli-h166" title="Thiết Bị Kết Nối Blutooth cho Ampli H166"><img src="public/kingtech/images/p/1250-wireless-blutooth-music-receiverthiet-bi-ket-noi-blutooth-cho-ampli-h166.jpg" alt="Thiết Bị Kết Nối Blutooth cho Ampli H166"></a></figure>
          <h2><a href="/p/1250-thiet-bi-ket-noi-blutooth-cho-ampli-h166" title="Thiết Bị Kết Nối Blutooth cho Ampli H166">Thiết Bị Kết Nối Blutooth cho Ampli H166</a></h2>
          <span><code>350,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1244-blutooth-bt3508thiet-bi-ket-noi-blutooth-cho-ampli-bt3508" title="Blutooth Bt3508/Thiết Bị Kết Nối Blutooth cho Ampli BT3508"><img src="public/kingtech/images/p/1244-blutooth-bt3508thiet-bi-ket-noi-blutooth-cho-ampli-bt3508.jpg" alt="Blutooth Bt3508/Thiết Bị Kết Nối Blutooth cho Ampli BT3508"></a></figure>
          <h2><a href="/p/1244-blutooth-bt3508thiet-bi-ket-noi-blutooth-cho-ampli-bt3508" title="Blutooth Bt3508/Thiết Bị Kết Nối Blutooth cho Ampli BT3508">Blutooth Bt3508/Thiết Bị Kết Nối Blutooth ...</a></h2>
          <span><code>400,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1249-2-in-1-usb-charging-blutooth-music-receiverthiet-bi-ket-noi-blutooth-cho-ampli-ts-btuc01" title="2 in 1 USB Charging Blutooth Music Receiver/Thiết Bị Kết Nối Blutooth cho Ampli TS-BTUC01"><img src="public/kingtech/images/p/1249-2-in-1-usb-charging-blutooth-music-receiverthiet-bi-ket-noi-blutooth-cho-ampli-ts-btuc01.jpg" alt="2 in 1 USB Charging Blutooth Music Receiver/Thiết Bị Kết Nối Blutooth cho Ampli TS-BTUC01"></a></figure>
          <h2><a href="/p/1249-2-in-1-usb-charging-blutooth-music-receiverthiet-bi-ket-noi-blutooth-cho-ampli-ts-btuc01" title="2 in 1 USB Charging Blutooth Music Receiver/Thiết Bị Kết Nối Blutooth cho Ampli TS-BTUC01">2 in 1 USB Charging Blutooth Music ...</a></h2>
          <span><code>390,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1262-thiet-bi-ket-noi-blutoooth-cho-ampli-ts-bt35f02" title="Thiết Bị Kết Nối Blutoooth cho Ampli TS-BT35F02"><img src="public/kingtech/images/p/1262-blutooth-audio-transmitterthiet-bi-ket-noi-blutoooth-cho-ampli-ts-bt35f02.jpg" alt="Thiết Bị Kết Nối Blutoooth cho Ampli TS-BT35F02"></a></figure>
          <h2><a href="/p/1262-thiet-bi-ket-noi-blutoooth-cho-ampli-ts-bt35f02" title="Thiết Bị Kết Nối Blutoooth cho Ampli TS-BT35F02">Thiết Bị Kết Nối Blutoooth cho Ampli ...</a></h2>
          <span><code>700,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1253-thiet-bi-ket-noi-blutooth-cho-ampli-h366t" title="Thiết Bị Kết Nối Blutooth cho Ampli H366T"><img src="public/kingtech/images/p/1253-blutooth-music-receiverthiet-bi-ket-noi-blutooth-cho-ampli-h266.jpg" alt="Thiết Bị Kết Nối Blutooth cho Ampli H366T"></a></figure>
          <h2><a href="/p/1253-thiet-bi-ket-noi-blutooth-cho-ampli-h366t" title="Thiết Bị Kết Nối Blutooth cho Ampli H366T">Thiết Bị Kết Nối Blutooth cho Ampli H366T</a></h2>
          <span><code>500,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/214-den-pin-sieu-sang" title="Đèn pin siêu sáng">Đèn pin siêu sáng</a></label>
          <span></span> </aside>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/329-den-pin-ultrafire-c10" title="Đèn pin Ultrafire C10"><img src="public/kingtech/upload/sanpham/2-1726.jpg" alt="Đèn pin Ultrafire C10"></a></figure>
          <h2><a href="/p/329-den-pin-ultrafire-c10" title="Đèn pin Ultrafire C10">Đèn pin Ultrafire C10</a></h2>
          <span><code>550,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/311-den-pin-shadow-jm26" title="Đèn pin SHADOW JM26 "><img src="public/kingtech/upload/sanpham/1-8828.jpg" alt="Đèn pin SHADOW JM26 "></a></figure>
          <h2><a href="/p/311-den-pin-shadow-jm26" title="Đèn pin SHADOW JM26 ">Đèn pin SHADOW JM26</a></h2>
          <span><code>1,350,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1027-den-pin-tu-ve-bong-led-wasing-wfl-aa2l-sieu-sang" title="Đèn pin tự vệ bóng led Wasing WFL-AA2L siêu sáng"><img src="public/kingtech/images/p/1027-den-pin-tu-ve-bong-led-wasing-wfl-aa2l-sieu-sang.jpg" alt="Đèn pin tự vệ bóng led Wasing WFL-AA2L siêu sáng"></a></figure>
          <h2><a href="/p/1027-den-pin-tu-ve-bong-led-wasing-wfl-aa2l-sieu-sang" title="Đèn pin tự vệ bóng led Wasing WFL-AA2L siêu sáng">Đèn pin tự vệ bóng led Wasing WFL-AA2L ...</a></h2>
          <span><code>460,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/309-den-pin-ultrafire-c8-ultrafire-c8" title="Đèn Pin UltraFire C8| UltraFire C8"><img src="public/kingtech/upload/sanpham/4-4516.jpg" alt="Đèn Pin UltraFire C8| UltraFire C8"></a></figure>
          <h2><a href="/p/309-den-pin-ultrafire-c8-ultrafire-c8" title="Đèn Pin UltraFire C8| UltraFire C8">Đèn Pin UltraFire C8| UltraFire C8</a></h2>
          <span><code>390,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1095-den-doi-dau-den-deo-tran-10w-a3" title="Đèn đội đầu, đèn đeo trán 10W A3"><img src="public/kingtech/images/p/1095-den-doi-dau-den-deo-tran-10w-a3.gif" alt="Đèn đội đầu, đèn đeo trán 10W A3"></a></figure>
          <h2><a href="/p/1095-den-doi-dau-den-deo-tran-10w-a3" title="Đèn đội đầu, đèn đeo trán 10W A3">Đèn đội đầu, đèn đeo trán 10W A3</a></h2>
          <span><code>170,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/98-loa-bluetooth" title="Loa Bluetooth">Loa Bluetooth</a></label>
          <span></span> </aside>
                <big>
                <h2><a href="/c/310-loa-bluetooth" title="Loa bluetooth">Loa bluetooth (45)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/307-harman-kardon" title="Harman Kardon">Harman Kardon (1)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/328-loa-keo-loa-tro-giang" title="Loa Kéo, Loa Trợ Giảng">Loa Kéo, Loa Trợ Giảng (16)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/291-loa-bose" title="Loa Bose">Loa Bose (0)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/257-loa-doss" title="Loa Doss">Loa Doss (3)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/292-loa-jy" title="Loa JY">Loa JY (3)</a></h2>
        <span class="cate_line"></span>
                </big>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/851-loa-logitech-z523" title="Loa Logitech Z523"><img src="public/kingtech/upload/sanpham/LogitechZ623-613.jpg" alt="Loa Logitech Z523"></a></figure>
          <h2><a href="/p/851-loa-logitech-z523" title="Loa Logitech Z523">Loa Logitech Z523</a></h2>
          <span><code>2,030,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/919-loa-edifier-c2xd" title="Loa Edifier C2XD "><img src="public/kingtech/upload/sanpham/Loa_Edifier_C2XD_S-8549.jpg" alt="Loa Edifier C2XD "></a></figure>
          <h2><a href="/p/919-loa-edifier-c2xd" title="Loa Edifier C2XD ">Loa Edifier C2XD</a></h2>
          <span><code>4,219,999 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/854-loa-logitech-z313" title="Loa Logitech Z313"><img src="public/kingtech/upload/sanpham/logitechz313S-(1)-8775.jpg" alt="Loa Logitech Z313"></a></figure>
          <h2><a href="/p/854-loa-logitech-z313" title="Loa Logitech Z313">Loa Logitech Z313</a></h2>
          <span><code>704,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/707-loa-bluetooth-beats-pill-xl-by-drdre" title="Loa Bluetooth Beats Pill XL by Dr.Dre"><img src="public/kingtech/upload/sanpham/Loa-Bluetooth-Beats-Pill-XL-by-Dr-7931.jpg" alt="Loa Bluetooth Beats Pill XL by Dr.Dre"></a></figure>
          <h2><a href="/p/707-loa-bluetooth-beats-pill-xl-by-drdre" title="Loa Bluetooth Beats Pill XL by Dr.Dre">Loa Bluetooth Beats Pill XL by Dr.Dre</a></h2>
          <span><code>750,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/703-loa-bluetooth-speaker-s311" title="Loa Bluetooth Speaker S311"><img src="public/kingtech/upload/sanpham/bluetooth-speaker-S311-7933.jpg" alt="Loa Bluetooth Speaker S311"></a></figure>
          <h2><a href="/p/703-loa-bluetooth-speaker-s311" title="Loa Bluetooth Speaker S311">Loa Bluetooth Speaker S311</a></h2>
          <span><code>700,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/102-but-trinh-chieu" title="Bút Trình Chiếu">Bút Trình Chiếu</a></label>
          <span></span> </aside>
                <big>
                <h2><a href="/c/194-super-pointer" title="Super Pointer">Super Pointer (0)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/196-logitech" title="Logitech">Logitech (0)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/197-presenter" title="Presenter">Presenter (0)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/198-but-laser-xanh" title="Bút Laser xanh">Bút Laser xanh (3)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/229-rii" title="Rii">Rii (0)</a></h2>
        <span class="cate_line"></span>
                <h2><a href="/c/230-but-trinh-chieu-khac" title="Bút trình chiếu khác">Bút trình chiếu khác (3)</a></h2>
        <span class="cate_line"></span>
                </big>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/225-but-trinh-chieu-v-820" title="Bút trình chiếu V 820"><img src="public/kingtech/upload/sanpham/DCD-46v820-a-r-2945.jpg" alt="Bút trình chiếu V 820"></a></figure>
          <h2><a href="/p/225-but-trinh-chieu-v-820" title="Bút trình chiếu V 820">Bút trình chiếu V 820</a></h2>
          <span><code>800,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/223-but-laser-4-in-1" title="Bút laser 4 in 1"><img src="public/kingtech/upload/sanpham/DCD-44but-4-in-1-r-7498.jpg" alt="Bút laser 4 in 1"></a></figure>
          <h2><a href="/p/223-but-laser-4-in-1" title="Bút laser 4 in 1">Bút laser 4 in 1</a></h2>
          <span><code>99,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/219-but-laser-xanh-5000mw" title="Bút laser xanh 5000mw"><img src="public/kingtech/upload/sanpham/but-laser-xanh-5000-mw-2777.jpg" alt="Bút laser xanh 5000mw"></a></figure>
          <h2><a href="/p/219-but-laser-xanh-5000mw" title="Bút laser xanh 5000mw">Bút laser xanh 5000mw</a></h2>
          <span><code>1,500,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/217-but-laser-xanh-5mw" title="Bút laser xanh 5mw"><img src="public/kingtech/upload/sanpham/bn-but-laser-xanh-5-mw-814.jpg" alt="Bút laser xanh 5mw"></a></figure>
          <h2><a href="/p/217-but-laser-xanh-5mw" title="Bút laser xanh 5mw">Bút laser xanh 5mw</a></h2>
          <span><code>249,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/224-but-laser-thuoc-la-doc-dao" title="Bút laser thuốc lá độc đáo"><img src="public/kingtech/upload/sanpham/DCD-555-But-laser-thuoc-la-doc-daoLASER12-243.jpg" alt="Bút laser thuốc lá độc đáo"></a></figure>
          <h2><a href="/p/224-but-laser-thuoc-la-doc-dao" title="Bút laser thuốc lá độc đáo">Bút laser thuốc lá độc đáo</a></h2>
          <span><code>80,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/204-khung-anh-so" title="Khung ảnh số">Khung ảnh số</a></label>
          <span></span> </aside>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/1228-khung-anh-so-7-inch-sony-dpf-ns70" title="KHUNG ẢNH SỐ 7 INCH SONY DPF-NS70"><img src="public/kingtech/images/p/1228-khung-anh-so-7-inch-sony-dpf-ns70.jpg" alt="KHUNG ẢNH SỐ 7 INCH SONY DPF-NS70"></a></figure>
          <h2><a href="/p/1228-khung-anh-so-7-inch-sony-dpf-ns70" title="KHUNG ẢNH SỐ 7 INCH SONY DPF-NS70">KHUNG ẢNH SỐ 7 INCH SONY DPF-NS70</a></h2>
          <span><code>1,800,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/331-gadmei-pf6011-khung-anh-so-gadmei-pf6011" title="GADMEI PF6011. Khung ảnh số GADMEI PF6011"><img src="public/kingtech/upload/sanpham/5-402-copy-7943.jpg" alt="GADMEI PF6011. Khung ảnh số GADMEI PF6011"></a></figure>
          <h2><a href="/p/331-gadmei-pf6011-khung-anh-so-gadmei-pf6011" title="GADMEI PF6011. Khung ảnh số GADMEI PF6011">GADMEI PF6011. Khung ảnh số GADMEI PF6011</a></h2>
          <span><code>980,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1234-khung-anh-so-gk-9-inch-hd" title="KHUNG ẢNH SỐ GK 9 INCH HD"><img src="public/kingtech/images/p/1234-khung-anh-so-gk-9-inch-hd.jpg" alt="KHUNG ẢNH SỐ GK 9 INCH HD"></a></figure>
          <h2><a href="/p/1234-khung-anh-so-gk-9-inch-hd" title="KHUNG ẢNH SỐ GK 9 INCH HD">KHUNG ẢNH SỐ GK 9 INCH HD</a></h2>
          <span><code>1,400,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1232-khung-ảnh-só-15-beauty" title="KHUNG ẢNH SỐ 1.5 BEAUTY"><img src="public/kingtech/images/p/1232-khung-ảnh-só-15-beauty.jpg" alt="KHUNG ẢNH SỐ 1.5 BEAUTY"></a></figure>
          <h2><a href="/p/1232-khung-ảnh-só-15-beauty" title="KHUNG ẢNH SỐ 1.5 BEAUTY">KHUNG ẢNH SỐ 1.5 BEAUTY</a></h2>
          <span><code>350,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/966-khung-anh-so-gk-10-inch" title="Khung ảnh số GK 10 Inch"><img src="public/kingtech/images/p/966-khung-anh-so-gk-10-inch.jpg" alt="Khung ảnh số GK 10 Inch"></a></figure>
          <h2><a href="/p/966-khung-anh-so-gk-10-inch" title="Khung ảnh số GK 10 Inch">Khung ảnh số GK 10 Inch</a></h2>
          <span><code>1,700,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/328-loa-keo-loa-tro-giang" title="Loa Kéo, Loa Trợ Giảng">Loa Kéo, Loa Trợ Giảng</a></label>
          <span></span> </aside>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/1009-loa-tro-giang-dang-keo-temeisheng-q10s" title="Loa trợ giảng dạng kéo Temeisheng Q10S"><img src="public/kingtech/images/p/1009-loa-tro-giang-dang-keo-temeisheng-q10s.jpg" alt="Loa trợ giảng dạng kéo Temeisheng Q10S"></a></figure>
          <h2><a href="/p/1009-loa-tro-giang-dang-keo-temeisheng-q10s" title="Loa trợ giảng dạng kéo Temeisheng Q10S">Loa trợ giảng dạng kéo Temeisheng Q10S</a></h2>
          <span><code>3,120,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1014-loa-tro-giang-dang-keo-temeisheng-297s" title="Loa trợ giảng dạng kéo Temeisheng 297S"><img src="public/kingtech/images/p/1014-loa-tro-giang-dang-keo-temeisheng-297s.jpg" alt="Loa trợ giảng dạng kéo Temeisheng 297S"></a></figure>
          <h2><a href="/p/1014-loa-tro-giang-dang-keo-temeisheng-297s" title="Loa trợ giảng dạng kéo Temeisheng 297S">Loa trợ giảng dạng kéo Temeisheng 297S</a></h2>
          <span><code>2,550,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1019-loa-tro-giang-dang-keo-temeisheng-q6" title="Loa trợ giảng dạng kéo Temeisheng Q6"><img src="public/kingtech/images/p/1019-loa-tro-giang-dang-keo-temeisheng-q6.jpg" alt="Loa trợ giảng dạng kéo Temeisheng Q6"></a></figure>
          <h2><a href="/p/1019-loa-tro-giang-dang-keo-temeisheng-q6" title="Loa trợ giảng dạng kéo Temeisheng Q6">Loa trợ giảng dạng kéo Temeisheng Q6</a></h2>
          <span><code>1,450,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1008-loa-tro-giang-dang-keo-temeisheng-2305l" title="Loa trợ giảng dạng kéo Temeisheng 2305L"><img src="public/kingtech/images/p/1008-loa-tro-giang-dang-keo-temeisheng-2305l.jpg" alt="Loa trợ giảng dạng kéo Temeisheng 2305L"></a></figure>
          <h2><a href="/p/1008-loa-tro-giang-dang-keo-temeisheng-2305l" title="Loa trợ giảng dạng kéo Temeisheng 2305L">Loa trợ giảng dạng kéo Temeisheng 2305L</a></h2>
          <span><code>3,250,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1013-loa-tro-giang-dang-keo-temeisheng-dp-107s" title="Loa trợ giảng dạng kéo Temeisheng DP-107S"><img src="public/kingtech/images/p/1013-loa-tro-giang-dang-keo-temeisheng-dp-107s.jpg" alt="Loa trợ giảng dạng kéo Temeisheng DP-107S"></a></figure>
          <h2><a href="/p/1013-loa-tro-giang-dang-keo-temeisheng-dp-107s" title="Loa trợ giảng dạng kéo Temeisheng DP-107S">Loa trợ giảng dạng kéo Temeisheng DP-107S</a></h2>
          <span><code>2,150,000 đ</code></span> </div>
              </div>
    </div>
        <div class="box_pro">
      <div class="box_title">
        <aside>
          <label><a href="/c/210-ong-nhom" title="Ống nhòm">Ống nhòm</a></label>
          <span></span> </aside>
              </div>
      <div class="box_item">
                <div class="item_pro">
          <figure><a href="/p/963-ong-nhom-bostron-10x50" title="Ống nhòm Bostron 10X50"><img src="public/kingtech/upload/sanpham/-font-b-10X50-b-font-Shockproof-Camouflage-Optics-font-b-Binocular-b-font-Telescope-with-5538.jpg" alt="Ống nhòm Bostron 10X50"></a></figure>
          <h2><a href="/p/963-ong-nhom-bostron-10x50" title="Ống nhòm Bostron 10X50">Ống nhòm Bostron 10X50</a></h2>
          <span><code>3,900,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/350-ong-nhom-nikula-30x40-nikula-30x40-binoculars" title="Ống nhòm Nikula 30x40| Nikula 30x40 Binoculars"><img src="public/kingtech/upload/sanpham/1-980.jpg" alt="Ống nhòm Nikula 30x40| Nikula 30x40 Binoculars"></a></figure>
          <h2><a href="/p/350-ong-nhom-nikula-30x40-nikula-30x40-binoculars" title="Ống nhòm Nikula 30x40| Nikula 30x40 Binoculars">Ống nhòm Nikula 30x40| Nikula 30x40 Binoculars</a></h2>
          <span><code>590,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/346-ong-nhom-zoom-bushnell-10x70x70-sieu-net" title="Ống nhòm Zoom Bushnell 10x70x70 siêu nét"><img src="public/kingtech/upload/sanpham/ch_tel_026_2_l-7531.jpg" alt="Ống nhòm Zoom Bushnell 10x70x70 siêu nét"></a></figure>
          <h2><a href="/p/346-ong-nhom-zoom-bushnell-10x70x70-sieu-net" title="Ống nhòm Zoom Bushnell 10x70x70 siêu nét">Ống nhòm Zoom Bushnell 10x70x70 siêu nét</a></h2>
          <span><code>1,100,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1049-ong-nhom-arboro-12-x-25" title="Ống Nhòm Arboro 12 x 25"><img src="public/kingtech/images/p/1049-ong-nhom-arboro-12-x-25.jpg" alt="Ống Nhòm Arboro 12 x 25"></a></figure>
          <h2><a href="/p/1049-ong-nhom-arboro-12-x-25" title="Ống Nhòm Arboro 12 x 25">Ống Nhòm Arboro 12 x 25</a></h2>
          <span><code>650,000 đ</code></span> </div>
                <div class="item_pro">
          <figure><a href="/p/1211-ong-nhom-do-khoang-cach-do-toc-do-gio-lr-600s" title="ỐNG NHÒM ĐO KHOẢNG CÁCH, ĐO TỐC ĐỘ GIÓ LR-600S"><img src="public/kingtech/images/p/1211-ong-nhom-do-khoang-cach-do-toc-do-gio-lr-600s.jpg" alt="ỐNG NHÒM ĐO KHOẢNG CÁCH, ĐO TỐC ĐỘ GIÓ LR-600S"></a></figure>
          <h2><a href="/p/1211-ong-nhom-do-khoang-cach-do-toc-do-gio-lr-600s" title="ỐNG NHÒM ĐO KHOẢNG CÁCH, ĐO TỐC ĐỘ GIÓ LR-600S">ỐNG NHÒM ĐO KHOẢNG CÁCH, ĐO TỐC ĐỘ ...</a></h2>
          <span><code>4,500,000 đ</code></span> </div>
              </div>
    </div>
      </div>
      @include("fontend.home.centerSupport")
</div>
<script src="public/kingtech/js/jquery.newsTicker.js"></script> 
<script>

                var nt_title = $('#nt-title').newsTicker({

                row_height: 30,

                max_rows: 1,

                duration: 3000,

                pauseOnHover: 0

            });

        </script>
      </div>
@endsection