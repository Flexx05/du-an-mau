<?php
    require_once "ConnectDB.php";
    class loaihang {
        public $conn;
        public function __construct() {
            $this->conn = new ConnectDB();
        }
        public function loaihang_all(){
            $sql = "SELECT * FROM `loai_hang`";
            $this->conn->setQuery($sql);
            return $this->conn->loadData();
        }
        public function loaihang_insert($ma_loai, $ten_loai){
            $sql = "INSERT INTO `loai_hang`VALUES ( ?, ?)";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ma_loai, $ten_loai]);
        }
        public function loaihang_update($ten_loai, $ma_loai){
            $sql = "UPDATE `loai_hang` SET `ten_loai`= ? WHERE `ma_loai`= ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ten_loai, $ma_loai], false);
        }
        public function loaihang_ID($ma_loai){
            $sql = "SELECT * FROM `loai_hang` WHERE ma_loai = ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ma_loai], false);
        }
        public function loaihang_del($ma_loai){
            $sql = "DELETE FROM `loai_hang` WHERE ma_loai = ?";
            $this->conn->setQuery($sql);
            return $this->conn->loadData([$ma_loai], false);
        }
    }
?>