<?php
    require_once "ConnectDB.php";
    class taikhoan{
        public $conn;
        public function __construct() {
            $this->conn = new ConnectDB();
        }
        public function taikhoan_insert($ten_kh, $email_kh, $ten_dang_nhap, $mat_khau){
            $sql = "INSERT INTO `khach_hang`(`ten_kh`, `email_kh`, `ten_dang_nhap`, `mat_khau`) VALUES ( ?, ?, ?, ?)";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ten_kh, $email_kh, $ten_dang_nhap, $mat_khau]);
        }
        public function taikhoan_one($ten_dang_nhap, $mat_khau){
            $sql = "SELECT * FROM `khach_hang` WHERE ten_dang_nhap = ? AND mat_khau = ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ten_dang_nhap, $mat_khau]);
        }
        public function taikhoan_update($ten_kh, $email_kh, $hinh_anh, $dia_chi, $sdt, $ma_kh){
            $sql = "UPDATE `khach_hang` SET `ten_kh`= ?,`email_kh`= ?,`hinh_anh`= ?,`dia_chi`= ?,`sdt`= ? WHERE `ma_kh`= ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ten_kh, $email_kh, $hinh_anh, $dia_chi, $sdt, $ma_kh], false);
        }
        public function taikhoan_update_MK($mat_khau, $ma_kh){
            $sql = "UPDATE `khach_hang` SET `mat_khau` = ? WHERE `ma_kh`= ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$mat_khau, $ma_kh], false);
        }
        public function taikhoan_ID($ma_kh){
            $sql = "SELECT * FROM `khach_hang` WHERE ma_kh = ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ma_kh]);
        }
    }
?>