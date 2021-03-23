<?php
/**
 * Created by QuyenNV
 * Date: 21 Feb 2021
 * Time: 2:15 AM
 */

$cdnUrl = Yii::$app->params['frontend'];
?>
    <link href="<?= $cdnUrl ?>/css/jquery.orgchart" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?= $cdnUrl ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= $cdnUrl ?>/js/jquery.orgchart.min.js"></script>
    <title>Document</title>
    <style>
        .orgChart{
            border: none!important;
            font-size: 14px;
            background-color: white !important;
        }
        .orgChart td,tr{
            border-color: red!important;
        }
        .orgChart table{
            width: 100%!important;
            height: 100%!important;
        }
        .orgChart .node{
            border-radius: 0!important;
            width: auto !important;
            /* padding: 0!important; */
            height: 100%!important;
            border: none !important;
        }
        .img-fluid{
            width: 4rem;
            height: 4rem;
        }

        @media (max-width: 1100px){
            /* .orgChart .node{
                margin: 1rem!important;
            } */
            /* .img-fluid{
                width: auto;
                height: 5rem;
            }   */
            .orgChart .node.level1{
                width: 50%!important;
            }
            .level:nth-child(2n){
                padding: 1rem!important;
            }
        }
        @media (max-width: 990px){
            .card-img{
                border: none!important;
                padding-bottom: 1rem;
                border-bottom: 1px solid white!important;
            }
            .orgChart .node{
                text-align: center!important;
            }
        }

    </style>
<ul id="organisation">
    <li class="px-5 py-2 bg-danger text-white">BAN GIÁM ĐỐC

        <ul>
            <li class="p-4 bg-dark text-white card-director">
                <div class="container">
                    <div class="row">
                        <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right pl-1">
                            <img src="img/giám đốc img.jpeg" alt="" class="img-fluid rounded-circle mt-3">
                        </div>
                        <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                            <h6 class="text-white  text-center">Name:<span class="text-warning font-weight-lighter"> Mr.A</span></h6>
                            <h6 class="text-white text-center">Chức Vụ:<span class=" text-warning font-weight-lighter"> Giám Đốc</span></h6>
                            <div class="social-group pt-3 text-center">
                                <a href="#"><span class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                <a href="#"><span class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                <a href="#"><span class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul>
                    <li class="px-5 py-2 bg-danger text-white">TỔNG QUẢN LÝ
                        <ul>
                            <li class="px-4 py-2 bg-danger text-white">PHÒNG CHỨC NĂNG
                                <ul>

                                    <li class=" p-4 bg-danger text-white">
                                        <div class="container">
                                            <div class="row">
                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right pl-1">
                                                    <img src="<?=$cdnUrl?>b   /img/logo.png" alt="" class="img-fluid rounded-circle mt-3">
                                                </div>
                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                                    <h6 class="text-white  text-center">Name:<span class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                                    <h6 class="text-white text-center">Chức Vụ:<span class=" text-warning font-weight-lighter"> Giám Đốc</span></h6>
                                                    <div class="social-group pt-3 text-center">
                                                        <a href="#"><span class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                                        <a href="#"><span class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                                        <a href="#"><span class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="px-4 py-2 bg-danger text-white">PHÒNG NHÁNH..
                                                <ul>
                                                    <li class=" p-4 bg-danger text-white">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right pl-1">
                                                                    <img src="img/giám đốc img.jpeg" alt="" class="img-fluid rounded-circle mt-3">
                                                                </div>
                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                                                    <h6 class="text-white  text-center">Name:<span class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                                                    <h6 class="text-white text-center">Chức Vụ:<span class=" text-warning font-weight-lighter"> Giám Đốc</span></h6>
                                                                    <div class="social-group pt-3 text-center">
                                                                        <a href="#"><span class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                                                        <a href="#"><span class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                                                        <a href="#"><span class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <ul>
                                                            <li class="px-4 py-2 bg-danger text-white">PHÒNG NHÁNH.1
                                                                <ul>
                                                                    <li class=" p-4 bg-danger text-white">
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right pl-1">
                                                                                    <img src="img/giám đốc img.jpeg" alt="" class="img-fluid rounded-circle mt-3">
                                                                                </div>
                                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                                                                    <h6 class="text-white  text-center">Name:<span class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                                                                    <h6 class="text-white text-center">Chức Vụ:<span class=" text-warning font-weight-lighter"> Giám Đốc</span></h6>
                                                                                    <div class="social-group pt-3 text-center">
                                                                                        <a href="#"><span class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                                                                        <a href="#"><span class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                                                                        <a href="#"><span class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>

                                                    </li>
                                                </ul>

                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li class="px-4 py-2 bg-danger text-white">PHÒNG CHỨC NĂNG
                                <ul>
                                    <li class=" p-4 bg-danger text-white">
                                        <div class="container">
                                            <div class="row">
                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right pl-1">
                                                    <img src="img/giám đốc img.jpeg" alt="" class="img-fluid rounded-circle mt-3">
                                                </div>
                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                                    <h6 class="text-white  text-center">Name:<span class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                                    <h6 class="text-white text-center">Chức Vụ:<span class=" text-warning font-weight-lighter"> Giám Đốc</span></h6>
                                                    <div class="social-group pt-3 text-center">
                                                        <a href="#"><span class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                                        <a href="#"><span class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                                        <a href="#"><span class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="px-4 py-2 bg-danger text-white">PHÒNG NHÁNH..
                                                <ul>
                                                    <li class=" p-4 bg-danger text-white">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right pl-1">
                                                                    <img src="img/giám đốc img.jpeg" alt="" class="img-fluid rounded-circle mt-3">
                                                                </div>
                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                                                    <h6 class="text-white  text-center">Name:<span class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                                                    <h6 class="text-white text-center">Chức Vụ:<span class=" text-warning font-weight-lighter"> Giám Đốc</span></h6>
                                                                    <div class="social-group pt-3 text-center">
                                                                        <a href="#"><span class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                                                        <a href="#"><span class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                                                        <a href="#"><span class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul>
                                                            <li class="px-4 py-2 bg-danger text-white">PHÒNG NHÁNH.1
                                                                <ul>
                                                                    <li class=" p-4 bg-danger text-white">
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right pl-1">
                                                                                    <img src="img/giám đốc img.jpeg" alt="" class="img-fluid rounded-circle mt-3">
                                                                                </div>
                                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                                                                    <h6 class="text-white  text-center">Name:<span class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                                                                    <h6 class="text-white text-center">Chức Vụ:<span class=" text-warning font-weight-lighter"> Giám Đốc</span></h6>
                                                                                    <div class="social-group pt-3 text-center">
                                                                                        <a href="#"><span class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                                                                        <a href="#"><span class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                                                                        <a href="#"><span class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </li>
                </ul>
            </li>

            <li class="bg-danger p-4 card-director">
                <div class="container">
                    <div class="row">
                        <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right pl-1">
                            <img src="img/giám đốc img.jpeg" alt="" class="img-fluid rounded-circle mt-3">
                        </div>
                        <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                            <h6 class="text-white  text-center">Name:<span class="text-warning font-weight-lighter"> Mr.A</span></h6>
                            <h6 class="text-white text-center">Chức Vụ:<span class=" text-warning font-weight-lighter"> Giám Đốc</span></h6>
                            <div class="social-group pt-3 text-center">
                                <a href="#"><span class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                <a href="#"><span class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                <a href="#"><span class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <ul>

                    <li class="px-5 py-2 bg-danger text-white">TỔNG QUẢN LÝ
                        <ul>
                            <li class="px-4 py-2 bg-danger text-white">PHÒNG CHỨC NĂNG


                                <ul>

                                    <li class=" p-4 bg-danger text-white">
                                        <div class="container">
                                            <div class="row">
                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right pl-1">
                                                    <img src="img/giám đốc img.jpeg" alt="" class="img-fluid rounded-circle mt-3">
                                                </div>
                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                                    <h6 class="text-white  text-center">Name:<span class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                                    <h6 class="text-white text-center">Chức Vụ:<span class=" text-warning font-weight-lighter"> Giám Đốc</span></h6>
                                                    <div class="social-group pt-3 text-center">
                                                        <a href="#"><span class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                                        <a href="#"><span class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                                        <a href="#"><span class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="px-4 py-2 bg-danger text-white">PHÒNG NHÁNH..
                                                <ul>
                                                    <li class=" p-4 bg-danger text-white">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right pl-1">
                                                                    <img src="img/giám đốc img.jpeg" alt="" class="img-fluid rounded-circle mt-3">
                                                                </div>
                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                                                    <h6 class="text-white  text-center">Name:<span class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                                                    <h6 class="text-white text-center">Chức Vụ:<span class=" text-warning font-weight-lighter"> Giám Đốc</span></h6>
                                                                    <div class="social-group pt-3 text-center">
                                                                        <a href="#"><span class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                                                        <a href="#"><span class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                                                        <a href="#"><span class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul>
                                                            <li class="px-4 py-2 bg-danger text-white">PHÒNG NHÁNH.1
                                                                <ul>
                                                                    <li class=" p-4 bg-danger text-white">
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right pl-1">
                                                                                    <img src="img/giám đốc img.jpeg" alt="" class="img-fluid rounded-circle mt-3">
                                                                                </div>
                                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                                                                    <h6 class="text-white  text-center">Name:<span class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                                                                    <h6 class="text-white text-center">Chức Vụ:<span class=" text-warning font-weight-lighter"> Giám Đốc</span></h6>
                                                                                    <div class="social-group pt-3 text-center">
                                                                                        <a href="#"><span class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                                                                        <a href="#"><span class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                                                                        <a href="#"><span class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>

                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li class="px-4 py-2 bg-danger text-white">PHÒNG CHỨC NĂNG
                                <ul>
                                    <li class=" p-4 bg-danger text-white">
                                        <div class="container">
                                            <div class="row">
                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right pl-1">
                                                    <img src="img/giám đốc img.jpeg" alt="" class="img-fluid rounded-circle mt-3">
                                                </div>
                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                                    <h6 class="text-white  text-center">Name:<span class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                                    <h6 class="text-white text-center">Chức Vụ:<span class=" text-warning font-weight-lighter"> Giám Đốc</span></h6>
                                                    <div class="social-group pt-3 text-center">
                                                        <a href="#"><span class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                                        <a href="#"><span class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                                        <a href="#"><span class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="px-4 py-2 bg-danger text-white">PHÒNG NHÁNH..
                                                <ul>
                                                    <li class=" p-4 bg-danger text-white">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right pl-1">
                                                                    <img src="img/giám đốc img.jpeg" alt="" class="img-fluid rounded-circle mt-3">
                                                                </div>
                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                                                    <h6 class="text-white  text-center">Name:<span class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                                                    <h6 class="text-white text-center">Chức Vụ:<span class=" text-warning font-weight-lighter"> Giám Đốc</span></h6>
                                                                    <div class="social-group pt-3 text-center">
                                                                        <a href="#"><span class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                                                        <a href="#"><span class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                                                        <a href="#"><span class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <ul>
                                                            <li class="px-4 py-2 bg-danger text-white">PHÒNG NHÁNH.1
                                                                <ul>
                                                                    <li class=" p-4 bg-danger text-white">
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-4 card-img border-light border-right pl-1">
                                                                                    <img src="img/giám đốc img.jpeg" alt="" class="img-fluid rounded-circle mt-3">
                                                                                </div>
                                                                                <div class=" col-12 col-sm-12 col-md-12 col-lg-8 pt-2">
                                                                                    <h6 class="text-white  text-center">Name:<span class="text-warning font-weight-lighter"> Mr.A</span></h6>
                                                                                    <h6 class="text-white text-center">Chức Vụ:<span class=" text-warning font-weight-lighter"> Giám Đốc</span></h6>
                                                                                    <div class="social-group pt-3 text-center">
                                                                                        <a href="#"><span class="fab fa-facebook text-danger bg-white p-2 rounded-circle"></span></a>
                                                                                        <a href="#"><span class="fab fa-twitter text-danger bg-white p-2 rounded-circle"></span></a>
                                                                                        <a href="#"><span class="fab fa-instagram text-danger bg-white p-2 rounded-circle"></span></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>

                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </li>

                </ul>
            </li>
        </ul>
    </li>
</ul>

<script>

    $(function() {
        $("#organisation").orgChart();
    });
</script>
