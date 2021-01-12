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
        $user = User::find($_GET['id']);
        if(!$user){
            header('location: index.php?controller=pages&action=error');
        }
        $this->render('user_update', []);
    }
}
?>