@extends('fontend.signin')
@section("box_center")
<div class="box_sales">
            <div class="box_title">
              <aside>
                <label>Thông tin tài khoản</label>
                <span></span> </aside>
            </div>
            <div class="box_login">
                <aside>
                    <label>Đăng nhập</label>
                    <big>
                        <form action="" method="post">
                            <input type="text" name="txtName" placeholder="Tên đăng nhập" class="cls_text" required="">
                            <input type="password" name="txtPass" placeholder="Mật khẩu" class="cls_text" required="">
                            <input type="submit" name="btnSubmit" style="margin-left: 150px" value="Đăng nhập" class="line_submit">
                        </form>
                    </big>
                </aside>
                <aside style="margin-left: 10px">
                    <label>Đăng ký</label>
                    <big style="padding-top: 20px;padding-left: 10px;padding-right: 10px;width: calc(100% - 20px);">
                       <p>- Chào mừng bạn đến với Dangcapdigital.com !</p>
                       <p>- Đăng ký với admin để được thấy giá sỉ</p>
                       <p>- Vui lòng liên hệ email <strong>minhnhat@dangcapdigital.com</strong> hoặc số điện thoại <strong>0907.9988.38</strong> để được cấp tài khoản truy cập</p>
                    </big>
                </aside>
            </div>
          </div> 
@endsection