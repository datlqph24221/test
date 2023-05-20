<?php
    require_once 'pdo.php';
        function tk_insert($email,$mat_khau,$ho_ten,$hinh,$vai_tro){
        $sql = "INSERT INTO tai_khoan(email,mat_khau,ho_ten,hinh,vai_tro) VALUES(?,?,?,?,?)";
        pdo_execute($sql,$email,$mat_khau,$ho_ten,$hinh,$vai_tro);
       }
       function tk_update($ma_tk,$email,$mat_khau,$ho_ten,$hinh,$vai_tro){
        $sql = "UPDATE tai_khoan SET email=?,mat_khau=?,ho_ten=?,hinh=?,vai_tro=? WHERE ma_tk=?";
        pdo_execute($sql,$email,$mat_khau,$ho_ten,$hinh,$vai_tro,$ma_tk);
       }
       function tk_delete($ma_tk){
        $sql = "DELETE FROM tai_khoan WHERE ma_tk=?";
        if(is_array($ma_tk)){
        foreach ($ma_tk as $ma) {
        pdo_execute($sql, $ma);
        }
        }
        else{
        pdo_execute($sql, $ma_tk);
        }
       }
       function tk_select_all(){
        $sql = "SELECT * FROM tai_khoan";
        return pdo_query($sql);
       }
       function tk_select_by_id($ma_tk){
        $sql = "SELECT * FROM tai_khoan WHERE ma_tk=?";
        return pdo_query_one($sql, $ma_tk);
       }
       function tk_exist($ma_tk){
        $sql = "SELECT count(*) FROM tai_khoan WHERE ma_tk=?";
        return pdo_query_value($sql, $ma_tk) > 0;
       }
    

                            
?>
