<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Favicon -->
    <title>Tôi Bạn &amp; Đồ Cũ</title>
    <!-- Stylesheet -->
    <link href="{{asset('//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
    <link href="{{asset('css/style_q.css') }}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/classy-nav.css') }}" rel="stylesheet">
    <link href="{{asset('css/icon.css') }}" rel="stylesheet">
     <link href="{{asset('css/deliver.css') }}" rel="stylesheet">
</head>

<body>
<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Navbar Area -->
  <div class="mag-main-menu" id="sticker">
    <div class="classy-nav-container breakpoint-off">
        <!-- Menu -->
      <nav class="classy-navbar justify-content-between" id="magNav">

          <!-- Nav brand -->
        <a href="{{route('getTrangchu')}}" class="nav-brand"><img src="img/user/logo.png" alt=""></a>

          <!-- Navbar Toggler -->
        <div class="classy-navbar-toggler">
          <span class="navbarToggler"><span></span><span></span><span></span></span>
        </div>

          <!-- Nav Content -->
        <div class="nav-content d-flex align-items-center">
          <div class="classy-menu">

              <!-- Close Button -->
            <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>
              <!-- Nav Start -->
            <div class="classynav">
                <ul>
                    <li class="active"><a href="{{route('getTrangchu')}}">Trang Chủ</a></li>
                    <li><a href="#">Đổi Đồ</a>
                        {{-- <ul class="dropdown">
                            @foreach($loai_sp as $loai)
                              <li><a href="{{ route('danhmuc',$loai->id)}}" title="">{{$loai->name}}</a></li>
                            @endforeach
                        </ul> --}}
                    </li>
                    <li><a href="#">Câu Lạc bộ</a>
                        {{-- <div class="megamenu">
                            <ul class="single-mega cn-col-4">
                                <li><a href="index.html">Trang Chủ</a></li>
                                <li><a href="archive.html">Đổi Đồ</a></li>
                                <li><a href="video-post.html">Chúng Tôi</a></li>
                                <li><a href="single-post.html">Đăng Xuất</a></li>
                            </ul> --}}
                            
                    </li>
                </ul>
            </div>
              <!-- Nav End -->
          </div>

          <div class="top-meta-data d-flex align-items-center">
              <!-- Top Search Area -->
            <div class="top-search-area">
                <form action="index.html" method="post">
                    <input type="search" name="top-search" id="topSearch" placeholder="Gõ tìm kiếm...">
                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
              <!-- Login -->
            <a href="{{route('getLogin')}}" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
            <!-- Submit Video -->
            <a href="{{route('getPost')}}" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Đăng Bài</span></a>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>