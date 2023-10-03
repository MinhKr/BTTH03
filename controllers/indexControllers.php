<?php
include('../models/musicService.php');

// Kết nối đến CSDL
$conn = new mysqli("localhost", "root", "", "QuanLyBaiHat");
if ($conn->connect_error) {
    die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
}

$musicService = new MusicService($conn);

// Lấy danh sách bài hát từ Service
$baiHatList = $musicService->getAllBaiHat();

// // Hiển thị View
// include('../views/index.php');
// ?>
