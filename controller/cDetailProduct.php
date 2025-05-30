<?php
include_once("model/mDetailProduct.php");
include_once("model/mProduct.php"); // Gọi để dùng hàm thời gian

class cDetailProduct {
    public function showDetail($id) {
        $model = new mDetailProduct();
        $helper = new mProduct(); // Dùng để tính thời gian

        $product = $model->getDetailById($id);

        // Tính thời gian cập nhật dưới dạng "Cập nhật X phút/giờ/ngày trước"
        if ($product && isset($product['ngay_cap_nhat'])) {
            $product['thoi_gian_format'] = $helper->tinhThoiGian($product['ngay_cap_nhat']);
        }

        include("view/detail.php");
    }
}

