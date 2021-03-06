<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Product Detail';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-detail">
    <!--Section: Block Content-->
    <section class="mb-5">
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <div id="mdb-lightbox-ui"></div>
                <div class="mdb-lightbox">
                    <div class="row product-gallery mx-1">
                        <div class="col-12 mb-0">
                            <figure class="view overlay rounded z-depth-1 main-img">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                                   data-size="710x823">
                                    <img src="https://network-data-cabling.co.uk/wp-content/uploads/2019/11/CCTV-system-office.jpg"
                                         class="img-fluid z-depth-1"/>
                                </a>
                            </figure>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <div class="view overlay rounded z-depth-1 gallery-item">
                                        <img src="https://network-data-cabling.co.uk/wp-content/uploads/2019/11/CCTV-system-office.jpg"
                                             class="img-fluid"/>
                                        <div class="mask rgba-white-slight"></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="view overlay rounded z-depth-1 gallery-item">
                                        <img src="https://network-data-cabling.co.uk/wp-content/uploads/2019/11/CCTV-system-office.jpg"
                                             class="img-fluid"/>
                                        <div class="mask rgba-white-slight"></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="view overlay rounded z-depth-1 gallery-item">
                                        <img src="https://network-data-cabling.co.uk/wp-content/uploads/2019/11/CCTV-system-office.jpg"
                                             class="img-fluid"/>
                                        <div class="mask rgba-white-slight"></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="view overlay rounded z-depth-1 gallery-item">
                                        <img src="https://network-data-cabling.co.uk/wp-content/uploads/2019/11/CCTV-system-office.jpg"
                                             class="img-fluid"/>
                                        <div class="mask rgba-white-slight"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h5>Camera Wifi Ánh Sáng Xanh</h5>
                <p class="mb-2 text-muted text-uppercase small">Camera Wifi</p>
                <ul class="p-0">
                    <li class="d-inline">
                        <i class="fas fa-star fa-sm text-danger"></i>
                    </li>
                    <li class="d-inline">
                        <i class="fas fa-star fa-sm text-danger"></i>
                    </li>
                    <li class="d-inline">
                        <i class="fas fa-star fa-sm text-danger"></i>
                    </li>
                    <li class="d-inline">
                        <i class="fas fa-star fa-sm text-danger"></i>
                    </li>
                    <li class="d-inline">
                        <i class="far fa-star fa-sm text-danger"></i>
                    </li>
                </ul>
                <p>
                    <span class="mr-1 text-danger"><strong>2.000.000 đ</strong></span>
                </p>
                <p class="pt-1">
                    Camera wifi thế hệ mới với ánh sáng xanh kết hợp tia laze soi được cả trong đêm tối , dễ dàng quan
                    sát một cách chi tiết và rõ nét nhất có thể
                </p>
                <div class="table-responsive">
                    <table class="table table-sm table-borderless mb-0">
                        <tbody>
                        <tr>
                            <th class="pl-0 w-25" scope="row"><strong>Mẫu</strong></th>
                            <td>CCTV-WIFI-01</td>
                        </tr>
                        <tr>
                            <th class="pl-0 w-25" scope="row"><strong>Màu</strong></th>
                            <td>Trắng Xanh</td>
                        </tr>
                        <tr>
                            <th class="pl-0 w-25" scope="row"><strong>Xuất xứ</strong></th>
                            <td>Việt Nam</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <hr/>
                <div class="table-responsive mb-2">
                    <table class="table table-sm table-borderless">
                        <tbody>
                        <tr>
                            <td class="pl-0 pb-0 w-25">Số lượng</td>
                            <td class="pb-0">Chọn kiểu</td>
                        </tr>
                        <tr>
                            <td class="pl-0">
                                <div class="mb-0 d-flex">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                            class="btn">-
                                    </button>
                                    <input class="quantity form-control" min="0" name="quantity" value="1"
                                           type="number"/>
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            class="btn">+
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="mt-1">
                                    <div class="form-check form-check-inline pl-0">
                                        <input type="radio" class="form-check-input" id="small"
                                               name="materialExampleRadios" checked/>
                                        <label class="form-check-label small text-uppercase card-link-secondary"
                                               for="small">Kiểu 1</label>
                                    </div>
                                    <div class="form-check form-check-inline pl-0">
                                        <input type="radio" class="form-check-input" id="medium"
                                               name="materialExampleRadios"/>
                                        <label class="form-check-label small text-uppercase card-link-secondary"
                                               for="medium">Kiểu 2</label>
                                    </div>
                                    <div class="form-check form-check-inline pl-0">
                                        <input type="radio" class="form-check-input" id="large"
                                               name="materialExampleRadios"/>
                                        <label class="form-check-label small text-uppercase card-link-secondary"
                                               for="large">Kiểu 3</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <button type="button" class="btn btn-danger btn-md mr-1 mb-2">Mua ngay</button>
                <button type="button" class="btn btn-light btn-md mr-1 mb-2">
                    <i class="fas fa-shopping-cart pr-2"></i>
                    Thêm vào giỏ hàng
                </button>
            </div>
        </div>
    </section>
    <!--Section: Block Content-->
    <!-- Classic tabs -->
    <div class="classic-tabs border rounded px-4 pt-1">
        <ul class="nav tabs-danger nav-justified" id="advancedTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link text-danger active show" id="description-tab" data-toggle="tab" href="#description"
                   role="tab"
                   aria-controls="description" aria-selected="true">Giới thiệu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" id="info-tab" data-toggle="tab" href="#info" role="tab"
                   aria-controls="info"
                   aria-selected="false">Thông tin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab"
                   aria-controls="reviews" aria-selected="false">Đánh Giá (1)</a>
            </li>
        </ul>
        <div class="tab-content" id="advancedTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <h5>Thông tin sản phẩm</h5>
                <p>
                    Lắp đặt camera an ninh là cách tốt nhất để chúng ta bảo vệ an toàn cho những khu vực sinh sống và
                    làm việc. Bởi vì hệ thống camera an ninh được tích hợp nhiều công nghệ hiện đại và chức năng thông
                    minh hỗ trợ cho mọi nhu cầu của người dùng.
                    Các loại camera wifi có thể giúp bạn ghi hình độ nét cao, quan sát ban đêm, cảnh báo trộm, chống
                    nước…v.v. Trong khi đó, hệ thống camera có dây thì hỗ trợ đường truyền kết nối ổn định, mạnh mẽ, tín
                    hiệu nhanh… Với nhiều giải pháp chuyên nghiệp dành cho mọi khu vực gia đình, văn phòng, công ty, cửa
                    hàng, showroom…
                </p>
            </div>
            <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                <h5>Thông tin thêm</h5>
                <table class="table table-striped table-bordered mt-3">
                    <thead>
                    <tr>
                        <th scope="row" class="w-150 dark-grey-text h6">Khối lượng</th>
                        <td><em>0.8 kg</em></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" class="w-150 dark-grey-text h6">Kích thước</th>
                        <td><em>30 × 40 cm</em></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <h5><span>1</span> review for <span>Camera Wifi Ánh Sáng Xanh</span></h5>
                <div class="media mt-3 mb-4">
                    <img class="d-flex mr-3 z-depth-1" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg"
                         width="62" alt="Generic placeholder image"/>
                    <div class="media-body">
                        <div class="d-sm-flex justify-content-between">
                            <p class="mt-1 mb-2">
                                <strong>Phạm Quang Linh </strong>
                                <span>– </span><span>28/01/2021</span>
                            </p>
                            <ul class="p-0">
                                <li class="d-inline">
                                    <i class="fas fa-star fa-sm text-danger"></i>
                                </li>
                                <li class="d-inline">
                                    <i class="fas fa-star fa-sm text-danger"></i>
                                </li>
                                <li class="d-inline">
                                    <i class="fas fa-star fa-sm text-danger"></i>
                                </li>
                                <li class="d-inline">
                                    <i class="fas fa-star fa-sm text-danger"></i>
                                </li>
                                <li class="d-inline">
                                    <i class="far fa-star fa-sm text-danger"></i>
                                </li>
                            </ul>
                        </div>
                        <p class="mb-0">Sản phẩm tốt </p>
                    </div>
                </div>
                <hr/>
                <h5 class="mt-4">Thêm đánh giá</h5>
                <div class="my-3">
                    <ul class="p-0">
                        <li class="d-inline">
                            <a href="#">
                                <i class="fas fa-star fa-sm text-danger"></i>
                            </a>
                        </li>
                        <li class="d-inline">
                            <a href="#">
                                <i class="fas fa-star fa-sm text-danger"></i>
                            </a>
                        </li>
                        <li class="d-inline">
                            <a href="#">
                                <i class="fas fa-star fa-sm text-danger"></i>
                            </a>
                        </li>
                        <li class="d-inline">
                            <a href="#">
                                <i class="fas fa-star fa-sm text-danger"></i>
                            </a>
                        </li>
                        <li class="d-inline">
                            <a href="#">
                                <i class="far fa-star fa-sm text-danger"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <!-- Your review -->
                    <div class="mb-2">
                        <textarea id="form76" class="md-textarea form-control pr-6" rows="4"
                                  placeholder="Đánh giá của bạn"></textarea>
                    </div>
                    <!-- Name -->
                    <div class="mb-2">
                        <input type="text" id="form75" class="form-control pr-6" placeholder="Tên của bạn"/>

                    </div>
                    <!-- Email -->
                    <div class="mb-2">
                        <input type="email" id="form77" class="form-control pr-6" placeholder="Email của bạn"/>
                    </div>
                    <div class="text-right pb-2">
                        <button type="button" class="btn btn-danger">Đánh giá</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Classic tabs -->
    <!--Section: Block Content-->
    <section class="text-center">
        <h3 class="p-5"> Sản phẩm khác </h3>
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-6 col-lg-3 mb-5">
                <!-- Card -->
                <div class="">
                    <div class="view zoom overlay z-depth-2 rounded">
                        <img class="img-fluid w-100"
                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                             alt="Sample"/>
                    </div>

                    <div class="pt-4">
                        <h5>Fantasy T-shirt</h5>
                        <h6>12.99 $</h6>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-6 col-lg-3 mb-5">
                <!-- Card -->
                <div class="">
                    <div class="view zoom overlay z-depth-2 rounded">
                        <img class="img-fluid w-100"
                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                             alt="Sample"/>
                    </div>
                    <div class="pt-4">
                        <h5>Fantasy T-shirt</h5>
                        <h6>12.99 $</h6>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-6 col-lg-3 mb-5">
                <!-- Card -->
                <div class="">
                    <div class="view zoom overlay z-depth-2 rounded">
                        <img class="img-fluid w-100"
                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                             alt="Sample"/>
                    </div>

                    <div class="pt-4">
                        <h5>Fantasy T-shirt <span class="badge badge-danger badge-pill badge-news">Sale</span></h5>
                        <h6>
                            <span class="text-danger mr-1">$12.99</span>
                            <span class="text-grey"><s>$36.99</s></span>
                        </h6>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 col-lg-3 mb-5">
                <!-- Card -->
                <div class="">
                    <div class="view zoom overlay z-depth-2 rounded">
                        <img class="img-fluid w-100"
                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                             alt="Sample"/>
                    </div>
                    <div class="pt-4">
                        <h5>Fantasy T-shirt <span class="badge badge-danger badge-pill badge-news">Sale</span></h5>
                        <h6>
                            <span class="text-danger mr-1">$12.99</span>
                            <span class="text-grey"><s>$36.99</s></span>
                        </h6>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </section>
    <!--Section: Block Content-->
</div>
