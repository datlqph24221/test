<?php 
    include './layout/header.php';
    require '../dao/pdo.php';
    require '../dao/taikhoan.php';
?>

<div class="container">
      
  <h2 class="text-center bg-light text-success">Sửa tài khoản</h2> 
    <?php
          if (isset($_GET['ma_tk'])) {
            $ma_tk=$_GET['ma_tk'];
            $info_tk=tk_select_by_id($ma_tk);
            extract($info_tk);
          
    ?>                  
  <form action="" method="post" enctype="multipart/form-data" >
    <div class="form-group">
        <label >Mã:</label>
        <input type="text" class="form-control" name="ma_tk" value="<?php echo $ma_tk ?>" readonly>
        <label >Email:</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email ?>"  required>
        <label >Mật khẩu:</label>
        <input type="password" class="form-control" name="mat_khau" value="<?php echo $mat_khau ?>"  required>
        <label >Họ tên:</label>
        <input type="text" class="form-control" name="ho_ten" value="<?php echo $ho_ten ?>"  required>
        <label >Hình:</label>
        <input type="file" class="form-control" name="img" value="<?php echo $hinh ?>"  required>
        <label >Vai trò:</label>
        <input type="text" class="form-control" name="vai_tro" value="<?php echo $vai_tro ?>"  required>
    </div>
    <button type="submit" class="btn btn-primary" name="btn_ed">Sửa</button>
  </form>
  <?php }else{
    echo"ma tk khong ton tai";
  }?>

  <?php
        if(isset($_POST['btn_ed'])){
            $ma_tk=$_POST['ma_tk'];
            $email=$_POST['email'];
            $mat_khau=$_POST['mat_khau'];
            $ho_ten=$_POST['ho_ten'];
            $vai_tro=$_POST['vai_tro'];

            $img_name=$_FILES['img']['name'];
            $img_tmp=$_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp,'./img/'.$img_name);

            tk_update($ma_tk,$email,$mat_khau,$ho_ten,$img_name,$vai_tro);
            header('Location: taikhoan.php');
      } 

    ?>
</div>