<?php
include_once '/../Model/Bo/LoaiBo.php';
include_once '/../Model/Bo/KhachHangBo.php';
session_start();
if(isset($_POST['xoa'])){
    $kiemtra_xoa = LoaiBo::xoaLoai($_POST['maloai']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản lý loại</title>
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
							<h2 class="col-md-12 text-center">Quản Lý Cửa Hàng Sách - Quản Lý Loại</h2>
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
							<div class="col-md-12">
								<div>
									<div style="color: blue; font-weight: bold;">
										
										<?php
										if(isset($kiemtra_xoa)){
										if($kiemtra_xoa != 0){
										echo "Đã xóa loại thành công";
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
												<th>Tên loại</th>
                                                                                                <td><a href="themloai.php" class="btn btn-sm btn-warning">Thêm loại mới</a></td>
											</tr>
										</thead>
										<tbody>
										<?php
                                                                                $lstLoai = LoaiBo::getTatCaLoai();
                                                                                $i = 1;
                                                                                foreach ($lstLoai as $l){
                                                                                ?>
                                                                                    <tr>
                                                                                                        <td><?php 
                                                                                                        echo $i;
                                                                                                        ?></td>
                                                                                                        <td><?php 
                                                                                                        echo $l->getTenloai();
                                                                                                        ?></td>
                                                                                                        
                                                                                                        
													
                                                                                                        
													<td>
														
														
														<div>
                                                                                                                    <form action="" method="post">
                                                                                                                <input type="hidden" name="maloai" value="<?php echo $l->getMaloai(); ?>" >
														
                                                                                                                <input style="float: left;" type="submit" value="Xóa" class="btn btn-sm btn-danger" name="xoa" >
                                                                                                                        </form>
                                                                                <form action="capnhatloai.php?maloai=<?php echo $l->getMaloai(); ?>" method="post">
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