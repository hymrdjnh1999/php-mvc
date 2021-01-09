<?php include 'helper/format.php';
require_once('db_connection.php') ?>

<?php
$fm = new Format();
$db = DBConnection::getInstance();
$data = array('email' => $fm->validation($_POST['email']), 'password' => $fm->validation($_POST['password']));
$query = "SELECT * FROM users WHERE user_email ='" . $data['email'] . "'";
$stmt = $db->query($query);
$res  = $stmt->fetch();
if (!$res) {
    echo 'Email không tồn tại';
    return;
}

$query = $query . ' AND user_password = "' . $data['password'] . '"';
$stmt = $db->query($query);
$res  = $stmt->fetch();
if (!$res) {
    echo 'Sai mật khẩu!';
    return;
}

echo 'ok';


?>
    