<?php
    require_once "ConnectDB.php";
    class thongke {
        public $conn;
        public function __construct() {
            $this->conn = new ConnectDB();
        }
        public function thongke_hanghoa(){
            $sql = " SELECT lo.ma_loai, lo.ten_loai,"
                    ." COUNT(*) so_luong,"
                    ." MIN(hh.don_gia) gia_min,"
                    ." MAX(hh.don_gia) gia_max,"
                    ." AVG(hh.don_gia) gia_avg"
                    ." FROM hang_hoa hh"
                    ." JOIN loai_hang lo ON lo.ma_loai = hh.ma_loai "
                    ." GROUP BY lo.ma_loai, lo.ten_loai";
            $this->conn->setQuery($sql);
            return $this->conn->loadData();
        }
        public function thongke_binhluan(){
            $sql = " SELECT hh.ma_hh, hh.ten_hh,"
                    ." COUNT(*) so_luong,"
                    ." MIN(bl.ngay_bl) cu_nhat,"
                    ." MAX(bl.ngay_bl) moi_nhat"
                    ." FROM binh_luan bl"
                    ." JOIN hang_hoa hh ON hh.ma_hh = bl.ma_hh"
                    ." GROUP BY hh.ma_hh, hh.ten_hh"
                    ." HAVING so_luong > 0 ";
            $this->conn->setQuery($sql);
            return $this->conn->loadData();
        }
    }
?>