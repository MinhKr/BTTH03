<?php
    require_once "../controllers/indexControllers.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quan Ly Bai Hat</title>
</head>
<body>
    <?php
        $sql = "SELECT BaiHat.id, tenBaiHat, caSi, tenTheLoai FROM BaiHat , TheLoai
        Where BaiHat.idTheLoai = TheLoai.id Order by BaiHat.id"; 
        $result = $conn->query($sql);
    ?>
    <h1>Danh sách bài hát</h1>
    <table border="1" style = "width : 500px; height : 200px;">
        <tr>
            <th>ID</th>
            <th>Tên Bài Hát</th>
            <th>Ca Sĩ</th>
            <th>Thể Loại</th>
            <th>Chỉnh Sửa</th>
            <th>Xóa</th>
        </tr>
        <!-- Hiển thị danh sách bài hát từ Controller -->
        <?php while ($row = $result->fetch_assoc()){ ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['tenBaiHat']; ?></td>
                <td><?= $row['caSi']; ?></td>
                <td><?= $row['tenTheLoai']; ?></td>
                <td><a href="edit.php?id=<?= $row['id']; ?>">Chỉnh Sửa</a></td>
                <td><a href="delete.php?id=<?= $row['id']; ?>">Xóa</a></td>
            </tr>
        <?php } ?>
    </table>

    <h2><a href="../service/addSong.php" style = "text-decoration : none; border : 1px solid black; border-radius : 5px; background-color: green ; color : white;" >Thêm Bài Hát Mới</a></h2>
    <h2><a href="../service/addKindofSong.php" style = "text-decoration : none; border : 1px solid black; border-radius : 5px; background-color: green ; color : white;">Thêm Thể loại Mới</a></h2>
</body>
</html>
