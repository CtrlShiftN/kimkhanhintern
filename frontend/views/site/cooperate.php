<?php

/* @var $this yii\web\View */

$this->title = 'Cooperate';
$cdnUrl = Yii::$app->params['frontend'];
?>
<div class="bg-light p-3">
    <div class="container bg-white">
        <h1 class="text-primary">Hợp tác</h1>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                 aria-valuemax="100"></div>
        </div>
        <p>Cám ơn bạn đã ghé thăm website kimkhanh.com.vn – Mạng xã hội tuyển dụng của chúng tôi!</p>
        <p>MyWork mong muốn hợp tác với toàn thể các quý tổ chức, doanh nghiệp và đối tác truyền thông trong, ngoài nước
            có cùng sự quan tâm đến thị trường lao động, việc làm Việt Nam. KimKhanh hiện có nhiều chương trình và mô
            hình
            hợp tác phong phú phù hợp với từng đặc thù và nhu cầu riêng.</p>
        <p>Đừng ngần ngại liên hệ ngay với KimKhanh theo thông tin sau:</p>
        <p>Email: <a href="#">kimkhanh@gmail.com</a><br>
            Moble: <a href="#">0123456789</a><br>
            KimKhanh Team.</p>
        <?php
        $companyName = array("TW Đoàn TNCS Hồ Chí Minh", "Vụ công tác Thanh niên – Bộ Nội vụ", "Cổng thông tin điện tử Zing");
        $address = array("62 Bà Triệu, Hoàn Kiếm, Hà Nội", "16 Lê Hồng Phong, Ba Đình, Hà Nội", "45 Bà Triệu- Hoàn Kiếm- Hà Nội");
        $image = array("cooperate.jpg", "cooperate.jpg", "cooperate.jpg");
        $signContent = array("Được sự giới thiệu của Ban giám đốc Học viện Nông nghiệp Việt Nam, ngày 09/3/2021, Công ty Otrafy đã kết nối và có buổi thăm và làm việc cùng Học viện, cụ thể là Khoa Công nghệ thông tin, Khoa Công nghệ thực phẩm và Trung tâm Đổi mới sáng tạo.", "Được sự giới thiệu của Ban giám đốc Học viện Nông nghiệp Việt Nam, ngày 09/3/2021, Công ty Otrafy đã kết nối và có buổi thăm và làm việc cùng Học viện, cụ thể là Khoa Công nghệ thông tin, Khoa Công nghệ thực phẩm và Trung tâm Đổi mới sáng tạo.", "Được sự giới thiệu của Ban giám đốc Học viện Nông nghiệp Việt Nam, ngày 09/3/2021, Công ty Otrafy đã kết nối và có buổi thăm và làm việc cùng Học viện, cụ thể là Khoa Công nghệ thông tin, Khoa Công nghệ thực phẩm và Trung tâm Đổi mới sáng tạo.");
        $date = array("20/12/2020", "20/12/2020", "20/12/2020");
        rsort($companyName);
        rsort($address);
        rsort($image);
        rsort($signContent);
        rsort($date);
        echo "<div class = 'row m-0 p-0 mt-2'>";
        $length = count($companyName);
        for ($value = 0; $value < $length; $value++) {

            echo "<div class = 'col-12'>";
            echo "<div class = 'row my-3 mx-2 bg-dark'>";
            echo "<div class = 'col-4 m-auto p-0 imageNone'>";
            echo "<img class = 'w-100 m-auto p-0' src='<?= $cdnUrl ?>/web/img/$image[$value]' alt=''>";
            echo "</div>";
            echo "<div class='col-8 bg-dark m-auto text-white p-2'>";
            echo "<h5><a class='text-light' href='#'>" . $companyName[$value] . "</a></h5>";
            echo "Địa chỉ: " . $address[$value] . "<br>";
            echo "<small>" . $signContent[$value] . "</small><br><br>";
            echo "<p><i class='fas fa-calendar-alt'></i>" . " " . $date[$value] . "</p>";
            echo "</div>";
            echo "</div></div>";

        }
        echo "</div>";
        ?>
    </div>
</div>


