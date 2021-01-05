<!-- <?php include_once './class/User.php'; ?> -->
<div class="footer">
    <div class="footer__line">
    </div>
    <div class="footer__inner">
        <div class="top__footer">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-3 m-6 c-6">
                        <div class="top__footer-item">
                            <div class="top__footer-item-title">
                                CHĂM SÓC KHÁCH HÀNG
                            </div>
                            <div class="top__footer-link-wrap">
                                <a href="" class="top__footer-item-link">
                                    <span>Trung tâm trợ giúp</span>
                                </a>
                                <a href="" class="top__footer-item-link">
                                    <span>Hướng dẫn mua hàng</span>
                                </a>
                                <a href="" class="top__footer-item-link">
                                    <span>Chính sách vận chuyển</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-6">
                        <div class="top__footer-item">
                            <div class="top__footer-item-title">
                                VỀ CHÚNG TÔI
                            </div>
                            <div class="top__footer-link-wrap">
                                <a href="" class="top__footer-item-link">
                                    <span>Giới thiệu về Mỹ Phẩm Ohui - LG Vina</span>
                                </a>
                                <a href="" class="top__footer-item-link">
                                    <span>
                                        Tuyển dụng
                                    </span>
                                </a>
                                <a href="" class="top__footer-item-link">
                                    <span>Điều Khoản chính sách</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-6">
                        <div class="top__footer-item">
                            <div class="top__footer-item-title">
                                THEO DÕI CHÚNG TÔI TRÊN
                            </div>
                            <div class="top__footer-link-wrap ">
                                <a href="" class="top__footer-item-link top__footer-link--social">
                                    <i class="fab fa-facebook top__footer-item-icon"></i>
                                    <span>Facebook</span>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-6">
                        <div class="top__footer-item">
                            <div class="top__footer-item-title">
                                VÀO CỬA HÀNG TRÊN ỨNG DỤNG MYOHUI
                            </div>
                            <div class="top__footer-link-wrap">
                                <a href="" class="top__footer-item-link top__footer-item-link--download-apps">
                                    <img src="./assets/img/footer-qr.png" alt="" class="top__footer-qr">
                                    <div class="top__footer-download-apps hide-on-mobile">
                                        <img src="./assets/img/applay-store.png" alt="" class="top__footer-download-img">
                                        <img src="./assets/img/google-play.png" alt="" class="top__footer-download-img">
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom__footer">
            <div class="grid container">
                <div class="bottom__footer-list">
                    <a href="" class="bottom__footer-item">
                        <span>CHÍNH SÁCH BẢO MẬT</span>
                    </a>
                    <a href="" class="bottom__footer-item">
                        <span>QUY CHẾ HOẠT ĐỘNG</span>
                    </a>
                    <a href="" class="bottom__footer-item">
                        <span>CHÍNH SÁCH TRẢ HÀNG VÀ HOÀN TIỀN</span>
                    </a>
                </div>
                <div class="firm__info">
                    <p class="firm__name">
                        Công ty mỹ phẩm Ohui- LGvina
                    </p>
                    <p class="firm__address">
                        Chi nhánh: 63 Lê Văn Lương, Trung Hòa, Cầu Giấy, Hà Nội
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="checkbox" id="formData">
<label for="formData" class="modal__overlay-form">
</label>
<div class="modal__content">
    <div class="form__action-wrap">
        <div class="form-select-wrap">
            <!-- form-select-btn--active -->
            <div class="form-select-btn " data="login">
                Đăng nhập
            </div>
            <div class="form-select-btn" data="register">
                Đăng ký
            </div>
        </div>
        <div class="form__btn-close">
            <label for="formData" class="far fa-times-circle form__btn-close-icon"></;>
        </div>
    </div>
    <!-- form__wrap--active -->
    <div class="form__wrap" data="register">
        <form action="index.php?controller=pages&action=register" method="post" class="form" id="form-1">
            <h3 class="form-heading">
                Thành viên đăng ký
            </h3>
            <p class="desc">
                Đăng ký để trở thành thành viên của chúng tôi!
            </p>
            <span class="form-message" id="register-form-message">
            </span>
            <div class="form-group">
                <label for="fullname" class="form-label">Tên đầy đủ</label>
                <input type="text" class="form-input" placeholder="VD: Đỗ Tiến Định" id="register-fullname" name="name">
                <span class="form-message">
                </span>
            </div>
            <div class="form-group">
                <label for="address" class="form-label">Địa chỉ</label>
                <input type="text" class="form-input" placeholder="Nhập địa chỉ" id="register-address" name="address" autocomplete="on">
                <span class="form-message">
                </span>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-input" placeholder="VD: dinhdt.nde19026@vtc.edu.vn" id="register-email" name="email">
                <span class="form-message">
                </span>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-input" placeholder="Nhập mật khẩu" id="register-password" name="password" autocomplete="on">
                <span class="form-message">
                </span>
            </div>
            <div class="form-group">
                <label for="password-comfirmation" class="form-label">Nhập lại mật khẩu</label>
                <input type="password" class="form-input" placeholder="Nhập lại mật khẩu" id="password-comfirmation" name="password-comfirmation" autocomplete="on">
                <span class="form-message">
                </span>
            </div>
            <button class="form-btn" type="submit" name="register_submit">
                Đăng ký
            </button>
            <?php

            // User::register();

            ?>
        </form>
    </div>
    <div class="form__wrap" data="login">
        <form action="" method="post" class="form" id="form-2">
            <h3 class="form-heading">
                Thành viên đăng nhập
            </h3>
            <p class="desc">
                Đăng nhập vào hệ thống cửa hàng!
            </p>
            <span class="form-message">
            </span>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-input" placeholder="VD: dinhdt.nde19026@vtc.edu.vn" id="email" name="email">
                <span class="form-message">
                </span>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-input" placeholder="Nhập mật khẩu" id="password" name="password" autocomplete="on">
                <span class="form-message">
                </span>
            </div>
            <button class="form-btn" type="submit">
                Đăng nhập
            </button>
        </form>
    </div>
</div>

</div>
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

<script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://kit.fontawesome.com/c0378fb81e.js" crossorigin="anonymous"></script>
<script src="./assets/js/validator.js"></script>
<script src="./assets/js/app.js"></script>
<script src="./assets/js/slider_show.js"></script>
<script src="./assets/js/formHandler.js"></script>

<script>
    $('#register-email').on('change', ((e) => {
        $.ajax({
            method: 'POST',
            url: './check_email_exists.php',
            data: {
                email: e.currentTarget.value
            },
            success: (data) => {
                let emailElement = document.getElementById('register-email');
                const getParent = () => {
                    while (emailElement.parentElement) {
                        if (emailElement.parentElement.matches('.form-group')) return emailElement.parentElement;
                        emailElement = emailElement.parentElement;
                    }
                }
                let groupElement = getParent();
                let groupMessElement = groupElement.querySelector('.form-message');
                data = data.trim();
                if (!e.currentTarget.value && data.trim() === 'ok') {
                    groupElement.classList.add('error');
                    groupMessElement.textContent = 'Không được để trống email';
                    return;
                } else if (data.trim() === 'fail') {
                    groupElement.classList.add('error');
                    groupMessElement.textContent = 'Email đã tồn tại';
                } else {
                    groupElement.classList.remove('error');
                    // groupMessElement.textContent = '';
                }
            }
        })
    }))
</script>
<script>
    Validator({
        form: '#form-1',
        errorSelector: '.form-message',
        erorrClass: 'error',
        formGroup: '.form-group',
        rules: [
            Validator.isRequired('#register-fullname', 'Vui lòng nhập đầy đủ họ tên của bạn'),
            Validator.isRequired('#register-email', 'Không được để trống email'),
            Validator.isEmail('#register-email'),
            Validator.isExistEmail('#register-email'),
            Validator.isRequired('#register-password', 'Mật khẩu không được để trống'),
            Validator.minLength('#register-password', 6, 'Mật khẩu tối thiểu phải có 6 kí tự'),
            Validator.isRequired('#password-comfirmation'),
            Validator.isConfirmed('#password-comfirmation', function() {
                return document.querySelector('#form-1 #register-password').value;
            }, 'Mật khẩu nhập lại không chính xác'),
            Validator.isRequired('#register-address', 'Vui lòng nhập địa chỉ'),
        ]
        // ,
        // onSubmit: function(data) {
        //   console.log(data);
        // }
    });
</script>

<!-- validator of login form -->
<script>
    Validator({
        form: '#form-2',
        errorSelector: '.form-message',
        erorrClass: 'error',
        formGroup: '.form-group',
        rules: [
            Validator.isRequired('#email', 'Không được để trống email'),
            Validator.isEmail('#email'),
            Validator.isRequired('#password', 'Mật khẩu không được để trống'),

        ]
        // ,
        // onSubmit: function(data) {
        //   console.log(data);
        // }
    });
</script>

</body>

</html>