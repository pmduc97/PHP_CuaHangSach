<div class="menu" style="background-color: #666666;">
		
  		 <a class=" btn btn-success" href="/nhom_php">Trang chủ</a>
                 
                 <?php
                 if(isset($_SESSION['khachhang'])){
                     if($_SESSION['khachhang']->getQuyen() == 1){
                         ?>
                 <a href="QuanLySach" class=" btn btn-success">Quản lý sách</a>
                 <a href="QuanLyLoai" class=" btn btn-success">Quản lý loại</a>
                 <a href="QuanLyHoaDon" class=" btn btn-success">Quản lý hóa đơn</a>
                 
                 <a class="btn btn-danger" style="float: right;" href="?xem=giohang" >Giỏ hàng 
                 <span style="color: #4a4a4a;background: #fdd835;height: 20px;border-radius: 2px;display: inline-block;margin-top: 2px;;text-align: center;line-height: 20px;margin-left: 3px;font-size: 12px;padding: 0 6px;">
                 <?php
                 echo count($_SESSION['gioHang']);
                 ?>
                 </span></a>
  		 <a href="?xem=hoadon" class=" btn btn-success" style="float: right;">Đơn Hàng Của Bạn</a>
                 <?php
                     }
 else {
     ?>
                 <a class="btn btn-danger" style="float: right;" href="?xem=giohang" >Giỏ hàng 
                 <span style="color: #4a4a4a;background: #fdd835;height: 20px;border-radius: 2px;display: inline-block;margin-top: 2px;;text-align: center;line-height: 20px;margin-left: 3px;font-size: 12px;padding: 0 6px;">
                 <?php
                 echo count($_SESSION['gioHang']);
                 ?>
                 </span></a>
  		 <a href="?xem=hoadon" class=" btn btn-success" style="float: right;">Đơn Hàng Của Bạn</a>
                 <?php
 }
                 }
 else {
     ?>
                 <a class="btn btn-danger" style="float: right;" href="?xem=giohang" >Giỏ hàng 
                 <span style="color: #4a4a4a;background: #fdd835;height: 20px;border-radius: 2px;display: inline-block;margin-top: 2px;;text-align: center;line-height: 20px;margin-left: 3px;font-size: 12px;padding: 0 6px;">
                 <?php
                 echo count($_SESSION['gioHang']);
                 ?>
                 </span></a>
                 <?php
 }
                 ?>
                 
  			
                 
		</div>