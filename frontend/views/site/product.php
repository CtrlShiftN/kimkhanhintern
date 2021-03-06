<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Product';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-product">
    <div class="row">

        <div class="col-lg-3">
            <h1 class="my-4">Danh mục</h1>
            <div class="list-group">
                <a href="#" class="list-group-item">Thang máy</a>
                <a href="#" class="list-group-item">Camera</a>
                <a href="#" class="list-group-item">Category 3</a>
            </div>

        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid w-100" src="https://camerahanoi360.com/wp-content/uploads/2020/06/banner-camera-2.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid w-100" src="https://camerahanoi360.com/wp-content/uploads/2020/06/banner-camera-2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid w-100" src="https://camerahanoi360.com/wp-content/uploads/2020/06/banner-camera-2.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="https://media.nguoitieudung.vn/files/yen.luc/2018/11/13/gia-lap-dat-camera-an-ninh-03-1455.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a class="text-danger" href="#">Camera an ninh</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Sản phẩm mẫu với chất lượng cực tốt</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="https://media.nguoitieudung.vn/files/yen.luc/2018/11/13/gia-lap-dat-camera-an-ninh-03-1455.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a class="text-danger" href="#">Camera an ninh</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Sản phẩm mẫu với chất lượng cực tốt Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="https://media.nguoitieudung.vn/files/yen.luc/2018/11/13/gia-lap-dat-camera-an-ninh-03-1455.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a class="text-danger" href="#">Camera an ninh</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Sản phẩm mẫu với chất lượng cực tốt</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="https://media.nguoitieudung.vn/files/yen.luc/2018/11/13/gia-lap-dat-camera-an-ninh-03-1455.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a class="text-danger" href="#">Camera an ninh</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Sản phẩm mẫu với chất lượng cực tốt</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="https://media.nguoitieudung.vn/files/yen.luc/2018/11/13/gia-lap-dat-camera-an-ninh-03-1455.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a class="text-danger" href="#">Camera an ninh</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Sản phẩm mẫu với chất lượng cực tốt Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="https://media.nguoitieudung.vn/files/yen.luc/2018/11/13/gia-lap-dat-camera-an-ninh-03-1455.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a class="text-danger" href="#">Camera an ninh</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Sản phẩm mẫu với chất lượng cực tốt</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>