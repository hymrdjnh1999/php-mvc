<?php if (!isset($_SESSION['name'])) {
    header('location: index.php');
}  ?>
<div class="detail-form">
    <form class="d-flex" action='' method="post" class="form" id="changePasswordForm">
        <h3 class="form-heading">
            Đổi mật khẩu
        </h3>

        <span class="d-block " style="margin-top: 20px; color:<?php echo $hello === 'ok' ?  '#22CCBB' : 'red'  ?>;font-size:18px">
            <?php
            if ($hello !== 'ok') {
                echo $hello;
            } else {
                echo 'Đổi mật khẩu thành công';
            }
            ?>
        </span>
        <div class="form-group">
            <label for="oldPassword" class="form-label">mật khẩu cũ</label>
            <input type="password" class="form-input" name="oldPassword" id="oldPassword">
            <span class="form-message">
            </span>
        </div>
        <div class="form-group">
            <label for="newPassword" class="form-label">mật khẩu mới</label>
            <input type="password" class="form-input" name="newPassword" id="newPassword">
            <span class="form-message">
            </span>
        </div>
        <div class="form-group">
            <label for="newPasswordConfirm" class="form-label">nhập lại mật khẩu mới</label>
            <input type="password" class="form-input" name="newPasswordConfirm" id="newPasswordConfirm">
            <span class="form-message">
            </span>
        </div>
        <button class="form-btn" type="submit" style="width: 180px;">
            Đổi mật khẩu
        </button>
        <?php
        ?>
    </form>
</div>