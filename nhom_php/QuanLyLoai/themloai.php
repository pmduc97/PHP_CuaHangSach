<?php
include_once '/../Model/Bo/LoaiBo.php';
include_once '/../Model/Bo/KhachHangBo.php';
session_start();
if(isset($_POST['them'])){
    $kt = LoaiBo::themLoai($_POST['maloai'],$_POST['tenloai']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thêm loại</title>
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
							<h2 class="col-md-12 text-center">Quản Lý Cửa Hàng Sách - Quản Lý loại</h2>
						</div>
						<br>
						<nav class="bg-light">
                                                    <a class="btn btn-sm btn-success" href="../" style="margin-right: 10px;" role="button">Trang Chủ</a>
                                                    <a class="btn btn-sm btn-success" href="../QuanLySach" style="margin-right: 10px;" role="button">Quản Lý Sách</a>
                                                    <a class="btn btn-sm btn-info" href="../QuanLyLoai" style="margin-right: 10px;" role="button">Quản Lý Loại</a>
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
    <h2>Thêm loại mới</h2>
<div class="col-md-12">
    <?php
										if(isset($kt)){
										if($kt != 0){
										echo "Đã thêm loại: ".$_POST['tenloai'];
										}
										else {
										echo "Có lỗi. Vui lòng thử lại";
										}
										}
										?>
<form action="" method="post">
                                                                    
									<table class="table table-bordered text-center">
                                                                            <tbody>
                                                                                        <tr>
												<td style="width: 150px;">Mã loại</td>
												<td>
                                             <input class="form-control" name="maloai" type="text" placeholder="Nhập mã loại" value="">
												</td>
											</tr>
                                                                                        
                                                                                         <tr>
												<td style="width: 150px;">Tên loại</td>
												<td>
                                           <input class="form-control" name="tenloai" type="text" placeholder="Nhập tên loại" value="">
												</td>
											</tr>
											<tr>
												<td colspan="2">
													<input type="submit" class="btn btn-primary" name="them" value="Thêm">
												</td>
											</tr>
										</tbody>
									</table>
								</form>
</div>
</div>
						</div>
					</div>
				</div>
			</div>
		</header>
</body>
</html>