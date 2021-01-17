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
        
        $result = '';
        if (isset($_POST['update-name'])) {
            $result =  User::update($_POST['update-address'], $_POST['update-name']);
        }else{
            header('location: index.php');
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
}

?>