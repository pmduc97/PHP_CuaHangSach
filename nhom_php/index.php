<?php
include_once './Model/Bo/LoaiBo.php';
include_once './Model/Bo/SachBo.php';
include_once './Model/Bo/KhachHangBo.php';
include_once './Model/Bo/GioHangBo.php';
include_once './Model/Bo/HoaDonBo.php';
include_once './Model/Bo/ChiTietHoaDonBo.php';
session_start();
if(!isset($_SESSION['gioHang'])){
        $_SESSION['gioHang'] = array();
}

if(isset($_POST['dathang'])){
    //var_dump($_SESSION['khachhang']->getMakh());
    $a = HoaDonBo::themHoaDon($_SESSION['khachhang']->getMakh());
    if($a != 0){
        $lstGH = $_SESSION['gioHang'];
    $n = count($lstGH);
    $maHoaDonNow = HoaDonBo::getMaHoaDonNow();
    //var_dump($maHoaDonNow);
    for($i = 0; $i<$n;$i++){
        HoaDonBo::themChiTietHoaDon($lstGH[$i]->getMaSach(),$lstGH[$i]->getSoluong(),$maHoaDonNow);
    }
    $_SESSION['gioHang'] = array();
    }
    
}

if(isset($_POST['thanhtoan'])){
    $maHoaDonTT = $_POST['mahoadon'];
    HoaDonBo::thanhToanHoaDon($maHoaDonTT);
}


if(isset($_POST['capnhat'])){
    $ms = $_POST['masach'];
    $sl = $_POST['soluongmua'];
    $_SESSION['gioHang'] = GioHangBo::capNhatGioHang($ms,$sl,$_SESSION['gioHang']);
}
if(isset($_POST['tralai'])){
    $ms = $_POST['masach'];
    $_SESSION['gioHang'] = GioHangBo::xoaSachKhoiGio($ms,$_SESSION['gioHang']);
}

if(isset($_POST['dangxuat'])){
    session_destroy();
    header('Location: index.php');
}
if(isset($_GET['maloai']) && !isset($_GET['key'])){
    $listSach = SachBo::getSachTheoLoai($_GET['maloai']);
}
if(isset($_GET['key']) && !isset($_GET['maloai']) ){
    $listSach = SachBo::getSachTheoKey($_GET['key']);
}
if(!isset($_GET['maloai']) && !isset($_GET['key'])){
    $listSach = SachBo::getTop6();
}

if(isset($_POST['dangky'])){
    $tendn = $_POST['tendn'];
    $matkhau = $_POST['matkhau'];
    $hoten = $_POST['hoten'];
    $sdt = $_POST['sdt'];
    $kiemtraDangKy = KhachHangBo::themKhachHang($tendn,$matkhau,$hoten,$sdt);
}

if(isset($_POST['dangnhap'])){
    $tendn = $_POST['tendn'];
    $matkhau = $_POST['matkhau'];
    $kiemtraDangNhap = KhachHangBo::checkLogin($tendn,$matkhau);
    
    if($kiemtraDangNhap != NULL){
            echo 'Đăng nhập thành công '.$kiemtraDangNhap->getHoten();
            session_start();
            $_SESSION['khachhang'] = $kiemtraDangNhap;
            header('Location: index.php');
    }
    //var_dump($kiemtraDangNhap);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Book Store</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
	<div class="container">
		<?php 
		include ('modules/header.php');
                //var_dump($_SESSION['gioHang']);
		include ('modules/menu.php');
		//include ('modules/carousel.php');
		include ('modules/sidebar.php');
		include ('modules/main.php');
		?>
		<div class="clear"></div>
			
	</div>
    <?php
		include ('modules/footer.php');
		?>
</body>
</html>