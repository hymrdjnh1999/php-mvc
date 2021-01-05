<?php include 'helper/format.php'; require_once('db_connection.php') ?>

<?php
$fm = new Format();
$db = DBConnection::getInstance();
// 
$data = $_POST['email'];
$data = $fm->validation($data);
$query = "SELECT user_email FROM users where user_email = '" . $data . "'";
$stmt = $db->prepare($query);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
// 
if ($result && count($stmt->fetchAll()) > 0) {
    echo 'fail';
    return;
}
echo 'ok';


?>
