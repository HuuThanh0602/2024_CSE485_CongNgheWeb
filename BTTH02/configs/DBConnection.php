<?php
class DBConnection {
    private $conn = null;
    private $host = '127.0.0.1';
    private $db = 'btth01_cse485';
    private $user = 'root';  // Tên người dùng MySQL
    private $pass = '';  // Mật khẩu MySQL
    private $charset = 'utf8mb4';
    private $port = '3306'; // mặc định là 3306

    public function __construct() {
        $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->db;charset=$this->charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $this->conn = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
