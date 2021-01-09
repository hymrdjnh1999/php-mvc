<?php include_once("./session.php") ?>
<?php
class User
{
    public $id, $name, $email, $address, $password;
    static $db = DBConnection::getInstance();
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
        $req = self::$db->prepare('SELECT * FROM users WHERE user_id = :id');
        $req->execute(array('id' => $id));
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
    public static function login()
    {
    }
    public static function register($email, $password, $name, $address)
    {

        $req  = self::$db->prepare("INSERT INTO users(user_name,user_email,user_password,user_address) VALUES(:name,:email,:password,:address)");
        $res = $req->execute(array('name' => $name, 'email' => $email, 'password' => $password, 'address' => $address));
        if ($res) {
            Session::init();
            Session::setSession('name', $name);
            // return '<script>alert("'.$test.'")</script>';
        }
        return '<script>alert("Có lỗi trong quá trình đăng ký")</script>';
    }
}
?>