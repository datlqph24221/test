<?php 
    include './layout/header.php';
    require '../dao/pdo.php';
    require '../dao/taikhoan.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 class="text-center bg-light text-success">Quản lý tài khoản khách hàng</h3>

    <table class="table table-condensed">
    <thead>
      <tr>
        <th>Mã </th>
        <th>Email</th>
        <th>Mật khẩu</th>
        <th>Họ tên</th>
        <th>Ảnh</th>
        <th>Vai trò</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
        if(isset($_GET['ma_tk'])){
          tk_delete($_GET['ma_tk']);
        }
        $tk=tk_select_all();
        foreach($tk as $row){
          extract($row);
          $del_link="taikhoan.php?ma_tk=".$ma_tk;
          $ed_link="ed_taikhoan.php?ma_tk=".$ma_tk;
      ?>
            <tr>
            <td><?php echo $ma_tk?></td>
            <td><?php echo $email?></td>
            <td><?php echo $mat_khau?></td>
            <td><?php echo $ho_ten?></td>
            <td><img src="img/<?php echo $hinh ?>" alt="" width="200"></td>
            <td><?php echo $vai_tro?></td>
            <th>
            <a class="btn btn-success" href="<?php echo "$ed_link" ?>">Sửa</a>
            <button type="button" class="btn btn-warning"><?php echo" <a href=".$del_link.">Xoá</a>" ?>  </button>
            </th>
            
          </tr>
      <?php    
        }
      ?>


    </tbody>
  </table>
</body>
</html>