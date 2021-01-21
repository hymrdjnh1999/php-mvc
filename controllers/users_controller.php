<?php include_once("base_controller.php"); ?>
<?php include_once("./models/user.php"); ?>
<?php
class UsersController extends BaseController
{
    public function __construct()
    {
        $this->folder = "users";
    }

    public function update()
    {
        if(!isset($_SESSION['name'])){
            header('location: index.php');
        }
        $result = '';
        if (isset($_POST['update-name'])) {
            $result =  User::update($_POST['update-address'], $_POST['update-name']);
        }
        // $user = User::find($_GET['id']);
        // if(!$user){
        //     header('location: index.php?controller=pages&action=error');
        // }
        if($result && $result === 'ok'){
            $result = "Cập nhật thành công!";
        }
        
        $this->render('user_update', array('hello' => $result));
    }
    public function details(){
        $this->render('user_details');
    }
    public function logout(){
        session_destroy();
        header('location: index.php');
    }
    public function changePassword(){
        $result ='';
        if(isset($_POST['oldPassword']) && isset($_POST['newPassword'])){
            $result = User::changePassword($_POST['oldPassword'],$_POST['newPassword']);
        }
        $this->render('user_change_password',array('hello'=>$result));
    }
}

?>