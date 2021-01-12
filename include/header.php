<?php include_once("./session.php"); ?>
<?php
include_once("./models/user.php");
?>


<?php
Session::init();
?>
<?php
$updateResult = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['loginEmail']) && isset($_POST['loginPassword'])) {
        User::login($_POST['loginEmail'], $_POST['loginPassword']);
        header("Location: " . $_SERVER['PHP_SELF']);
        return;
    }
    if (isset($_POST['logout']) && $_POST['logout']) {
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        return;
    } else if (isset($_POST['update-address']) && isset($_POST['update-name'])) {
        User::update($_POST['update-address'], $_POST['update-name']);
        header("Location: index.php?controller=users&action=update&id=" . $_GET['id']);
        $updateResult = 'Cập nhật thông tin thành công!';
        return;
    }
    User::register($_POST['email'], $_POST['password'], $_POST['name'], $_POST['address']);
    header("Location: " . $_SERVER['PHP_SELF']);
    return;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front-end ASM</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>


<body>
    <div class="app">
        <div class="header">
            <div class="header__navbar ">
                <!-- top header -->
                <div class="header__navbar-wrapper container">
                    <ul class="header__navbar-list ">
                        <li class="header__navbar-item hide-on-mobile-tablet">
                            <div class="header__navbar-item-link max-height header__navbar-item--separation header__navbar-item-link--has-qr max-height">
                                <span>Vào cửa hàng trên ứng dụng MyOhui</span>
                                <div class="header__navbar-qr">
                                    <a href="" class="header__navbar-qr-link">
                                        <img src="./assets/img/qr.png" alt="" class="header__qr-img" />
                                        <div class="header__navbar-qr-apps">
                                            <img src="./assets/img/google-play.png" alt="" class="header__navbar-qr-app-imgs">
                                            <img src="./assets/img/applay-store.png" alt="" class="header__navbar-qr-app-imgs">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item ">
                            <a href="" class="header__navbar-item-link max-height header__navbar-item--separation">
                                <img src="./assets/img/phone.png" alt="" class="header__navbar-item-img">
                                0965866851
                            </a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-item-link max-height">
                                <img src="./assets/img/mail.png" alt="" class="header__navbar-item-img">
                                ohuivina.com@gmail.com
                            </a>
                        </li>
                    </ul>
                    <ul class="header__navbar-list max-height ">
                        <li class="header__navbar-item header__navbar--has-notify max-height hide-on-mobile-tablet">
                            <a href="" class="header__navbar-item-link max-height max-height">

                                <svg class="header__navbar-item-icon header__navbar-item-icon--bell" viewBox="3 2.5 14 14" x="0" y="0">
                                    <path d="m17 15.6-.6-1.2-.6-1.2v-7.3c0-.2 0-.4-.1-.6-.3-1.2-1.4-2.2-2.7-2.2h-1c-.3-.7-1.1-1.2-2.1-1.2s-1.8.5-2.1 1.3h-.8c-1.5 0-2.8 1.2-2.8 2.7v7.2l-1.2 2.5-.2.4h14.4zm-12.2-.8.1-.2.5-1v-.1-7.6c0-.8.7-1.5 1.5-1.5h6.1c.8 0 1.5.7 1.5 1.5v7.5.1l.6 1.2h-10.3z">
                                    </path>
                                    <path d="m10 18c1 0 1.9-.6 2.3-1.4h-4.6c.4.9 1.3 1.4 2.3 1.4z"></path>
                                </svg>
                                <span>Tin tức</span>
                            </a>
                            <div class="header__notify triangle">

                                <h3 class="header__notify-heading">
                                    Tin tức mới nhất
                                </h3>
                                <ul class="header__notify-list">
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-item-link">
                                            <div class="header__notify-item-img" style="background:url('https://img.abaha.vn/photos/resized/200x120/83-1595936336-myphamohui-lgvina.png')">
                                            </div>
                                            <div class="header__notify-info">
                                                <div class="header__notify-name">Tặng ngay combo 5 gói mặt nạ thải độc Su:m37</div>
                                                <div class="header__notify-description">Khuyến mại siêu hot:</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-item-link">
                                            <div class="header__notify-item-img" style="background:url('https://img.abaha.vn/photos/resized/200x120/83-1590399520-myphamohui-lgvina.png')">

                                            </div>
                                            <div class="header__notify-info">
                                                <div class="header__notify-name">Day Shield Perfect Sun - Cho nàng thơ tự tin "tỏa nắng"</div>
                                                <div class="header__notify-description hidden"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-item-link">
                                            <div class="header__notify-item-img" style="background:url('https://img.abaha.vn/photos/resized/200x120/83-1589960426-myphamohui-lgvina.png')">

                                            </div>
                                            <div class="header__notify-info">
                                                <div class="header__notify-name">CHĂM SÓC KHÔNG QUÊN CHỐNG NẮNG</div>
                                                <div class="header__notify-description">Kem Chống nắng Whoo Gongjinhyang Soo.</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-item-link">
                                            <div class="header__notify-item-img" style="background:url('https://img.abaha.vn/photos/resized/200x120/83-1589966184-myphamohui-lgvina.png')">

                                            </div>
                                            <div class="header__notify-info">
                                                <div class="header__notify-name">DA DẦU CÓ CẦN DƯỠNG ẨM?</div>
                                                <div class="header__notify-description">Whoo Gongjinhyang Soo</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-item-link">
                                            <div class="header__notify-item-img" style="background:url('https://img.abaha.vn/photos/resized/200x120/83-1589963137-myphamohui-lgvina.png')">

                                            </div>
                                            <div class="header__notify-info">
                                                <div class="header__notify-name">KHỞI ĐẦU CỦA LÀN DA KHỎE ĐẸP</div>
                                                <div class="header__notify-description">Ohui Prime Advancer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-item-link">
                                            <div class="header__notify-item-img" style="background:url('https://img.abaha.vn/photos/resized/200x120/83-1589349012-myphamohui-lgvina.png')">
                                            </div>
                                            <div class="header__notify-info">
                                                <div class="header__notify-name">MINI GAME - CHƠI NGAY RINH QUÀ LIỀN TAY</div>
                                                <div class="header__notify-description">Mini game</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-item-link">
                                            <div class="header__notify-item-img" style="background:url('https://img.abaha.vn/photos/resized/200x120/83-1589289429-myphamohui-lgvina.png')">

                                            </div>
                                            <div class="header__notify-info">
                                                <div class="header__notify-name">CHƯƠNG TRÌNH KHUYẾN MÃI CHÀO THÁNG 5</div>
                                                <div class="header__notify-description">KHuyến mại chào hè !</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-item-link">
                                            <div class="header__notify-item-img" style="background:url('https://img.abaha.vn/photos/resized/200x120/83-1586327583-myphamohui-lgvina.png')">

                                            </div>
                                            <div class="header__notify-info">
                                                <div class="header__notify-name">Điều khoản Shop</div>
                                                <div class="header__notify-description">Điều khoản sử dụng</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-item-link">
                                            <div class="header__notify-item-img" style="background:url('https://img.abaha.vn/photos/resized/200x120/83-1586321253-myphamohui-lgvina.png')">

                                            </div>
                                            <div class="header__notify-info">
                                                <div class="header__notify-name">Tuyển dụng</div>
                                                <div class="header__notify-description">CƠ HỘI TUYỆT VỜI ĐƯỢC LÀM VIỆC CÙNG NHÃN HÀNG MỸ PHẨM
                                                    OHUI</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-item-link">
                                            <div class="header__notify-item-img" style="background:url('https://img.abaha.vn/photos/resized/200x120/83-1586327485-myphamohui-lgvina.png')">

                                            </div>
                                            <div class="header__notify-info">
                                                <div class="header__notify-name">Giới thiệu</div>
                                                <div class="header__notify-description">LG VINA COSMETICS- Tự hào thương hiệu đỉnh cao</div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                                <div class="header__notify-footer">
                                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                </div>
                            </div>
                            <!-- header notify -->
                        </li>
                        <li class="header__navbar-item max-height hide-on-mobile-tablet">
                            <a href="" class="header__navbar-item-link max-height">
                                <svg class="header__navbar-item-icon " height="16" viewBox="0 0 16 16" width="16">
                                    <g fill="none" fill-rule="evenodd" transform="translate(1)">
                                        <circle cx="7" cy="8" r="7" stroke="currentColor"></circle>
                                        <path fill="currentColor" d="m6.871 3.992c-.814 0-1.452.231-1.914.704-.462.462-.693 1.089-.693 1.892h1.155c0-.484.099-.858.297-1.122.22-.319.583-.473 1.078-.473.396 0 .715.11.935.33.209.22.319.517.319.902 0 .286-.11.55-.308.803l-.187.209c-.682.605-1.1 1.056-1.243 1.364-.154.286-.22.638-.22 1.045v.187h1.177v-.187c0-.264.055-.506.176-.726.099-.198.253-.396.462-.572.517-.451.825-.737.924-.858.275-.352.418-.803.418-1.342 0-.66-.22-1.188-.66-1.573-.44-.396-1.012-.583-1.716-.583zm-.198 6.435c-.22 0-.418.066-.572.22-.154.143-.231.33-.231.561 0 .22.077.407.231.561s.352.231.572.231.418-.077.572-.22c.154-.154.242-.341.242-.572s-.077-.418-.231-.561c-.154-.154-.352-.22-.583-.22z">
                                        </path>
                                    </g>
                                </svg>
                                Liên hệ
                            </a>
                        </li>
                        <?php
                        if (!isset($_SESSION['name'])) {
                        ?>
                            <li class="header__navbar-item  max-height ">
                                <label data="register" for="formData" class="header__navbar-item-link max-height header__navbar-item--separation header__navbar-item--separation-sm">
                                    Đăng ký
                                </label>
                            </li>
                            <li class="header__navbar-item max-height ">
                                <label for="formData" class="header__navbar-item-link max-height" data="login">
                                    Đăng nhập
                                </label>
                            </li>

                        <?php
                        } else {
                        ?>
                            <li id="flagElement" class="header__navbar-item max-height header__navbar-item--has-child">
                                <a href="" class="header__navbar-item-link max-height">
                                    <div class="header__avatar">
                                        <img src="./assets/img/avatar.jpg" alt="" class="header__avatar-img">
                                    </div>
                                    <span class="header__user">
                                        <?php echo $_SESSION['name'] ?>
                                    </span>
                                </a>
                                <ul class="user__action-list triangle">
                                    <li class="user_action-item">
                                        <a href="" class="user__action-item-link">
                                            Tài khoản của tôi
                                        </a>
                                    </li>
                                    <li class="user_action-item">
                                        <a href="index.php?controller=users&action=update&id=<?php echo $_SESSION['id']; ?>" class="user__action-item-link">
                                            Chỉnh sửa thông tin
                                        </a>
                                    </li>
                                    <li class="user_action-item">
                                        <form action="" method="post">
                                            <button type="submit" value="true" name="logout" class="b-0 user__action-item-link">
                                                Đăng Xuất
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php
                        } ?>
                    </ul>
                </div>
                <!-- header with search -->
                <div class="header__with-search ">
                    <div class="header__with-search-wrap container">

                        <div class="header__navbar-logo">
                            <a href="/" class="header__navbar-logo-link">
                                <img src="./assets/img/logo.png" alt="" class="header__navbar-logo-img">
                            </a>
                        </div>
                        <div class="header__mobile-icon-list hidden">
                            <label for="mobile__header-nav">
                                <i class="fas fa-bars header__mobile-icon"></i>
                            </label>
                            <label for="mobile__search-checkbox">
                                <i class="fas fa-search header__mobile-icon"></i>
                            </label>
                        </div>
                        <input type="checkbox" id="mobile__search-checkbox" style="display: none;">
                        <div class="header__search">
                            <div class="header__search-input-wrap">
                                <input type="text" class="header__navbar-input" placeholder="Tìm kiếm...">
                                <div class="header__search-history">
                                    <h4 class="header__search-history-heading">
                                        Lịch sử tìm kiếm
                                    </h4>
                                    <ul class="header__search-list">
                                        <li class="header__search-item">
                                            <a href="" class="header__search-item-link">
                                                Set dưỡng trắng trị nám Whoo
                                            </a>
                                        </li>
                                        <li class="header__search-item">
                                            <a href="" class="header__search-item-link">
                                                Set kem chống nắng Su:m37
                                            </a>
                                        </li>
                                        <li class="header__search-item">
                                            <a href="" class="header__search-item-link">
                                                Set kem chống nắng thế hệ mới
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header__search-select">
                                <span class="header__search-select-lable">Cửa hàng</span>
                                <svg class="header__search-select-icon" enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0">
                                    <g>
                                        <path d="m11 2.5c0 .1 0 .2-.1.3l-5 6c-.1.1-.3.2-.4.2s-.3-.1-.4-.2l-5-6c-.2-.2-.1-.5.1-.7s.5-.1.7.1l4.6 5.5 4.6-5.5c.2-.2.5-.2.7-.1.1.1.2.3.2.4z">
                                        </path>
                                    </g>
                                </svg>
                                <div class="header__search-option">
                                    <ul class="header__search-option-list">
                                        <li class="header__search-option-item"><span class="header__search-option-label">
                                                Cửa hàng
                                            </span>
                                            <svg class="header__search-option-icon header__search-option-icon--active" enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0">
                                                <g>
                                                    <path d="m6.5 13.6c-.2 0-.5-.1-.7-.2l-5.5-4.8c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l4.7 4 6.8-9.4c.3-.4.9-.5 1.4-.2.4.3.5 1 .2 1.4l-7.4 10.3c-.2.2-.4.4-.7.4 0 0 0 0-.1 0z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <button class="header__search-btn">
                                <svg class="header__search-btn-icon" height="19" viewBox="0 0 19 19" width="19">
                                    <g fill-rule="evenodd" stroke="none" stroke-width="1">
                                        <g transform="translate(-1016 -32)">
                                            <g>
                                                <g transform="translate(405 21)">
                                                    <g transform="translate(611 11)">
                                                        <path d="m8 16c4.418278 0 8-3.581722 8-8s-3.581722-8-8-8-8 3.581722-8 8 3.581722 8 8 8zm0-2c-3.3137085 0-6-2.6862915-6-6s2.6862915-6 6-6 6 2.6862915 6 6-2.6862915 6-6 6z">
                                                        </path>
                                                        <path d="m12.2972351 13.7114222 4.9799555 4.919354c.3929077.3881263 1.0260608.3842503 1.4141871-.0086574.3881263-.3929076.3842503-1.0260607-.0086574-1.414187l-4.9799554-4.919354c-.3929077-.3881263-1.0260608-.3842503-1.4141871.0086573-.3881263.3929077-.3842503 1.0260608.0086573 1.4141871z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <input type="checkbox" id="mobile__header-nav" class="hidden">
                        <label for="mobile__header-nav" class="modal__overlay">
                        </label>
                        <div class="mobile__header-nav">
                            <div class="mobile__header-nav-wrapper">
                                <ul class="mobile__category-list">
                                    <li class="mobile__category-item"><a href="" class="mobile__category-item-link">
                                            Tất cả sản phẩm
                                        </a>
                                    </li>
                                    <li class="mobile__category-item mobile__category-item--has-child">
                                        <div class="mobile__category-item-link accordion">
                                            <span>Ohui</span>
                                            <i class="fas fa-chevron-right mobile__category-item-icon "></i>
                                        </div>
                                        <ul class="mobile__category-item-child-list panel">
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Ohui Thefirst Tái Sinh </a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Ohui Dưỡng Trắng</a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Ohui Prime Advancer</a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Ohui Dưỡng Ẩm</a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Ohui Chống Lão Hóa</a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Ohui Make Up</a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Ohui Chống Nắng</a></li>

                                        </ul>
                                    </li>
                                    <li class="mobile__category-item">
                                        <div class="mobile__category-item-link accordion">
                                            <span>Whoo</span>
                                            <i class="fas fa-chevron-right mobile__category-item-icon"></i>
                                        </div>
                                        <ul class="mobile__category-item-child-list panel">
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Whoo Bichup </a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Whoo Dưỡng Ẩm</a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Whoo Dưỡng Trắng Trị Nám</a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Whoo cấp nước chống oxy hóa</a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Whoo Tái Sinh</a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Whoo Make Up</a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Whoo Chống Nắng</a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Whoo Spa</a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Whoo Chống Lão Hóa</a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Whoo Hoàn Lưu Cao</a></li>

                                        </ul>
                                    </li>
                                    <li class="mobile__category-item">
                                        <div class="mobile__category-item-link accordion">
                                            <span>Su:m37</span>
                                            <i class="fas fa-chevron-right mobile__category-item-icon"></i>
                                        </div>
                                        <ul class="mobile__category-item-child-list panel">
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Su:m37 Tái Sinh </a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Sm:m37 Chống Lão Hóa </a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Sm:m37 Dưỡng Trắng </a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Su:m37 cấp ẩm water full </a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Su:m37 Làm Sạch </a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Su:m37 Chống Nắng Sun Away</a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Su:m37 Make Up</a></li>
                                        </ul>
                                    </li>
                                    <li class="mobile__category-item">
                                        <div class="mobile__category-item-link accordion">
                                            <span>Set mini</span>
                                            <i class="fas fa-chevron-right mobile__category-item-icon"></i>
                                        </div>
                                        <ul class="mobile__category-item-child-list panel">
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Set Ohui Mini </a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Set Whoo Mini</a></li>
                                            <li class="mobile__category-item-child-item"><a href="" class="mobile__category-child-item-link">Set Su:m37 Mini</a></li>
                                        </ul>
                                    </li>

                                </ul>
                                <ul class="mobile__category-list">
                                    <li class="mobile__category-item">
                                        <a href="" class="mobile__category-item-link">
                                            <span>Thực phẩm chức năng</span>
                                        </a>
                                    </li>
                                    <li class="mobile__category-item">
                                        <a href="" class="mobile__category-item-link">
                                            <span>Dịch vụ</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="mobile__category-list">
                                    <li class="mobile__category-item">
                                        <a href="" class="mobile__category-item-link">
                                            <span>Tin Tức</span>
                                        </a>
                                    </li>
                                    <li class="mobile__category-item">
                                        <a href="" class="mobile__category-item-link">
                                            <span>Liên Hệ</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- cart layout -->
                        <div class="header__cart">
                            <div class="header__cart-wrap">
                                <div class="header__cart-cart">
                                    <i class="fas fa-shopping-cart header__cart-icon"></i>
                                    <div class="header__cart-notice">
                                        4
                                    </div>
                                    <div class="header__cart-info  triangle">
                                        <img src="./assets/img/no-cart.png" alt="" class="header__cart-info--no-cart-img">
                                        <span class="header__cart-info--no-cart-msg">Chưa có sản phẩm</span>
                                        <div class="header__cart-info-wrap ">
                                            <h4 class="header__cart-info-heading">
                                                Sản phẩm đã thêm
                                            </h4>
                                            <ul class="header__cart-product-list">
                                                <li class="header__cart-product">
                                                    <div class="header__cart-product-img" style="background-image: url('./assets/img/cart-product1.png');background-repeat:no-repeat">
                                                    </div>
                                                    <div class="header__cart-product-details">
                                                        <div class="header__cart-product-details-wrap">
                                                            <span class="header__cart-product-name">Bộ cấp Nước Se Khít Lỗ Chân Lông Sum37 Water-full
                                                                Set 5p</span>
                                                            <div class="header__cart-product-left">
                                                                <span class="header__cart-product-price">
                                                                    450.000đ
                                                                </span>
                                                                <span class="header__cart-product-multiplty">x</span>
                                                                <span class="header__cart-product-amount">1</span>
                                                            </div>

                                                        </div>
                                                        <div class="header__cart-product-delete">
                                                            <span class="header__cart-product-delete-btn">Xóa</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="header__cart-product">
                                                    <div class="header__cart-product-img" style="background-image: url('./assets/img/cart-product2.png');background-repeat:no-repeat">
                                                    </div>
                                                    <div class="header__cart-product-details">
                                                        <div class="header__cart-product-details-wrap">
                                                            <span class="header__cart-product-name">Set phấn phủ Ohui Ultimate Brightening Varnishing
                                                                Pact</span>
                                                            <div class="header__cart-product-left">
                                                                <span class="header__cart-product-price">
                                                                    1.080.000đ
                                                                </span>
                                                                <span class="header__cart-product-multiplty">x</span>
                                                                <span class="header__cart-product-amount">1</span>
                                                            </div>

                                                        </div>
                                                        <div class="header__cart-product-delete">
                                                            <span class="header__cart-product-delete-btn">Xóa</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="header__cart-product">
                                                    <div class="header__cart-product-img" style="background-image: url('./assets/img/cart-product3.png');background-repeat:no-repeat">
                                                    </div>
                                                    <div class="header__cart-product-details">
                                                        <div class="header__cart-product-details-wrap">
                                                            <span class="header__cart-product-name">Bộ kem đặc trị vùng mắt Ohui Age Recovery Wrinkle
                                                                Cut Serum.</span>
                                                            <div class="header__cart-product-left">
                                                                <span class="header__cart-product-price">
                                                                    2.070.000đ
                                                                </span>
                                                                <span class="header__cart-product-multiplty">x</span>
                                                                <span class="header__cart-product-amount">1</span>
                                                            </div>

                                                        </div>
                                                        <div class="header__cart-product-delete">
                                                            <span class="header__cart-product-delete-btn">Xóa</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="header__cart-product">
                                                    <div class="header__cart-product-img" style="background-image: url('./assets/img/cart-product4.png');background-repeat:no-repeat">
                                                    </div>
                                                    <div class="header__cart-product-details">
                                                        <div class="header__cart-product-details-wrap">
                                                            <span class="header__cart-product-name"> Set sữa rửa mặt Ohui Prime Gel Cleanser</span>
                                                            <div class="header__cart-product-left">
                                                                <span class="header__cart-product-price">
                                                                    1.035.000đ
                                                                </span>
                                                                <span class="header__cart-product-multiplty">x</span>
                                                                <span class="header__cart-product-amount">1</span>
                                                            </div>

                                                        </div>
                                                        <div class="header__cart-product-delete">
                                                            <span class="header__cart-product-delete-btn">Xóa</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="header__cart-product-info">
                                                <div class="header__cart-product-info-item">
                                                    <p class="header__cart-info-title">Tổng tiền :</p>
                                                    <p class="header__cart-info-value">4.635.000đ</p>
                                                </div>
                                                <div class="header__cart-product-info-item">
                                                    <p class="header__cart-info-title">Ví tích điểm :</p>
                                                    <p class="header__cart-info-value">+4635 điểm</p>
                                                </div>

                                            </div>
                                            <div class="header__cart-btn">
                                                <button class="header__cart-btn-view-cart">Xem giỏ hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- No cart : header__cart-info--no-cart -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header__navbar -->
        </div>