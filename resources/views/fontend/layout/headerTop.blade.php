 <header>
    <div id="header_top">
      <section>
        <div class="header_top">
          <div class="hotline">
            <figure><img src="public/kingtech/images/hotline.png" alt="Digital hotline"></figure>
            @foreach($website as $phone)
              @if($phone->name=="hotline")
                <span>{{$phone->content}}</span> </div>
              @endif
            @endforeach
          <div class="header_slogan up">
            @foreach($website as $slide)
              @if($slide->name=="slide_top")
                <p>{{$slide->content}}</p>
              @endif
            @endforeach
          </div>
          <div class="header_share">
          
              <div class="header_social">
              <figure>
              @foreach($website as $fb)
                @if($fb->name=="facebook")
                   <a href="{{$fb->content}}" target="_blank"><img src="public/kingtech/images/icon_face.png" alt="Facebook"></a>
                @endif
                @if($fb->name=="twitter") 
                  <a href="{{$fb->content}}" target="_blank">
                  <img src="public/kingtech/images/icon_twitter.png" alt="Gucci"></a>
                @endif 
              
                @if($fb->name=="google") 
                  <a href="{{$fb->content}}" target="_blank">
                  <img src="public/kingtech/images/icon_google.png" alt="Google Plus"></a>
                @endif
              @endforeach
                 </figure>
              </div>            
          </div>
        </div>
      </section>
    </div>
  </header>