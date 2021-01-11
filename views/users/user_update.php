

<div class="" data="register">
    <form action='<?php $_SERVER['PHP_SELF'] ?>' method="post" class="form" id="form-1">
        <h3 class="form-heading">
            UPDATE
        </h3>
        <p class="desc">
            UPDATE FORM
        </p>
        <span class="form-message" id="register-form-message">
        </span>
        <div class="form-group">
            <label for="fullname" class="form-label">Họ Tên</label>
            <input type="text" class="form-input" placeholder="VD: Đỗ Tiến Định" id="register-fullname" name="name" value="<?php ?>">
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