<?php include_once("./session.php") ?>
<?php require_once("./db_connection.php") ?>
<?php
Session::init();
class User
{
    public $id, $name, $email, $address, $password;

    public function __construct($id, $email, $name, $password, $address)
    {
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;
        $this->id = $id;
        $this->password = $password;
    }
    public static function find($id)
    {
        $db = DBConnection::getInstance();
        $req = $db->prepare('SELECT * FROM users WHERE user_id = :id');
        $req->execute(array('id' => $id));
        $item = $req->fetch();
        if (isset($item['user_id']) && $item['user_email'] === $_SESSION['email']) {
            return new User(
                $item['user_id'],
                $item['user_email'],
                $item['user_name'],
                $item['user_password'],
                $item['user_address']
            );
        }
        return null;
    }
    public static function findByEmail($email)
    {
        $db = DBConnection::getInstance();
        $req = $db->prepare('SELECT * FROM users WHERE user_email = :email');
        $req->execute(array('email' => $email));
        $item = $req->fetch();
        if (isset($item['user_id'])) {
            return new User(
                $item['user_id'],
                $item['user_email'],
                $item['user_name'],
                $item['user_password'],
                $item['user_address']
            );
        }
        return null;
    }

    public static function update($address,$name)
    {
        $db = DBConnection::getInstance();
        $query = 'UPDATE users SET user_name= :name,user_address = :address WHERE user_id = :id AND user_email = :email';
        $stmt = $db->prepare($query);
        $array = array(
            'name' => $name,
            'address' => $address,
            'id' => $_SESSION['id'],
            'email' => $_SESSION['email']
        );
        $res = $stmt->execute($array);
        if ($res) {
            Session::setSession('name',$name); 
            Session::setSession('address',$address); 
            Session::setSession('updateResult','Cập nhật thông tin thành công!'); 
        }
        return null;
    }
    public static function login($email, $password)
    {
        $db = DBConnection::getInstance();
        $query = "SELECT * FROM users WHERE user_email ='" . $email . "'";
        $stmt = $db->query($query);
        $user = $stmt->fetch();
        if (!$user) {
            return;
        }
        $userPassword = $user['user_password'];
        if ($userPassword === $password) {
            Session::init();
            Session::setSession('name', $user['user_name']);
            Session::setSession('email', $user['user_email']);
            Session::setSession('address', $user['user_address']);
            Session::setSession('id', $user['user_id']);
        }
    }
    public static function register($email, $password, $name, $address)
    {
        $db = DBConnection::getInstance();
        $req  = $db->prepare("INSERT INTO users(user_name,user_email,user_password,user_address) VALUES(:name,:email,:password,:address)");
        $res = $req->execute(array('name' => $name, 'email' => $email, 'password' => $password, 'address' => $address));
        $user = self::findByEmail($email);
        echo var_dump($user);
        if ($res) {
            Session::setSession('name', $name);
            Session::setSession('email', $email);
            Session::setSession('address', $address);
            Session::setSession('id',$user->id);
            // return '<script>alert("'.$test.'")</script>';
        }
        return '<script>alert("Có lỗi trong quá trình đăng ký")</script>';
    }
}
?>