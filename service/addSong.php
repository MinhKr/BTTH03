<?php
    require_once "../controllers/indexControllers.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Bài Hát Mới</title>
</head>
<body>
    <h1>Thêm Bài Hát Mới</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Xử lý dữ liệu khi form được submit
        $tenBaiHat = $_POST["tenBaiHat"];
        $caSi = $_POST["caSi"];
        $idTheLoai = $_POST["idTheLoai"];

        // Thực hiện hàm thêm bài hát từ Controller
        $result = $musicService->themBaiHat($tenBaiHat, $caSi, $idTheLoai);

        // Kiểm tra kết quả và hiển thị thông báo
        if ($result) {
            echo "<p style='color: green;'>Thêm bài hát thành công!</p>";
        } else {
            echo "<p style='color: red;'>Thêm bài hát thất bại.</p>";
        }
    }
    ?>

    <!-- Form để nhập thông tin bài hát -->
    <form method="POST" action="">
        <label for="tenBaiHat">Tên Bài Hát:</label>
        <input type="text" name="tenBaiHat" required>

        <label for="caSi">Ca Sĩ:</label>
        <input type="text" name="caSi" required>

        <label for="idTheLoai">Thể Loại:</label>
        <select name="idTheLoai" required>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
        </select>

        <button type="submit">Thêm Bài Hát</button>
    </form>

    <p><a href="../views/index.php">Quay lại danh sách bài hát</a></p>
</body>
</html>
