<?php
    require_once "ConnectDB.php";
    class binhluan {
        public $conn;
        public function __construct() {
            $this->conn = new ConnectDB();
        }
        public function binhluan_insert($noi_dung, $ma_hh, $ma_kh, $ngay_bl){
            $sql = "INSERT INTO `binh_luan`(`noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES ( ?, ?, ?, ?)";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$noi_dung, $ma_hh, $ma_kh, $ngay_bl]);
        }
        public function binhluan_update($noi_dung, $ma_hh, $ma_kh, $ngay_bl, $ma_bl){
            $sql = "UPDATE `binh_luan` SET `noi_dung`= ?,`ma_hh`= ?,`ma_kh`= ?,`ngay_bl`= ? WHERE `ma_bl`= ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$noi_dung, $ma_hh, $ma_kh, $ngay_bl, $ma_bl], false);
        }
        public function binhluan_del($ma_bl){
            $sql = "DELETE FROM `binh_luan` WHERE ma_bl = ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ma_bl], false);
        }
        public function binhluan_all(){
            $sql = "SELECT * FROM `binh_luan`";
            $this->conn->setQuery($sql);
            return $this->conn->loadData();
        }
        public function binhluan_ID($ma_bl){
            $sql = "SELECT * FROM `binh_luan` WHERE ma_bl = ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ma_bl], false);
        }
        public function binhluan_all_by_hanghoa($ma_hh){
            $sql = "SELECT b.*, h.ten_hh FROM binh_luan b JOIN hang_hoa h ON h.ma_hh = b.ma_hh WHERE b.ma_hh = ? ORDER BY ngay_bl DESC";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ma_hh]);
        }
    }
?>