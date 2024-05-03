<?php
session_start();

// Thông tin kết nối đến cơ sở dữ liệu MySQL
$host = "localhost"; // Host của MySQL server
$username_db = "root"; // Tên đăng nhập MySQL
$password_db = ""; // Mật khẩu đăng nhập MySQL
$database = "test"; // Tên cơ sở dữ liệu

// Kết nối đến MySQL
$db = new mysqli($host, $username_db, $password_db, $database);

// Kiểm tra kết nối
if ($db->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $db->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM user_accounts WHERE username='$username' AND password='$password'";

    // Thực hiện truy vấn
    $result = $db->query($query);

    // Kiểm tra kết quả trả về từ truy vấn
    if ($result && $result->num_rows > 0) {
        // Người dùng hợp lệ, đăng nhập thành công
        $_SESSION["IsLogin"] = true;
        header("Location: dashboard.php"); // Chuyển hướng đến trang dashboard sau khi đăng nhập thành công
        exit();
    } else {
        // Sai thông tin đăng nhập, chuyển hướng trở lại trang đăng nhập
        header("Location: login.php"); // Thêm thông báo lỗi nếu cần
        exit();
    }
}
?>