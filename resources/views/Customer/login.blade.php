 @include('Page.header')

    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/user/1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Đăng Nhập</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="mag-login-area py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="login-content bg-white p-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Xin mời đăng nhập</h5>
                        </div>

                        <form action="index.html" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email hoặc số điện thoại">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <p>Đăng ký tại đây <a href="" title="">Link</a></p>
                            </div>
                            <button type="submit" class="btn mag-btn mt-30">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('Page.footer')
@include('Page.script')