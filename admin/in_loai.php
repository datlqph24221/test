<?php 
    include './layout/header.php';
    require '../dao/pdo.php';
    require '../dao/loai.php';
?>
<div class="container">
  <h2 class="text-center bg-light text-success">Thêm loại</h2>
  <form action="" method="post" enctype="multipart/form-data" >
    <div class="form-group">
        <label >Mã loại:</label>
        <input type="text" class="form-control" name="ma_loai" placeholder="auto number" readonly>
        <label >Tên loại:</label>
        <input type="text" class="form-control" name="ten_loai" required>
    </div>
    <button type="submit" class="btn btn-primary" name="btn_add">Thêm</button>
  </form>

    <?php
        if(isset($_POST['btn_add'])){
            $ten_loai=$_POST['ten_loai'];
            loai_insert($ten_loai);
            header('Location: loai.php');
      } 
    ?>
</div>

