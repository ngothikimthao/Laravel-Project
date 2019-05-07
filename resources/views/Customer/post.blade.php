@include('Page.header')
<body>
    <!-- Preloader -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/user/2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Đăng bài</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Video Submit Area Start ##### -->
    <div class="video-submit-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Video Submit Content -->
                    <div class="video-submit-content mb-50 p-30 bg-white box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Đăng bài của bạn</h5>
                        </div>

                        <div class="video-info mt-30">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="upload-file">Tệp của bạn</label>
                                    <input type="file" class="form-control-file" id="upload-file">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Tên bài viết</label>
                                    <input type="text" class="form-control" name="video-name">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Nội dung</label>
                                    <textarea name="" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Thể loại</label>
                                    <select name="video-catagory" class="form-control">
                                        <option value="">Học sinh</option>
                                        <option value="">Gia dụng</option>
                                        <option value="">Áo quần</option>
                                        <option value="">Thể thao</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Tình trạng</label>
                                    <select name="video-language" class="form-control">
                                        <option value="en">Mới</option>
                                        <option value="spa">Cũ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="upload-file"> Loại đồ bạn muốn</label>
                                    <br>
                                    <input type="checkbox" name="doi" value="Do"> Học sinh <br>
                                    <input type="checkbox" name="doi" value="Do"> Gia dụng<br>
                                    <input type="checkbox" name="doi" value="Do"> Áo quần<br>
                                    <input type="checkbox" name="doi" value="Do"> Thể thao<br>
                                </div>
                                <button type="submit" class="btn mag-btn mt-30"><i class="fa fa-cloud-upload"></i> Đăng bài</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@include('Page.footer')
@include('Page.script')