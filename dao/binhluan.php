<?php
    require_once 'pdo.php';
    function binh_luan_insert($noi_dung, $ma_hh, $ma_kh, $ngay_bl){
        $sql = "INSERT INTO binh_luan(noi_dung, ma_hh, ma_kh, ngay_bl) VALUES(?,?,?,?)";
        pdo_execute($sql, $noi_dung, $ma_hh, $ma_kh, $ngay_bl);
       }
       function binh_luan_update($ma_bl, $noi_dung){
        $sql = "UPDATE binh_luan SET noi_dung=? WHERE ma_kh=?";
        pdo_execute($sql, $noi_dung, $ma_bl);
       }
       function binh_luan_delete($ma_bl){
        $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
        if(is_array($ma_bl)){
        foreach ($ma_bl as $ma) {
        pdo_execute($sql, $ma);
        }
        }
        else{
        pdo_execute($sql, $ma_bl);
        }
       }
       function binh_luan_select_all(){
        $sql = "SELECT * FROM binh_luan";
        return pdo_query($sql);
       }
       function binh_luan_select_by_id($ma_bl){
        $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
        return pdo_query_one($sql, $ma_bl);
       }
       function binh_luan_exist($ma_bl){
        $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=?";
        return pdo_query_value($sql, $ma_bl) > 0;
       }
       function binh_luan_select_by_hang_hoa($ma_hh){
        $sql = "SELECT b.*, sp.ten_sp , kh.ho_ten FROM khach_hang kh JOIN binh_luan b on kh.ma_kh=b.ma_kh JOIN san_pham sp ON sp.ma_sp=b.ma_sp WHERE b.ma_sp=? ORDER BY ngay_bl DESC";
        return pdo_query($sql, $ma_hh);
       }
                            
?>