<?php
include_once '/../Model/Bo/SachBo.php';
include_once '/../Model/Bo/KhachHangBo.php';
session_start();

if(isset($_POST['xoa'])){
    $kt = SachBo::xoaSach($_POST['masach']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản lý sách</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="/../CSS/style.css">
</head>
<body>
<header>
			<div class="container-fluid">
				<div class="container" >
					<div>
						<div class="row">
							<h2 class="col-md-12 text-center">Quản Lý Cửa Hàng Sách - Quản Lý Sách</h2>
						</div>
						<br>
						<nav class="bg-light">
                                                    <a class="btn btn-sm btn-success" href="../" style="margin-right: 10px;" role="button">Trang Chủ</a>
                                                    <a class="btn btn-sm btn-info" href="index.php" style="margin-right: 10px;" role="button">Quản Lý Sách</a>
                                                    <a class="btn btn-sm btn-success" href="../QuanLyLoai" style="margin-right: 10px;" role="button">Quản Lý Loại</a>
                                                    <a class="btn btn-sm btn-success" href="../QuanLyHoaDon" style="margin-right: 10px;" role="button">Quản Lý Hóa Đơn</a>
                                                    
                                                    <?php
                                                    if(isset($_SESSION['khachhang'])){
                                                    ?>
                                                    <a style="margin-right: 10px; float: right;" role="button">Chào: <?php
                                                        echo $_SESSION['khachhang']->getHoten();
                                                    ?></a>
                                                    <?php
                                                    }
                                                    else
                                                    {
                                                    ?>
                                                    <a class="btn btn-success btn-sm" href="../index.php?xem=dangnhap" style="margin-right: 10px; float: right;" role="button">Đăng nhập</a>
                                                    <?php } ?>
						</nav>
						
						<hr>
						
						<div class="row">
							<div class="col-md-12">
								<div>
									<div style="color: blue; font-weight: bold;">
										
										<?php
										if(isset($kt)){
										if($kt != 0){
										echo "Đã xóa sách thành công";
										}
										else {
										echo "Có lỗi. Vui lòng thử lại";
										}
										}
										?>
									</div>
									<table class="table">
										<thead>
											<tr  style="border-bottom: 1px solid black;">
                                                                                                <th>STT</th>
												<th>Tên sách</th>
                                                                                                <th>Giá</th>
                                                                                                <th>Tác giả</th>
                                                                                                <th>Mã loại</th>
                                                                                                <td><a href="themsach.php" class="btn btn-sm btn-warning">Thêm sách mới</a></td>
											</tr>
										</thead>
										<tbody>
										<?php
                                                                                $lstSach = SachBo::getTatCa();
                                                                                $i = 1;
                                                                                foreach ($lstSach as $s){
                                                                                ?>
                                                                                    <tr>
                                                                                                        <td><?php 
                                                                                                        echo $i;
                                                                                                        ?></td>
                                                                                                        <td><?php 
                                                                                                        echo $s->getTensach();
                                                                                                        ?></td>
                                                                                                        <td><?php 
                                                                                                        echo $s->getGia();
                                                                                                        ?></td>
                                                                                                        <td><?php 
                                                                                                        echo $s->getTacgia();
                                                                                                        ?></td>
                                                                                                        <td><?php 
                                                                                                        echo $s->getMaloai();
                                                                                                        ?></td>
                                                                                                        
													
                                                                                                        
													<td>
														
														
														<div>
                                                                                                                    <form action="" method="post">
                                                                                                                <input type="hidden" name="masach" value="<?php echo $s->getMasach(); ?>" >
														
                                                                                                                <input style="float: left;" type="submit" value="Xóa" class="btn btn-sm btn-danger" name="xoa" >
                                                                                                                        </form>
                                                                                <form action="capnhatsach.php?masach=<?php echo $s->getMasach(); ?>" method="post">
                                                                                          <input style="float: left; margin-left: 10px;" type="submit" value="Cập nhật" class="btn btn-sm btn-info" >
                                                                                                                        						</form>	
														</div>
													</td>
												</tr>
                                                                                                <?php
                                                                                
                                                                                                $i++;
                                                                                }
                                                                                                ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
</body>
</html>