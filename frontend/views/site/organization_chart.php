<?php
$cdnUrl = Yii::$app->params['frontend'];
?>
<head>
    <style>
        body {
            font-weight: 500;
        }

        .img-fluid {
            transition: 0.2s!important;

            width: 5rem;
            height: 5rem;
        }
        header {
            background-image: url("<?=$cdnUrl?>/img/chart-header.png");
            background-size: cover;
        }

        .card-content {
            box-shadow: 1px 2px 10px black !important;
            overflow: hidden;
            transition: 0.2s!important;
        }

        .card-content h6 {
            text-align: left !important;
        }

        p{
            height: 100% !important;
        }
        main .fab:hover {
            transition: 0.5s;
            color: black !important;
            background-color: white !important;
            transform: scale(1.1) !important;
        }

        @media (max-width:1180px){
            .card-content
            {
               height: 161px!important;
                transition: 0.2s!important;

            }
        }
        @media (max-width:990px){
            .card-content{
                height: 255px!important;
                transition: 0.2s!important;
            }
            .card-content h6, .card-content .social-group{
                text-align: center!important;
            }
        }
        .social-group {
            text-align: left !important;
        }
        @media (max-width:574px){
            .card-content h6{
                font-size: 13px!important;
                transition: 0.2s!important;
            }
            .px-5{
                padding-left: 0.7rem!important;
                padding-right: 0.7rem!important;
                transition: 0.2s!important;

            }
            .card-content{
                height: 245px!important;
                transition: 0.2s!important;
            }
        }
        @media (max-width:370px){
            .card-content{
                height: 255px!important;
                transition: 0.2s!important;

            }
            .img-fluid {
                width: 3rem;
                height: 3rem;
                transition: 0.2s!important;

            }
        }
    </style>

</head>

<div class="container-fluid p-0">

    <header>
        <div class="container-fluid">
            <div class="row p-0">
                <div class="col-0  col-ms-0 col-md-6 col-lg-6"></div>
                <div class="col-12 col-ms-12 col-md-6 col-lg-6">
                    <div class="header-content p-5">
                        <h1 class="text-white">Kim Khánh Hân Hạnh Chào Mừng Quý Khách</h1>
                        <br>
                        <br>
                        <p class="text-warning">Liên Hệ Với Chúng Tôi !</p>
                        <div class="social-group">

                            <a class="p-1" href="#"><span
                                        class="fab fa-facebook fa-2x p-2 bg-primary text-light rounded-circle"></span></a>
                            <a class="p-1" href="#"><span
                                        class="fab fa-twitter fa-2x p-2 bg-info text-light rounded-circle"></span></a>
                            <a class="p-1" href="#"><span
                                        class="fab fa-instagram fa-2x p-2 bg-danger text-light rounded-circle"></span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>

        <div class="container-fluid p-0">

            <div class="row py-5">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="text-center text-dark font-weight-bold">SƠ ĐỒ TỔ CHỨC</h1>
                </div>

            </div>
            <br>

            <div class="row">

                <div class="col-sm-4 col-md-4 col-lg-4"></div>
                <div class="col-sm-4 col-md-4 col-lg-4 px-5">
                    <p class="py-2 bg-danger text-center text-white m-0">BAN GIÁM ĐỐC</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4"></div>

            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-right border-bottom border-danger py-3"></div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left border-danger border-bottom py-3"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 "></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left  border-danger py-3"></div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-right border-danger py-3"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 "></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-center  px-5">
                    <div class="card-content px-2 bg-dark shadow-lg">

                        <div class="row py-3">
                            <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right rounded-0 text-center card-img">
                                <img src="<?= $cdnUrl ?>/img/background.jpg" alt=""
                                     class="img-fluid rounded-circle mt-3">
                            </div>

                            <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                <h6 class="text-white text-left">Name:<span
                                            class="text-warning font-weight-lighter"> Thái Nguyễn Nhật Hạ</span></h6>
                                <h6 class="text-white text-left">Chức Vụ:<span
                                            class=" text-warning font-weight-lighter"> Giám Đốc</span>
                                </h6>
                                <div class="social-group pt-3 text-center">
                                    <a href="#"><span
                                                class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                    <a href="#"><span
                                                class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                    <a href="#"><span
                                                class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-center  px-5">
                    <div class="card-content  bg-dark shadow-lg px-2"">

                        <div class="row  py-3">
                            <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right rounded-0 text-center card-img">
                                <img src="<?= $cdnUrl ?>/img/background.jpg" alt=""
                                     class="img-fluid rounded-circle mt-3">
                            </div>

                            <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                <h6 class="text-white  text-center">Name:<span
                                            class="text-warning font-weight-lighter">Nguyễn Hoàng Quỳnh Châu</span></h6>
                                <h6 class="text-white text-center">Chức Vụ:<span
                                            class=" text-warning font-weight-lighter"> Giám Đốc</span>
                                </h6>
                                <div class="social-group pt-3 text-center">
                                    <a href="#"><span
                                                class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                    <a href="#"><span
                                                class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                    <a href="#"><span
                                                class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left border-bottom border-danger py-3"></div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-right border-danger border-bottom py-3"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 "></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-right  border-danger py-3"></div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left border-danger py-3"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 "></div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-4 col-md-4 col-lg-4"></div>
                <div class="col-sm-4 col-md-4 col-lg-4 px-5">
                    <p class="py-2 bg-danger text-center text-white m-0">TỔNG PHỤ TRÁCH</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4"></div>

            </div>

            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-right  border-danger py-3"></div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left border-danger py-3"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 "></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left py-3 border-top border-danger"></div>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-top border-danger border-right py-3 border-danger"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left py-3 border-top border-danger"></div>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-right py-3 border-top border-danger"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6"></div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 px-5">
                    <p class="py-2 bg-danger text-center text-white m-0">PHÒNG KỸ THUẬT</p>
                </div>
                <div class=" col-4 col-sm-4 col-md-4 col-lg-4 px-5">
                    <p class="py-2 bg-danger text-center text-white m-0">PHÒNG TEACH</p>
                </div>
                <div class=" col-4 col-sm-4 col-md-4 col-lg-4 px-5">
                    <p class="py-2 bg-danger text-center text-white m-0">PHÒNG HỖ TRỢ KHÁCH HÀNG</p>
                </div>
            </div>


            <div class="row">
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left py-3 border-danger"></div>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-danger border-right py-3 border-danger"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left py-3 border-danger"></div>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-right py-3 border-danger"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6"></div>

                    </div>
                </div>
            </div>

            <div class="row card-profile-staff">

                <div class="col-4 col-sm-4 col-md-4 col-lg-4 px-2">
                    <div class="card-content bg-dark p-2">

                        <div class=" row">
                            <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right rounded-0 text-center card-img">
                                <img src="<?= $cdnUrl ?>/img/background.jpg" alt=""
                                     class="img-fluid rounded-circle mt-3">
                            </div>

                            <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                <h6 class="text-white  text-center">Name:<span
                                            class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                <h6 class="text-white text-center">Chức Vụ:<span
                                            class=" text-warning font-weight-lighter">Trưởng Ban Develop</span>
                                </h6>
                                <div class="social-group pt-3 text-center">
                                    <a href="#"><span
                                                class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                    <a href="#"><span
                                                class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                    <a href="#"><span
                                                class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4 px-2">
                    <div class="card-content bg-dark  p-2 ">

                        <div class="row">
                            <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right rounded-0 text-center card-img">
                                <img src="<?= $cdnUrl ?>/img/background.jpg" alt=""
                                     class="img-fluid rounded-circle mt-3">
                            </div>

                            <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                <h6 class="text-white  text-center">Name:<span
                                            class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                <h6 class="text-white text-center">Chức Vụ:<span
                                            class=" text-warning font-weight-lighter">Trưởng Ban Phòng Teach</span>
                                </h6>
                                <div class="social-group pt-3 text-center">
                                    <a href="#"><span
                                                class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                    <a href="#"><span
                                                class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                    <a href="#"><span
                                                class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4 px-2">
                    <div class="card-content bg-dark">

                        <div class=" p-2 row">
                            <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right rounded-0 text-center card-img">
                                <img src="<?= $cdnUrl ?>/img/background.jpg" alt=""
                                     class="img-fluid rounded-circle mt-3">
                            </div>

                            <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                <h6 class="text-white  text-center">Name:<span
                                            class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                <h6 class="text-white text-center">Chức Vụ:<span
                                            class=" text-warning font-weight-lighter">Trưởng Ban Tư Vấn</span>
                                </h6>
                                <div class="social-group pt-3 text-center">
                                    <a href="#"><span
                                                class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                    <a href="#"><span
                                                class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                    <a href="#"><span
                                                class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </main>
</div>
