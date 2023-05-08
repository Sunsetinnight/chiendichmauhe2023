<?php
// Kiểm tra xem form đã được gửi đi chưa
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy giá trị từ các trường trong form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Xử lý dữ liệu và lưu chúng vào một file hoặc cơ sở dữ liệu
    // ...

    // Chuyển hướng người dùng đến một trang cảm ơn hoặc hiển thị thông báo thành công
    header('Location: thank-you.html');
    exit;
}
?>