<?php
include_once '/../Model/Bo/HoaDonBo.php';
include_once '/../Model/Bo/KhachHangBo.php';
include_once '/../Model/Bo/ChiTietHoaDonBo.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Chi tiết hóa đơn</title>
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
							<h2 class="col-md-12 text-center">Quản Lý Cửa Hàng Sách - Quản Lý Hóa Đơn</h2>
						</div>
						<br>
						<nav class="bg-light">
                                                    <a class="btn btn-sm btn-success" href="../" style="margin-right: 10px;" role="button">Trang Chủ</a>
                                                    <a class="btn btn-sm btn-success" href="../QuanLySach" style="margin-right: 10px;" role="button">Quản Lý Sách</a>
                                                    <a class="btn btn-sm btn-success" href="../QuanLyLoai" style="margin-right: 10px;" role="button">Quản Lý Loại</a>
                                                    <a class="btn btn-sm btn-info" href="../QuanLyHoaDon" style="margin-right: 10px;" role="button">Quản Lý Hóa Đơn</a>
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
    <h2>Chi tiết hóa đơn: <?php echo $_GET['mahoadon']; ?></h2>
<div class="col-md-12">
<table class="table">
										<thead>
											<tr  style="border-bottom: 1px solid black;">
												<th>STT</th>
                                                                                                <th>Tên sách</th>
                                                                                                <th>Số lượng</th>
                                                                                                <th>Giá</th>
                                                                                                <th>Thành tiền</th>
											</tr>
										</thead>
										<tbody>
                                                                                    <?php
                                                                                    $lstCTHD = ChiTietHoaDonBo::getTheoMaHoaDon($_GET['mahoadon']);
                                                                                    $i = 1;
                                                                                    foreach ($lstCTHD as $ct){
                                                                                    ?>
                                                                                    <tr>
                                                                                        <td><?php echo $i; ?></td>
                                                                                        <td><?php echo $ct->getTenSach(); ?></td>
                                                                                        <td><?php echo $ct->getSoLuong(); ?></td>
                                                                                        <td><?php echo $ct->getGia(); ?></td>
                                                                                        <td><?php echo $ct->getThanhTien(); ?></td>
                                                                                        
                                                                                    </tr>
                                                                                    <?php $i++; } ?>
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