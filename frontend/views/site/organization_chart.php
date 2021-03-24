<?php
$cdnUrl = Yii::$app->params['frontend'];
?>
<head>
    <style>
        body {
            font-weight: 500;
        }

        .img-fluid {
            width: 5rem;
            height: 5rem;
        }

        @media (max-width: 990px) {
            .card-img {
                border: none !important;
                padding-bottom: 2rem;
                border-bottom: 1px solid white !important;
            }
        }

        header {
            background-image: url("<?=$cdnUrl?>/img/chart-header.png");
            background-size: cover;
        }

        .card-content {
            box-shadow: 1px 2px 10px black !important;
            overflow: hidden;

        }

        .card-content:hover .fab {
            transform: translate(0%, 0%);
        }

        main .fab {
            transition: 0.5s;
            transform: translate(1000%);
        }

        main .fab:hover {
            transition: 0.5s;
            color: black !important;
            background-color: white !important;
            transform: scale(1.1) !important;
        }
    </style>

</head>

<div class="container-fluid bg-light">

    <header>
        <div class="container-fluid">
            <div class="row p-0">
                <div class="col-0 col-ms-0 col-md-6 col-lg-6"></div>
                <div class="col-12 col-ms-12 col-md-6 col-lg-6">
                    <div class="header-content p-5">
                        <h1 class="text-white">Kim Khánh Hân Hạnh Chào Mừng Quý Khách</h1>
                        <br>
                        <br>
                        <p class="text-warning">Liên Hệ Với Chúng Tôi !</p>
                        <div class="social-group">

                            <a class="p-2" href="#"><span
                                        class="fab fa-facebook fa-2x p-3 bg-primary text-light rounded-circle"></span></a>
                            <a class="p-2" href="#"><span
                                        class="fab fa-twitter fa-2x p-3 bg-info text-light rounded-circle"></span></a>
                            <a class="p-2" href="#"><span
                                        class="fab fa-instagram fa-2x p-3 bg-danger text-light rounded-circle"></span></a>

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
                <div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 px-2 text-center ">
                    <div class="card-content">

                        <div class="row bg-dark shadow-lg py-3">
                            <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right rounded-0 text-center card-img">
                                <img src="<?= $cdnUrl ?>/img/background.jpg" alt=""
                                     class="img-fluid rounded-circle mt-3">
                            </div>

                            <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                <h6 class="text-white  text-center">Name:<span
                                            class="text-warning font-weight-lighter"> Mr.A</span></h6>
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
                <div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>

                <div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 text-center px-2">
                    <div class="card-content">

                        <div class="row bg-dark shadow-lg py-3">
                            <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right rounded-0 text-center card-img">
                                <img src="<?= $cdnUrl ?>/img/background.jpg" alt=""
                                     class="img-fluid rounded-circle mt-3">
                            </div>

                            <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                <h6 class="text-white  text-center">Name:<span
                                            class="text-warning font-weight-lighter"> Mr.A</span></h6>
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
                <div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>

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
                <div class="col-4 col-sm-4 col-md-4 col-lg-4"></div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 text-center px-2">
                    <div class="card-content">

                        <div class="row bg-dark shadow-lg py-3">
                            <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right rounded-0 text-center card-img">
                                <img src="<?= $cdnUrl ?>/img/background.jpg" alt=""
                                     class="img-fluid rounded-circle mt-3">
                            </div>

                            <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                <h6 class="text-white  text-center">Name:<span
                                            class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                <h6 class="text-white text-center">Chức Vụ:<span
                                            class=" text-warning font-weight-lighter">Tổng Phụ Trách</span>
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
                <div class="col-4 col-sm-4 col-md-4 col-lg-4"></div>

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
                    <p class="py-2 bg-danger text-center text-white m-0">TỔNG PHÒNG BAN</p>
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
                <div class="col-4 col-sm-4 col-md-4 col-lg-4"></div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 text-center px-2">
                    <div class="card-content">

                        <div class="row bg-dark shadow-lg py-3">
                            <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right rounded-0 text-center card-img">
                                <img src="<?= $cdnUrl ?>/img/background.jpg" alt=""
                                     class="img-fluid rounded-circle mt-3">
                            </div>

                            <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                <h6 class="text-white  text-center">Name:<span
                                            class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                <h6 class="text-white text-center">Chức Vụ:<span
                                            class=" text-warning font-weight-lighter">Trưởng Phòng Ban</span>
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
                <div class="col-4 col-sm-4 col-md-4 col-lg-4"></div>

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
                    <p class="py-2 bg-danger text-center text-white m-0">BAN DEV</p>
                </div>
                <div class=" col-4 col-sm-4 col-md-4 col-lg-4 px-5">
                    <p class="py-2 bg-danger text-center text-white m-0">BAN TEST</p>
                </div>
                <div class=" col-4 col-sm-4 col-md-4 col-lg-4 px-5">
                    <p class="py-2 bg-danger text-center text-white m-0">BAN BA</p>
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

            <div class="row">

                <div class="col-4 col-sm-4 col-md-4 col-lg-4 px-2">
                    <div class="card-content bg-dark  p-2">

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
                                            class=" text-warning font-weight-lighter">Trưởng Ban Test</span>
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
                                            class=" text-warning font-weight-lighter">Trưởng Ban BA</span>
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
