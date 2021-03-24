<?php

/* @var $this yii\web\View */

$this->title = 'FAQ-KimKhanh';
$cdnUrl = Yii::$app->params['frontend'];
?>
<style>
    .content-faq {
    color: white;
}
.title-faq{
    color: #ff3c3cdb!important;
}
.bg-title-faq a:hover {
    text-decoration: none;
}
.bg-img-faq{
    background-image: url('<?= $cdnUrl ?>/img/background-faq.jpg');
    background-size: cover;
    background-attachment: fixed;
}
.bg-title-faq{
    background-color: #21252982!important;
}
.card{
    color: white;
    background-color: #0000006e;
    border: 1px solid rgba(0,0,0,.125)
}
.list-faq{
    list-style-type: lower-alpha;
    color: #ffbe87!important;
}
@media only screen and (max-width: 360px) {
    .title-faq {
        font-size: 16px;
    }
}
@media only screen and (max-width: 360px) {
    .content-faq {
        font-size: 10px;
    }
}
@media only screen and (max-width: 360px) {
    .guide-faq {
        font-size: 10px;
    }
}
@media only screen and (max-width: 360px) {
    .document-faq {
        font-size: 10px;
    }
}
@media only screen and (max-width: 760px) {
    .title-faq {
        font-size: 16px;
    }
}
@media only screen and (max-width: 760px) {
    .content-faq {
        font-size: 12px;
    }
}
@media only screen and (max-width: 760px) {
    .guide-faq {
        font-size: 12px;
    }
}
@media only screen and (max-width: 760px) {
    .document-faq {
        font-size: 12px;
    }
}
</style>
<div class="bg-img-faq p-3">
    <div class="container bg-title-faq">
        <h4 class="text-dark title-faq pt-4 mb-3"><u><i class="far fa-question-circle"></i> CÂU HỎI THƯỜNG GẶP:</u></h4>
        <a class="text-decoration-none" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="false"
           aria-controls="collapse">
            <p class="py-3 mb-0 border-top border-dark col-12 text-color content-faq font-weight-bold">
                1. Dung lượng tối đa mà FPT Telecom cung cấp cho email @fpt.vn, @hcm.fpt.vn?</p></a>
        <div class="collapse" id="collapse">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Domain mail @fpt.vn dung lượng được cấp là 50 Mbyte</li>
                    <li class="guide-faq">Domain mail @hcm.fpt.vn dung lượng được cấp là 20 MByte</li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="false"
           aria-controls="collapse">
            <p class="py-3 mb-0 border-top border-dark col-12 text-color content-faq font-weight-bold">
                2. Mail @fpt.vn, @hcm.fpt.vn hỗ trợ các giao thức nào cho việc gửi/nhận email ?</p></a>
        <div class="collapse" id="collapse1">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Các giao thức được hỗ trợ: POP3/SMTP, IMAP/SMTP, HTTP</li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="false"
           aria-controls="collapse">
            <p class="py-3 mb-0 border-top border-dark col-12 text-color content-faq font-weight-bold">
                3. Các port hiện tại mà hệ thống email của mail @fpt.vn, @hcm.fpt.vn sử dụng cho client như OE/MO ?</p>
        </a>
        <div class="collapse" id="collapse2">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Port 110, 587, 143</li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="false"
           aria-controls="collapse">
            <p class="py-3 mb-0 border-top border-dark col-12 text-color content-faq font-weight-bold">
                4. Hướng dẫn cài mail @fpt.vn trên máy tính</p></a>
        <div class="collapse" id="collapse3">
            <div class="card card-body border-top border-dark-0 p-1">
                <ol class="list-faq">
                    <li value="1">Server Information:</li>
                </ol>
                <ul class="m-0">
                    <li class="guide-faq">Incoming mail Server: <span class="text-info">POP3</span></li>
                    <li class="guide-faq">Incoming mail (POP3): <span class="text-info">imail.fpt.vn</span></li>
                    <li class="guide-faq">Outgoing mail (SMTP): <span class="text-info">omail.fpt.vn</span></li>
                </ul>
                <ol class="list-faq">
                    <li value="2">Account Information:</li>
                </ol>
                <ul class="m-0">
                    <li class="guide-faq">Account name (User name): tên account e-mail (không có @fpt.vn).</li>
                    <li class="guide-faq">Ví dụ: địa chỉ e-mail là call@fpt.vn thì Account name là call</li>
                    <li class="guide-faq">Password: mật khẩu đăng nhập e-mail</li>
                </ul>
                <ol class="list-faq">
                    <li value="3">Server Port Number:</li>
                </ol>
                <ul class="m-0">
                    <li class="guide-faq">Outgoing mail (SMTP): <span>587</span></li>
                    <li class="guide-faq">Incoming mail (POP3): <span>110</span></li>
                </ul>
                <p class="document-faq"><a href="#" class="text-info">Nhấn vào đây</a> để tham khảo tài liệu và video hướng dẫn trực tiếp các
                    lỗi liên quan đến mail.
                </p>
            </div>
        </div>
        <a class="text-decoration-none" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="false"
           aria-controls="collapse">
            <p class="py-3 mb-0 border-top border-dark col-12 text-color content-faq font-weight-bold">
                5. Hướng dẫn cài mail @hcm.fpt.vn trên máy tính</p></a>
        <div class="collapse" id="collapse4">
            <div class="card card-body border-top border-dark-0 p-1">
                <p>Các thông số cài đặt</p>
                <ol class="list-faq">
                    <li value="1">Server Information:</li>
                </ol>
                <ul class="m-0">
                    <li class="guide-faq">Incoming mail Server: <span class="text-info">POP3</span></li>
                    <li class="guide-faq">Incoming mail (POP3): <span class="text-info">imail.hcm.fpt.vn</span></li>
                    <li class="guide-faq">Outgoing mail (SMTP): <span class="text-info">omail.hcm.fpt.vn</span></li>
                </ul>
                <ol class="list-faq">
                    <li value="2">Account Information:</li>
                </ol>
                <ul class="m-0">
                    <li class="guide-faq">Account name (User name): tên account e-mail (không có @hcm.fpt.vn).</li>
                    <li class="guide-faq">Ví dụ: địa chỉ e-mail là call@hcm.fpt.vn thì Account name là call</li>
                    <li class="guide-faq">Password: mật khẩu đăng nhập e-mail</li>
                </ul>
                <ol class="list-faq">
                    <li value="3">Server Port Number:</li>
                </ol>
                <ul class="m-0">
                    <li class="guide-faq">Outgoing mail (SMTP): <span>587</span></li>
                    <li class="guide-faq">Incoming mail (POP3): <span>110</span></li>
                </ul>
                <p><a href="#" class="text-info">Nhấn vào đây</a> để tham khảo tài liệu và video hướng dẫn trực tiếp các
                    lỗi liên quan đến mail.
                </p>
            </div>
        </div>
        <a class="text-decoration-none" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="false"
           aria-controls="collapse">
            <p class="py-3 mb-0 border-top border-dark col-12 text-color content-faq font-weight-bold">
                6. Hướng dẫn xử lý lỗi gửi email "Your server have unexpectedly terminated connection,..."</p></a>
        <div class="collapse" id="collapse5">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Do các phần mềm trên máy chưa chuyển sang chế độ xác thực việc gửi email và chuyển port gửi
                        email từ port 25 sang port 587 (vẫn dùng cấu hình cũ). Quý khách vui lòng kiểm tra lại thông số
                        cài đặt trên email.
                    </li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="false"
           aria-controls="collapse">
            <p class="py-3 mb-0 border-top border-dark col-12 text-color content-faq font-weight-bold">
                7. Hướng dẫn xử lý lỗi gửi email "554 5.7.1 Recipient address rejected: Inactive mailbox"</p></a>
        <div class="collapse" id="collapse6">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Lỗi này thường xảy ra khi Quý khách không sử dụng email một thời gian dài. Trường hợp này cần
                        liên hệ FPT, gởi email thông báo lỗi về group mail <a href="#">hotrokhachhang@fpt.com.vn</a> để
                        được kĩ thuật active lại thì mới sử dụng được.
                    </li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none" href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="false"
           aria-controls="collapse">
            <p class="py-3 mb-0 border-top border-dark col-12 text-color content-faq font-weight-bold">
                8. Hướng dẫn xử lý lỗi gửi email "553 5.7.1 Sender address rejected not owned by user
                ten_email@fpt.vn"</p></a>
        <div class="collapse" id="collapse7">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">"Do Quý khách cấu hình không đúng username tương ứng với email sẽ báo lỗi này. Vào phần cài đặt
                        email chỉnh sửa lại account name
                    </li>
                    <p class="document-faq">Lưu ý: bỏ phần @fpt.vn. Ví dụ email là abc@fpt.vn thì phần account name sẽ là “abc"</p>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none" href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="false"
           aria-controls="collapse">
            <p class="py-3 mb-0 border-top border-dark col-12 text-color content-faq font-weight-bold">
                9. Khi gửi email @fpt.vn trên web mail báo lỗi tiếng Việt, phía người nhận không đọc được nội dung</p>
        </a>
        <div class="collapse" id="collapse8">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Nguyên nhân là do email server không hỗ trợ tiếng Việt trên web.</li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none" href="#" data-toggle="collapse" data-target="#collapse9" aria-expanded="false"
           aria-controls="collapse">
            <p class="py-3 mb-0 border-top border-dark col-12 text-color content-faq font-weight-bold">
                10. Hướng dẫn xử lý lỗi gửi email " Your mailbox is closed "</p></a>
        <div class="collapse" id="collapse9">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Lỗi này do đã dùng hết dung lượng email. Quý khách kiểm tra lại các mục inbox và xóa hết các
                        email không cần thiết.
                    </li>
                </ul>
                <p class="document-faq"><a href="#" class="text-info">Nhấn vào đây</a> để tham khảo tài liệu và video hướng dẫn trực tiếp các
                    lỗi liên quan đến mail.
                </p>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".text-color").click(function(){
            $(this).css("color", "#f37527");
        });
    });
</script>