<?php 
    include './layout/header.php';
    require '../dao/pdo.php';
    require '../dao/binhluan.php';
?>
<body>
    <h3 class="text-center bg-light text-success">Quản lý bình luận</h3>
    <table class="table table-condensed">
    <thead>
      <tr>
        <th>Mã </th>
        <th>Nội dung</th>
        <th>Khách hàng</th>
        <th>Hàng hoá</th>
        <th>Ngày</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
        if(isset($_GET['ma_bl'])){
          binh_luan_delete($_GET['ma_bl']);
        } 
        $ds_bl=binh_luan_select_all();
        foreach($ds_bl as $row){
          $del_link="binhluan.php?ma_bl=".$row['ma_bl'];
      ?>
        <tr>
          <td><?php echo $row['ma_bl'] ?></td>
          <td><?php echo $row['noi_dung'] ?></td>
          <td><?php echo $row['ma_kh'] ?></td>
          <td><?php echo $row['ma_hh'] ?></td>
          <td><?php echo $row['ngay_bl'] ?></td>
          <th>
          <button type="button" class="btn btn-warning"><?php echo" <a href=".$del_link.">Xoá</a>" ?></button>
          </th>
        </tr>
      <?php    
        }
      ?>


    </tbody>
  </table>
</body>
