<?php
class MusicService {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllTheLoai() {
        $sql = "SELECT * FROM TheLoai";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    public function getAllBaiHat() {
        $sql = "SELECT BaiHat.id, tenBaiHat, caSi, tenTheLoai FROM BaiHat 
                JOIN TheLoai ON BaiHat.idTheLoai = TheLoai.id";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    public function themBaiHat($tenBaiHat, $caSi, $idTheLoai) {
        $sql = "INSERT INTO BaiHat (tenBaiHat, caSi, idTheLoai) VALUES ('$tenBaiHat', '$caSi', '$idTheLoai')";
        return $this->conn->query($sql);
    }

    // Các hàm khác để xử lý thêm, xóa, sửa, lấy danh sách, v.v.
}
?>
