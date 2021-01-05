<?php require_once('base_controller.php') ?>
<?php require_once('./models/user.php') ?>

<?php
class PagesController extends  BaseController
{
    function __construct()
    {
        $this->folder = 'pages';
    }
    public function home()
    {
        $this->render('home');
    }
    public function error(){
        $this->render('error');
    }
    public function register(){
        $result = User::insert($_POST['email'],$_POST['password'],$_POST['name'],$_POST['address']);
        $data = array('result'=>$result);
        $this->render('home',$data);
    }
}

?>