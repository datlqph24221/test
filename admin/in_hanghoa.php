<?php 
    include './layout/header.php';
    require '../dao/pdo.php';
    require '../dao/hanghoa.php';
    require '../dao/loai.php';
?>
<div class="container">
    <h2 class="text-center bg-light text-success">Thêm loại</h2>
    <form action="" method="post" enctype="multipart/form-data" >
        <div class="form-group">
            <label >Mã hh:</label>
            <input type="text" class="form-control" name="ma_hh" placeholder="auto number" readonly>
            <label >Tên hàng hoá:</label>
            <input type="text" class="form-control" name="ten_hh" required>
            <label >Đơn giá:</label>
            <input type="text" class="form-control" name="don_gia" required>
            <label >Giảm giá:</label>
            <input type="text" class="form-control" name="giam_gia" required>
            <label >Hình:</label>
            <input type="file" class="form-control" name="img" required>
            <label >Số lượt xem:</label>
            <input type="number" class="form-control" name="so_luot_xem" required>
            <label >Mô tả:</label>
            <input type="text" class="form-control" name="mo_ta" required>
            <label >Mã loại:</label>
              <select class="form-control" name="ma_loai" id="">
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
        <button type="submit" class="btn btn-primary" name="btn_add">Thêm</button>
    </form>
    <?php
        if(isset($_POST['btn_add'])){
            $ten_hh=$_POST['ten_hh'];
            $don_gia=$_POST['don_gia'];
            $giam_gia=$_POST['giam_gia'];
            $so_luot_xem=$_POST['so_luot_xem'];
            $mo_ta=$_POST['mo_ta'];
            $ma_loai=$_POST['ma_loai'];

            $img_name=$_FILES['img']['name'];
            $img_tmp=$_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp,'./img/'.$img_name);

            hang_hoa_insert($ten_hh,$don_gia,$giam_gia,$img_name,$so_luot_xem,$mo_ta,$ma_loai);
            header("Location: hanghoa.php");
        }
    ?>       
</div>