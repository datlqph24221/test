
<?php
    require "../../dao/pdo.php";
    require "../../dao/taikhoan.php";
    require "../bootstrap/bootstrap.php"
   ?>
<div class="container d-flex align-items-center justify-content-center ">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Đăng ký</h2>
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Nhập email">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Nhập lại mật khẩu</label>
                    <input type="password" class="form-control" id="confirm-password" placeholder="Nhập lại mật khẩu">
                </div>
                <div class="form-group">
                    <label for="fullname">Họ tên</label>
                    <input type="text" class="form-control" id="fullname" placeholder="Nhập họ tên">
                </div>
                <div class="form-group">
                    <label for="image">Hình đại diện</label>
                    <input type="file" class="form-control" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Đăng ký</button>
            </form>
        </div>
    </div>
</div>