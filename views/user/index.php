<?php
// Bao gồm header.php trước
include '../../layout/header.php';

// Kiểm tra giá trị của biến 'page' (hoặc 'action' tùy vào tên bạn dùng)
$page = isset($_GET['page']) ? $_GET['page'] : 'index'; // Nếu không có, mặc định là 'index'

switch ($page) {
    case 'index':
        // Bao gồm trang home.php nếu giá trị của 'page' là 'index'
        include 'home.php';
        break;

    // Các trường hợp khác có thể thêm vào ở đây nếu cần

    default:
        // Hiển thị lỗi nếu giá trị của 'page' không hợp lệ
        echo 'Lỗi: Trang không tồn tại.';
        exit;
        break;
}

// Bao gồm footer.php sau khi nội dung chính đã được hiển thị
include '../../layout/footer.php';
?>
