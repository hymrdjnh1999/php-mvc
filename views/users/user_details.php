<?php if(!isset($_SESSION['name'])){
    header('location: index.php');
}  ?>
<div class="detail-form">
    <form class="d-flex" action='' method="post" class="form" id="form-3">
        <h3 class="form-heading">
            Thông tin cá nhân
        </h3>
        <!-- <span class="d-block" style="margin-top: 20px; color:#22CCBB;font-size:18px">
        </span> -->
        <div class="form-group">
            <label for="fullname" class="form-label">Họ Tên</label>
            <input type="text" class="form-input" disabled = "true" value="<?php echo $_SESSION['name']; ?>">
            <span class="form-message">
            </span>
        </div>
        <div class="form-group">
            <label for="address" class="form-label">Địa chỉ</label>
            <input value="<?php echo $_SESSION['address'] ?>" type="text" class="form-input"  disabled = "true" >
            <span class="form-message">
            </span>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input value="<?php echo $_SESSION['email'] ?>" disabled="true" type="text" class="form-input" >
            <span class="form-message">
            </span>
        </div>
        <!-- <div class="form-group">
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
        </div> -->
        <!-- <button class="form-btn" type="submit" style="width: 180px;">
            Cập nhật
        </button> -->
        <?php

        // User::register();

        ?>
    </form>
</div>