<?php 
    include './layout/header.php';
    require '../dao/pdo.php';
    require '../dao/loai.php';
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
    <h3 class="text-center bg-light text-success">Loại hàng</h3>

    <table class="table table-condensed">
    <thead>
      <tr>
        <th>Mã loại</th>
        <th>Tên loại</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
        if(isset($_GET['ma_loai'])){
          loai_delete($_GET['ma_loai']);
        }
        $loai=loai_select_all();
        foreach($loai as $row){
          extract($row);
          $del_link="loai.php?ma_loai=".$ma_loai;
          $ed_link="ed_loai.php?ma_loai=".$ma_loai;
      ?>
      <tr>
        <td><?php echo $row['ma_loai'] ?></td>
        <td><?php echo $row['ten_loai'] ?></td>
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
  <a class="btn btn-primary " href="in_loai.php">Thêm loại</a>
</body>
</html>