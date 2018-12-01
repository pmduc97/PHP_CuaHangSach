<?php
include_once '/../Model/Bo/HoaDonBo.php';
include_once '/../Model/Bo/KhachHangBo.php';
session_start();
if(isset($_POST['thanhtoan'])){
    HoaDonBo::thanhToanHoaDon($_POST['mahoadon']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản lý hóa đơn</title>
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
							<div class="col-md-12">
								<div>
									<div style="color: blue; font-weight: bold;">
										<?php
										if(isset($kiemtra_them)){
										if($kiemtra_them != -1){
										echo "Đã thêm sinh viên: ".$_POST['hoten'];
										}
										else {
										echo "Có lỗi. Vui lòng thử lại";
										}
										}
										?>
										<?php
										if(isset($kiemtra_xoa)){
										if($kiemtra_xoa != -1){
										echo "Đã xóa sinh viên";
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
												<th>Mã hóa đơn</th>
                                                                                                <th>Khách Hàng</th>
                                                                                                <th>Ngày Mua</th>
                                                                                                <th>Tổng Tiền</th>
                                                                                                <th>Trạng Thái</th>
											</tr>
										</thead>
										<tbody>
										<?php
                                                                                $lstHD = HoaDonBo::getTatCa();
                                                                                foreach ($lstHD as $hd){
                                                                                ?>
                                                                                    <tr>
                                                                                        <td><?php echo $hd->getMaHoaDon(); ?></td>
                                                                                        <td>
                                                                                        <?php
                                                                                        $hotenkh = KhachHangBo::getHoTen($hd->getMaKhachHang());
                                                                                        echo $hotenkh;
                                                                                        //$hd->getMaKhachHang();
                                                                                        ?>
                                                                                        </td>
                                                                                        <td><?php echo $hd->getNgayMua(); ?></td>
                                                                                        <td>
                                                                                            <?php
                                                                                                $tong_tien = HoaDonBo::tinhTongTien($hd->getMaHoaDon());
                                                                                                if($tong_tien == NULL){
                                                                                                    echo '0';
                                                                                                }
                                                                                                else
                                                                                                    echo $tong_tien;
                                                                                                ?>
                                                                                                        </td>
                                                                                        <td>
                                                                                                            <?php
                                                                                                                $damua = $hd->getDaMua();
                                                                                                                if($damua == 0)
                                                                                                                    echo 'Chưa thanh toán'; 
                                                                                                                else {
                                                                                                                    echo 'Đã thanh toán';
                                                                                                                }
                                                                                                            ?>
                                                                                                        </td>
                                                                                        <td>
											<div>
                                                                                        <?php
                                                                                                                if($damua == 0){
                                                                                                                ?>
                                                                                                                    <form action="" method="post">
                                                                                                                <input type="hidden" name="mahoadon" value="<?php echo $hd->getMaHoaDon(); ?>" >
														
                                                                                                                <input style="float: left;" type="submit" value="Thanh Toán" class="btn btn-sm btn-info" name="thanhtoan" >
                                                                                                                        </form>
                                                                                                                <?php } ?>
                                                                                        
                                                                                            <a style="float: right; margin-left: 10px;" href="chitiethoadon.php?mahoadon=<?php echo $hd->getMaHoaDon(); ?>"  class="btn btn-sm btn-info" >Chi Tiết</a>
                                                                                        
											</div>
											</td>
												</tr>
                                                                                                <?php
                                                                                
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