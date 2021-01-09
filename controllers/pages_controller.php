<?php require_once('base_controller.php') ?>
<?php require_once('./models/user.php') ?>
<?php
session_start();
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
    public function error()
    {
        $this->render('error');
    }
    public function register()
    {
        $this->render('home', []);
    }
    // public function logout()
    // {
    //     session_destroy();
    //     $this->render('home', []);
    // }
}

?>