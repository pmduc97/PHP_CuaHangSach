	<div class="header">
            <div class="row">
                <div class="col-md-12 text-right" style="margin-top: 10px;">
                <?php
                
                if(!isset($_SESSION['khachhang'])){
                ?>
                <a href="index.php?xem=dangnhap" class="btn btn-sm btn-info">Đăng nhập</a> |
  		<a href="index.php?xem=dangky" class="btn btn-sm btn-info">Đăng ký</a>
                <?php 
                }
                else{
                ?>
                <form action="" method="post">
                <a class="btn btn-sm btn-info">Chào: <?php echo $_SESSION['khachhang']->getHoTen(); ?></a>
                
                    <input name="dangxuat" type="submit" class="btn btn-sm btn-danger" value="Đăng xuất">
                </form>
                
                <?php } ?>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="images/logo.jpg" style="width: 100%;height: 50px;">
		</div>
                <div class="col-md-1"></div>
                <div class="col-md-7 text-right" style="padding-top: 30px;">
                    <form class="form-inline" action="" method="GET">
                    <input type="text" placeholder="Tìm kiếm..." name="key" class="form-control form-ctrol-sm" style="width: 60%;">
                    <input class="btn btn-info" type="submit" value="Tìm Kiếm">
                    </form>
                </div>
            </div>	
		</div>