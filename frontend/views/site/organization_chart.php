<?php
$cdnUrl = Yii::$app->params['frontend'];
?>
<head>
    <style>
        body {
            font-weight: 500;
        }

        .img-fluid {
            transition: 0.2s !important;

            width: 5rem;
            height: 5rem;
        }

        header {
            background-image: url("<?=$cdnUrl?>/img/chart-header.png");
            background-size: cover;
        }

        .card-content h6 {
            text-align: left !important;
        }

        p {
            height: 100% !important;
        }

        main .fab:hover {
            transition: 0.5s;
            color: black !important;
            background-color: white !important;
            transform: scale(1.1) !important;
        }

        @media (max-width: 768px) {
            .feature-sm-0 {
                height: 0 !important;
                border: none !important;
            }

            .border-right-md {
                border-right: 1px solid red !important;
            }

            .border-left-md {
                border-left: 1px solid red !important;
            }
        }

        @media (max-width: 990px) {
            .card-content h6, .card-content .social-group {
                text-align: center !important;
            }

            .border-bottom-md {
                border-bottom: 1px solid white !important;
            }

            .border-right-lg {
                border-right: none !important;
            }

            .card h6, .card p, .card .social-group {
                text-align: center !important;
            }
        }

        @media (max-width: 574px) {
            .card-content h6 {
                font-size: 13px !important;
                transition: 0.2s !important;
            }

            p {
                width: 95% !important;
            }

            .card h6, .card p, .fab {
                font-size: 95% !important;
            }

            .feature-sm-1 {
                border: none !important;
                height: 0 !important;
            }

            .px-5 {
                padding-left: 0.7rem !important;
                padding-right: 0.7rem !important;
                transition: 0.2s !important;

            }

            .border-right-md {
                border-right: none !important;
            }

            .border-left-md {
                border-left: none !important;
            }

            .border-bottom-sm-0 {
                border-bottom: none !important;
            }

            .border-left-sm-0 {
                border-left: none !important;
            }

            .border-right-sm-0 {
                border-right: none !important;
            }
        }

        @media (max-width: 370px) {
            .card-content {
                height: 255px !important;
                transition: 0.2s !important;

            }

            p {
                width: 80% !important;
            }

            .card h6, .card p, .fab {
                font-size: 80% !important;
            }

            .img-fluid {
                width: 3rem;
                height: 3rem;
                transition: 0.2s !important;

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

                <div class="col-2 col-sm-2 col-md-4 col-lg-4"></div>
                <div class="col-8 col-sm-8 col-md-4 col-lg-4 px-lg-5 px-md-3 px-sm-2">
                    <p class="py-2 bg-danger text-center text-white m-0 m-auto">BAN GIÁM ĐỐC</p>
                </div>
                <div class="col-2 col-sm-2 col-md-4 col-lg-4"></div>

            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-right border-bottom border-danger py-3 border-bottom-sm-0"></div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left border-danger border-bottom py-3 border-bottom-sm-0"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 "></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-0 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-0 col-sm-6 col-md-6 col-lg-6"></div>
                        <div class="col-0 col-sm-6 col-md-6 col-lg-6 border-left  border-danger py-0 py-sm-3 py-md-3 py-lg-3 border-left-sm-0"></div>
                    </div>
                </div>

                <div class="col-0 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-0 col-sm-6 col-md-6 col-lg-6 border-right border-danger py-0 py-sm-3 py-md-3 py-lg-3 border-right-sm-0"></div>
                        <div class="col-0 col-sm-6 col-md-6 col-lg-6 "></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 px-5">
                    <div class="row">
                        <div class="col-3 col-sm-0 col-md-1 col-lg-0">
                        </div>

                        <div class="col-6 col-sm-12 col-md-10 col-lg-12">
                            <div class="row  py-3 bg-dark">
                                <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right border-bottom-md pb-4 pb-lg-0  border-none rounded-0 text-center border-right-lg">
                                    <img src="<?= $cdnUrl ?>/img/background.jpg" alt=""
                                         class="img-fluid rounded-circle mt-3">
                                </div>

                                <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2 p-3 text-center">
                                    <h6 class="text-white text-md-center text-lg-left"><span
                                                class="text-warning font-weight-lighter">Nguyễn Hoàng Quỳnh Châu</span>
                                    </h6>
                                    <h6 class="text-white text-md-center text-lg-left"><span
                                                class=" text-danger font-weight-lighter"> Giám Đốc</span>
                                    </h6>
                                    <div class="social-group pt-3 text-md-center text-lg-left">
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

                        <div class="col-3 col-sm-0 col-md-1 col-lg-0"></div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-6 px-5 mt-4 mt-sm-0 mt-md-0 mt-lg-0">
                    <div class="row">
                        <div class="col-3 col-sm-0 col-md-1 col-lg-0">
                        </div>

                        <div class="col-6 col-sm-12 col-md-10 col-lg-12">
                            <div class="row  py-3 bg-dark">
                                <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right border-bottom-md pb-4 pb-lg-0  border-none rounded-0 text-center border-right-lg">
                                    <img src="<?= $cdnUrl ?>/img/background.jpg" alt=""
                                         class="img-fluid rounded-circle mt-3">
                                </div>

                                <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2 p-3 text-center">
                                    <h6 class="text-white text-md-center text-lg-left"><span
                                                class="text-warning font-weight-lighter">Nguyễn Hoàng Quỳnh Châu</span>
                                    </h6>
                                    <h6 class="text-white text-md-center text-lg-left"><span
                                                class=" text-danger font-weight-lighter"> Giám Đốc</span>
                                    </h6>
                                    <div class="social-group pt-3 text-md-center text-lg-left">
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

                        <div class="col-3 col-sm-0 col-md-1 col-lg-0"></div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-0 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left border-bottom border-danger py-sm-3 py-md-3 py-lg-3 border-left-sm-0 border-bottom-sm-0"></div>
                    </div>
                </div>

                <div class="col-0 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-right border-danger border-bottom py-sm-3 py-md-3 py-lg-3 border-right-sm-0 border-bottom-sm-0"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 "></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-right  border-danger py-3 d-none d-lg-inline d-lg-inline d-lg-inline"></div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left border-danger py-3 d-none d-lg-inline d-lg-inline d-lg-inline"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 "></div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-1 col-sm-4 col-md-4 col-lg-4"></div>
                <div class="col-10 col-sm-4 col-md-4 col-lg-4 px-5 px-sm-2 px-md-3 px-lg-5 d-none d-lg-inline d-lg-inline d-lg-inline">
                    <p class="py-2 bg-danger text-center text-white m-0 px-2 m-auto">TỔNG PHỤ TRÁCH</p>
                </div>
                <div class="col-1 col-sm-4 col-md-4 col-lg-4"></div>

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


            <div class="row m-0 p-0">
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 border-right-md pb-sm-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 border-danger border-right py-lg-3 py-sm-2"></div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 border-top border-danger feature-sm-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-sm-2 col-md-0 col-lg-0"></div>
                        <div class="col-8 col-sm-8 col-md-12 col-lg-12 px-5 px-sm-2 px-md-3 px-lg-5">
                            <p class="py-2 bg-danger text-center text-white m-0 px-2 m-auto">PHÒNG DEV</p>
                        </div>
                        <div class="col-2 col-sm-2 col-md-0 col-lg-0"></div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-right border-danger py-2"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left border-danger py-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-sm-0 col-lg-0 col-md-0"></div>
                        <div class="col-8 col-md-12 col-sm-12 col-lg-12 px-sm-3 px-lg-3 px-md-2">
                            <div class="card border-0 shadow-lg text-center bg-dark">
                                <img src="<?= $cdnUrl ?>/img/background.jpg" alt=""
                                     class="img-fluid rounded-circle mx-auto my-3 mt-4">
                                <div class="card-body text-center border-light border-top">
                                    <h6 class="text-white"><span
                                                class="text-warning font-weight-lighter">Nguyễn Hoàng Quỳnh Châu</span>
                                    </h6>
                                    <h6 class="text-white"><span
                                                class=" text-danger font-weight-lighter"> Giám Đốc</span>
                                    </h6>
                                    <div class="social-group pt-3 text-center mx-auto">
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
                        <div class="col-2 col-sm-0 col-lg-0 col-md-0"></div>

                    </div>
                </div>


                <div class="col-12 col-sm-6 col-md-3 col-lg-3 border-left-md mt-3 mt-sm-0 mt-md-0 mt-lg-0">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 border-danger border-right py-lg-3 py-sm-2 border-top border-danger feature-sm-1"></div>
                        <div class="col-0 col-sm-0 col-md-6 col-lg-6  border-danger border-top  feature-sm-0 feature-sm-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-sm-2 col-md-0 col-lg-0"></div>
                        <div class="col-8 col-sm-8 col-md-12 col-lg-12 px-5 px-sm-2 px-md-3 px-lg-5">
                            <p class="py-2 bg-danger text-center text-white m-0 px-2 m-auto">PHÒNG TECH</p>
                        </div>
                        <div class="col-2 col-sm-2 col-md-0 col-lg-0"></div>
                    </div>

                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-right border-danger py-2"></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left border-danger py-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-sm-0 col-lg-0 col-md-0"></div>
                        <div class="col-8 col-md-12 col-sm-12 col-lg-12 px-sm-3 px-lg-3 px-md-2">
                            <div class="card border-0 shadow-lg text-center bg-dark">
                                <img src="<?= $cdnUrl ?>/img/background.jpg" alt=""
                                     class="img-fluid rounded-circle mx-auto my-3 mt-4">
                                <div class="card-body text-center border-light border-top">
                                    <h6 class="text-white"><span
                                                class="text-warning font-weight-lighter">Nguyễn Hoàng Quỳnh Châu</span>
                                    </h6>
                                    <h6 class="text-white"><span
                                                class=" text-danger font-weight-lighter"> Giám Đốc</span>
                                    </h6>
                                    <div class="social-group pt-3 text-center mx-auto">
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
                        <div class="col-2 col-sm-0 col-lg-0 col-md-0"></div>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mt-3 mt-sm-0 mt-md-0 mt-lg-0"
                ">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 border-top border-danger feature-sm-0 feature-sm-1"></div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 border-danger border-left py-lg-3 py-sm-2 border-top border-danger feature-sm-1 "></div>
                </div>
                <div class="row">
                    <div class="col-2 col-sm-2 col-md-0 col-lg-0"></div>
                    <div class="col-8 col-sm-8 col-md-12 col-lg-12 px-5 px-sm-2 px-md-3 px-lg-5">
                        <p class="py-2 bg-danger text-center text-white m-0 px-2 m-auto">PHÒNG KỸ SƯ</p>
                    </div>
                    <div class="col-2 col-sm-2 col-md-0 col-lg-0"></div>
                </div>

                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-right border-danger py-2"></div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left border-danger py-2"></div>
                </div>
                <div class="row">
                    <div class="col-2 col-sm-0 col-lg-0 col-md-0"></div>
                    <div class="col-8 col-md-12 col-sm-12 col-lg-12 px-sm-3 px-lg-3 px-md-2">
                        <div class="card border-0 shadow-lg text-center bg-dark">
                            <img src="<?= $cdnUrl ?>/img/background.jpg" alt=""
                                 class="img-fluid rounded-circle mx-auto my-3 mt-4">
                            <div class="card-body text-center border-light border-top">
                                <h6 class="text-white"><span
                                            class="text-warning font-weight-lighter">Nguyễn Hoàng Quỳnh Châu</span>
                                </h6>
                                <h6 class="text-white"><span
                                            class=" text-danger font-weight-lighter"> Giám Đốc</span>
                                </h6>
                                <div class="social-group pt-3 text-center mx-auto">
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
                    <div class="col-2 col-sm-0 col-lg-0 col-md-0"></div>

                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3 col-lg-3 mt-3 mt-sm-0 mt-md-0 mt-lg-0"
            ">

            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 border-top border-danger feature-sm-1"></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 border-danger border-left py-lg-3 py-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-2 col-sm-2 col-md-0 col-lg-0"></div>
                <div class="col-8 col-sm-8 col-md-12 col-lg-12 px-5 px-sm-2 px-md-3 px-lg-5">
                    <p class="py-2 bg-danger text-center text-white m-0 px-2 m-auto">PHÒNG HỖ TRỢ</p>
                </div>
                <div class="col-2 col-sm-2 col-md-0 col-lg-0"></div>
            </div>

            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-right border-danger py-2"></div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 border-left border-danger py-2"></div>
            </div>
            <div class="row">
                <div class="col-2 col-sm-0 col-lg-0 col-md-0"></div>
                <div class="col-8 col-md-12 col-sm-12 col-lg-12 px-sm-3 px-lg-3 px-md-2">
                    <div class="card border-0 shadow-lg text-center bg-dark">
                        <img src="<?= $cdnUrl ?>/img/background.jpg" alt=""
                             class="img-fluid rounded-circle mx-auto my-3 mt-4">
                        <div class="card-body text-center border-light border-top">
                            <h6 class="text-white"><span
                                        class="text-warning font-weight-lighter">Nguyễn Hoàng Quỳnh Châu</span>
                            </h6>
                            <h6 class="text-white"><span
                                        class=" text-danger font-weight-lighter"> Giám Đốc</span>
                            </h6>
                            <div class="social-group pt-3 text-center mx-auto">
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
                <div class="col-2 col-sm-0 col-lg-0 col-md-0"></div>

            </div>
        </div>
</div>
</main>
</div>
