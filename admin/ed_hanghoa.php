<?php 
    include './layout/header.php';
    require '../dao/pdo.php';
    require '../dao/loai.php';
    require '../dao/hanghoa.php';
?>

<div class="container">
      
  <h2 class="text-center bg-light text-success">Sửa tài khoản</h2> 
    <?php
          if (isset($_GET['ma_hh'])) {
            $ma_hh=$_GET['ma_hh'];
            $info_hh=hang_hoa_select_by_id($ma_hh);
            extract($info_hh);
          
    ?>                  
  <form action="" method="post" enctype="multipart/form-data" >
    <div class="form-group">
    <label >Mã hh:</label>
            <input type="text" class="form-control" name="ma_hh" value="<?php echo $ma_hh ?>" readonly>
            <label >Tên hàng hoá:</label>
            <input type="text" class="form-control" name="ten_hh" value="<?php echo $ten_hh ?>" required>
            <label >Đơn giá:</label>
            <input type="text" class="form-control" name="don_gia" value="<?php echo $don_gia ?>" required>
            <label >Giảm giá:</label>
            <input type="text" class="form-control" name="giam_gia" value="<?php echo $giam_gia ?>" required>
            <label >Hình:</label>
            
            <input type="file" class="form-control" name="img" value="<img src='<?php echo $info_hh['hinh'] ?> width='200'>'>" required>
            <label >Số lượt xem:</label>
            <input type="number" class="form-control" name="so_luot_xem" value="<?php echo $so_luot_xem ?>" required>
            <label >Mô tả:</label>
            <input type="text" class="form-control" name="mo_ta" value="<?php echo $mo_ta ?>" required>
            <label >Mã loại:</label>
              <select class="form-control" name="ma_loai" id="" value="<?php echo $info_hh['ma_loai'] ?>">
                <?php 
                    $loai=loai_select_all();
                    foreach($loai as $row){
                ?>
                <option value="<?php echo $row['ma_loai'] ?> "><?php echo $row['ten_loai'] ?></option>
                <?php
                    }
                ?>   
              </select>
    </div>
    <button type="submit" class="btn btn-primary" name="btn_ed">Sửa</button>
  </form>
  <?php }else{
    echo"ma tk khong ton tai";
  }?>

  <?php
        if(isset($_POST['btn_ed'])){
          $ma_hh=$_POST['ma_hh'];
          $ten_hh=$_POST['ten_hh'];
          $don_gia=$_POST['don_gia'];
          $giam_gia=$_POST['giam_gia'];
          $so_luot_xem=$_POST['so_luot_xem'];
          $mo_ta=$_POST['mo_ta'];
          $ma_loai=$_POST['ma_loai'];

          $img_name=$_FILES['img']['name'];
          $img_tmp=$_FILES['img']['tmp_name'];
          move_uploaded_file($img_tmp,'./img/'.$img_name);

          hang_hoa_update($ma_hh,$ten_hh,$don_gia,$giam_gia,$img_name,$so_luot_xem,$mo_ta,$ma_loai);
          header("Location: hanghoa.php");
      } 

    ?>
</div>