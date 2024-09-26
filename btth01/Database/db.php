<<?php
$servername = "localhost"; // Tên server của bạn
$username = "root";        // Username MySQL
$password = "";            // Mật khẩu MySQL (nếu có)
$dbname = "BTTH01_CSE485_ex"; // Tên cơ sở dữ liệu
$port = '3306';

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname,$port);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>