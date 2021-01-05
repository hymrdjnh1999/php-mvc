<?php require_once('db_connection.php'); include 'helper/format.php';?>
<?php
    $format = new Format();
    if(isset($_GET['controller'])){
        $controller = $format->validation($_GET['controller']);
        if(isset($_GET['action'])){
            $action = $format->validation($_GET['action']);
        }
    }
    else{
        $controller = 'pages';
        $action = 'home';
    }
    require_once('routes.php');
?>