<?php
    session_start();
    ob_start();
?>

    <?php
    
     require "../../dao/pdo.php";
     require "../bootstrap/bootstrap.php"
    //  require "../../dao/khach_hang.php";
     
    ?>
<div class="container d-flex align-items-center justify-content-center pt-5 mt-5">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title">Đăng nhập</h2>
        <form>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập email">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
        </div>
    </div>
</div>
    <?php
        ob_flush();
    ?>