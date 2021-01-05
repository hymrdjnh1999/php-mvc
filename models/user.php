<?php ?>
<?php
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
    
    public static function insert($email,$password,$name,$address){
        $db = DBConnection::getInstance();
        $req  = $db->prepare("INSERT INTO users(user_name,user_email,user_password,user_address) VALUES(:name,:email,:password,:address)");
        $res = $req->execute(array('name'=>$name,'email'=>$email,'password'=>$password,'address'=>$address));
        if($res){
            return 'okkkkk';
        }
        return 'not ok';
    }
}
?>