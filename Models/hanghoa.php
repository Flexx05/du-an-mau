<?php
    require_once 'ConnectDB.php';
    class hanghoa {
        public $conn;
        public function __construct() {
            $this->conn = new ConnectDB();
        }
        public function hanghoa_all(){
            $sql = "SELECT * FROM `hang_hoa`";
            $this->conn->setQuery($sql);
            return $this->conn->loadData();
        }
        public function hanghoa_one($ma_hh){
            $sql = "SELECT * FROM `hang_hoa` WHERE ma_hh = ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ma_hh]);
        }
        public function hanghoa_insert($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh_anh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai){
            $sql = "INSERT INTO `hang_hoa` VALUES (?,?,?,?,?,?,?,?,?,?)";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh_anh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai]);
        }
        public function hanghoa_update($ten_hh, $don_gia, $giam_gia, $hinh_anh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai, $ma_hh){
            $sql = "UPDATE `hang_hoa` SET `ten_hh`= ?,`don_gia`= ?,`giam_gia`= ?,`hinh_anh`= ?,`ngay_nhap`= ?,`mo_ta`= ?,`dac_biet`= ?,`so_luot_xem`= ?,`ma_loai`= ? WHERE `ma_hh`= ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ten_hh, $don_gia, $giam_gia, $hinh_anh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai, $ma_hh], false);
        }
        public function hanghoa_ID($ma_hh){
            $sql = "SELECT * FROM `hang_hoa` WHERE ma_hh = ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ma_hh], false);
        }
        public function hanghoa_del($ma_hh){
            $sql = "DELETE FROM `hang_hoa` WHERE ma_hh = ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ma_hh], false);
        }
        public function hanghoa_all_home(){
            $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC limit 20";
            $this->conn->setQuery($sql);
            return $this->conn->loadData();
        }
        public function hanghoa_tangluotxem($ma_hh){
            $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh = ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ma_hh]);
        }
        public function hanghoa_top10(){
            $sql = "SELECT * FROM hang_hoa WHERE 1 ORDER BY so_luot_xem DESC limit 0, 10";
            $this->conn->setQuery($sql);
            return $this->conn->loadData();
        }
        public function hanghoa_top5(){
            $sql = "SELECT * FROM hang_hoa WHERE 1 ORDER BY so_luot_xem DESC limit 0, 5";
            $this->conn->setQuery($sql);
            return $this->conn->loadData();
        }
        public function hanghoa_dacbiet(){
            $sql = "SELECT * FROM hang_hoa WHERE dac_biet = 1";
            $this->conn->setQuery($sql);
            return $this->conn->loadData();
        }
        public function hanghoa_all_by_loai($ma_loai){
            if ($ma_loai > 0) {
                $sql = "SELECT * FROM hang_hoa WHERE ma_loai = ?";
                $this->conn->setQuery($sql);
                return $this->conn->loadData([$ma_loai]);
            }
            else {
                return "";
            }
        }
        public function hanghoa_all_search($kyw="", $ma_loai=0) {
            $sql="select * from hang_hoa where 1";
            if($kyw!="") {
                $sql.=" and ten_hh like '%".$kyw."%'";
            }
            if($ma_loai>0){
                $sql.=" and ma_loai ='".$ma_loai."'";
            }
            $sql.=" order by ma_loai desc";
            $this->conn->setQuery($sql);
            return $this->conn->loadData();
        }
        
        public function hanghoa_cungloai($ma_loai, $ma_hh){
            $sql = "SELECT * FROM hang_hoa WHERE ma_loai = ? AND ma_hh <> ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ma_loai, $ma_hh]);
        }
    }
?>