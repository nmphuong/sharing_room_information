@extends('layouts.masterpage')

@section('content')
<div class="container-fluid px-md-3  pt-2 pt-md-3">
    <form class="d-flex justify-content-center">
        <div class="form-group m-3">
            <select class="form-control" data-live-search="true" id="location_opt">
                <option value="-1">Toàn quốc</option>
                <option value="0">TP Ho Chi Minh</option>
                <option value="1">Ha Noi</option>
                <option value="2">Da Nang</option>
                <option value="3">Vung Tau</option>
                <option value="4">Can Tho</option>
            </select>
        </div>
        <div class="form-group m-3">
            <select class="form-control" id="location_opt">
                <option value="-1" selected>Chọn khoảng giá</option>
            </select>
        </div>
        <div class="form-group m-3">
            <select class="form-control" id="location_opt">
                <option value="-1" selected>Diện tích tổng</option>
            </select>
        </div>
        <div class="form-group m-3">
            <select class="form-control" id="location_opt">
                <option value="-1" selected>Lọc nâng cao</option>
            </select>
        </div>
    </form>
</div>
<!-- END nav -->

<section class="hero-wrap" style="background-image: url('images/house.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center">
            <div class="col-md-8 ftco-animate d-flex align-items-end">
                <div class="text w-100">
                    <h1 class="mb-4 text-warning">Nâng cấp tài khoản</h1>
                    <h3 class="mb-4 text-warning">Nâng cấp tài khoản thành vip, chỉ một lần sử dụng các chức năng
                        vip vĩnh viễn.</h3>
                    <p>
                        <a href="#" class="btn btn-warning py-3 px-4">Đăng ký ngay</a>
                        <!-- <a href="#" class="btn btn-white py-3 px-4">Explore Now</a> -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img bg-light" id="section-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text align-items-center">
                        <strong class="number" data-number="13256">0</strong>
                        <span>Phòng trọ</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text align-items-center">
                        <strong class="number" data-number="2456">0</strong>
                        <span>Căn hộ</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text align-items-center">
                        <strong class="number" data-number="159">0</strong>
                        <span>Nhà nguyên căn</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text align-items-center">
                        <strong class="number" data-number="4235">0</strong>
                        <span>Ở ghép</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-no-pt">
    <div class="container-fluid px-md-4">
        <div class="row pb-2 mb-0">
            <div class="col-md-7 heading-section text-left ftco-animate">
                <h3 class="text-danger f-arial">Tin Ưu Tiên</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div></a>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h2><a href="#">Nha tro cho thue quan 12</a></h2>
                            <span class="position">Minh Phuong</span><span>|</span>
                            <span class="position">Tin Uu tien</span><span>|</span>
                            <span class="position">TP HCM</span>
                            <a href="#" class="btn btn-primary">View</a>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h2><a href="#">Nha tro cho thue quan 12</a></h2>
                            <span class="position">Minh Phuong</span><span>|</span>
                            <span class="position">Tin Uu tien</span><span>|</span>
                            <span class="position">TP HCM</span>
                            <a href="#" class="btn btn-primary">View</a>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-no-pt">
    <div class="container-fluid px-md-4">
        <div class="row pb-2 mb-0">
            <div class="col-md-7 heading-section text-left ftco-animate">
                <h3 class="text-danger"><u>Tin Mới Nhất</u></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div></a>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h2><a href="#">Nha tro cho thue quan 12</a></h2>
                            <span class="position">Minh Phuong</span><span>|</span>
                            <span class="position">Tin Uu tien</span><span>|</span>
                            <span class="position">TP HCM</span>
                            <a href="#" class="btn btn-primary">View</a>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h2><a href="#">Nha tro cho thue quan 12</a></h2>
                            <span class="position">Minh Phuong</span><span>|</span>
                            <span class="position">Tin Uu tien</span><span>|</span>
                            <span class="position">TP HCM</span>
                            <a href="#" class="btn btn-primary">View</a>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-no-pt">
    <div class="container-fluid px-md-4">
        <div class="row pb-2 mb-0">
            <div class="col-md-7 heading-section text-left ftco-animate">
                <h3 class="text-danger"><u>Tin Yêu Thích</u></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div></a>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h2><a href="#">Nha tro cho thue quan 12</a></h2>
                            <span class="position">Minh Phuong</span><span>|</span>
                            <span class="position">Tin Uu tien</span><span>|</span>
                            <span class="position">TP HCM</span>
                            <a href="#" class="btn btn-primary">View</a>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h2><a href="#">Nha tro cho thue quan 12</a></h2>
                            <span class="position">Minh Phuong</span><span>|</span>
                            <span class="position">Tin Uu tien</span><span>|</span>
                            <span class="position">TP HCM</span>
                            <a href="#" class="btn btn-primary">View</a>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid px-md-5">
<div class="row mt-5">
    <div class="col text-center">
        <div class="block-27">
            <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
            </ul>
        </div>
    </div>
</div>
</div>

<section class="ftco-section testimony-section ftco-no-pb">
    <div class="img img-bg border" style="background-image: url(images/bg_4.jpg);"></div>
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <!-- <span class="subheading">Testimonial</span> -->
                <h2 class="mb-3">Ý KIẾN NGƯỜI DÙNG</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Website rat huu ich, giup chung toi co the tim kiem nha tro nhanh
                                    chong, khi chung toi muon di chuyen den noi o moi.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/user_ninh.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Ninh Vo 1</p>
                                        <span class="position">User</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Website rat huu ich, giup chung toi co the tim kiem nha tro nhanh
                                    chong, khi chung toi muon di chuyen den noi o moi.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/user_ninh.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Ninh Vo 2</p>
                                        <span class="position">User</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Website rat huu ich, giup chung toi co the tim kiem nha tro nhanh
                                    chong, khi chung toi muon di chuyen den noi o moi.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/user_ninh.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Ninh Vo 3</p>
                                        <span class="position">User</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Website rat huu ich, giup chung toi co the tim kiem nha tro nhanh
                                    chong, khi chung toi muon di chuyen den noi o moi.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/user_ninh.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Ninh Vo 4</p>
                                        <span class="position">User</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Website rat huu ich, giup chung toi co the tim kiem nha tro nhanh
                                    chong, khi chung toi muon di chuyen den noi o moi.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/user_ninh.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Ninh Vo 5</p>
                                        <span class="position">User</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop