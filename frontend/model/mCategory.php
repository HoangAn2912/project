<?php
include_once "mConnect.php";

class mCategory { // ✅ Đúng: mCategory
    private $conn;

    public function __construct() {
        $p = new Connect();
        $this->conn = $p->connect();
    }

    public function layDanhMuc() {
        $sql = "
            SELECT 
                cha.id_loai_san_pham_cha AS id_cha,
                cha.ten_loai_san_pham_cha AS ten_cha,
                con.id AS id_con,
                con.ten_loai_san_pham AS ten_con
            FROM loai_san_pham_cha cha
            LEFT JOIN loai_san_pham con ON cha.id_loai_san_pham_cha = con.id_loai_san_pham_cha
            ORDER BY cha.id_loai_san_pham_cha, con.id
        ";

        $result = $this->conn->query($sql);
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
}
?>
