<?php
include_once '/../Model/Bo/LoaiBo.php';
include_once '/../Model/Bo/SachBo.php';
include_once '/../Model/Bo/KhachHangBo.php';
session_start();
if(isset($_POST['them'])){
    $masach = $_POST['masach'];
    $tensach = $_POST['tensach'];
    $gia = $_POST['gia'];
    $tacgia = $_POST['tacgia'];
    $anh = $_POST['anh'];
    $maloai = $_POST['maloai'];
    $kt_them = SachBo::themSach($masach,$tensach,$gia,$anh,$tacgia,$maloai);
}

$lst_Loai = LoaiBo::getTatCaLoai();
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
							<h2 class="col-md-12 text-center">Quản Lý Cửa Hàng Sách - Quản Lý sách</h2>
						</div>
						<br>
						<nav class="bg-light">
                                                    <a class="btn btn-sm btn-success" href="../" style="margin-right: 10px;" role="button">Trang Chủ</a>
                                                    <a class="btn btn-sm btn-info" href="../QuanLySach" style="margin-right: 10px;" role="button">Quản Lý Sách</a>
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
    <h2>Thêm sách mới</h2>
<div class="col-md-12">
    <?php
										if(isset($kt_them)){
										if($kt_them != 0){
										echo "Đã thêm sách: ".$_POST['tensach'];
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
												<td style="width: 150px;">Mã sách</td>
												<td>
                                             <input class="form-control form-control-sm" name="masach" type="text"  value="">
												</td>
											</tr>
                                                                                        
                                                                                         <tr>
												<td style="width: 150px;">Tên sách</td>
												<td>
                                           <input class="form-control form-control-sm" name="tensach" type="text" value="">
												</td>
											</tr>
                                                                                        <tr>
												<td style="width: 150px;">Loại sách</td>
												<td>
                                                                                                    <select class="form-control form-control-sm" name="maloai" >
                                                                                                        <?php
                                                                                                     foreach ($lst_Loai as $ll){
                                                                                                        ?>
                                                                                                        <option value="<?php echo $ll->getMaloai(); ?>"><?php echo $ll->getTenloai(); ?></option>
                                                                                                     <?php } ?>
                                                                                                    </select>
												</td>
											</tr>
                                                                                        <tr>
												<td style="width: 150px;">Tác giả</td>
												<td>
                                           <input class="form-control form-control-sm" name="tacgia" type="text" value="">
												</td>
											</tr>
                                                                                        <tr>
												<td style="width: 150px;">Giá</td>
												<td>
                                           <input class="form-control form-control-sm" name="gia" type="text" value="">
												</td>
											</tr>
                                                                                        <tr>
												<td style="width: 150px;">Ảnh</td>
												<td>
                                                                                                    <input class="form-control form-control-sm" name="anh" type="file" >
												</td>
											</tr>
											<tr>
												<td colspan="2">
													<input type="submit" class="btn btn-sm btn-primary" name="them" value="Thêm">
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