<?php
class Banner
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "webbanhang";
    protected $con;

    public function __construct()
    {
        $this->conn();
    }

    protected function conn()
    {
        $this->con = mysqli_connect($this->servername,$this->username,$this->password,$this->database);

        if (!$this->con) {
            die('Kết noi that bai');
        } else {
            // kết nối thành công và thiết lập charset
            $this->con->set_charset("utf8");
        }

        return $this->con;
    }

    public function store($param){
        $title = $param['title'];
        $slug = $param['title'];
        $image = $param['image'];
        $url = $param['url'];
        $target = $param['target'];
        $description = $param['description'];
        $type = $param['type'];
        $position = $param['position'];
        $is_active = $param['is_active'];
        $created_at = date('Y-M-D H:i:s');
        $updated_at = date('Y-M-D H:i:s');
        $sql = "INSERT INTO banners(title, slug, image, url, target, description, type, position, is_active, created_at, updated_at) 
                VALUES ('$title','$slug','$image','$url',$target,$description,$type,$position,$is_active,$created_at,$updated_at)";

        $this->con->query($sql);
    }
}
