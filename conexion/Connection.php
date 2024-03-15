    <?php


Class Connection{
    private $server;
    private $user;
    private $password;
    private $bd;
    private $acceso;

    public function __construct(){
        $this->server = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->bd = 'optometria';
    }

    public function Connection(){
        $conn = new mysqli($this->server, $this->user, $this->password, $this->bd);
        return $conn;
    }
}
?>