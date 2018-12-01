<div class="row">  
<h2>Giỏ Hàng Của Bạn</h2>
<div class="col-md-12">
    <table style="" class="table">
    <tbody>
        <?php
        $tongtien = 0;
        $lstGioHang = $_SESSION['gioHang'];
        foreach ($lstGioHang as $hang_sach){
        ?>
        <tr>
		<td  style="font-weight: bold;">
		<div style="float: left; margin-right: 5px;">
                    <img style="width: 55px; height: 70px;" src="<?php echo $hang_sach->getAnh(); ?>">
		</div>
                <div>
                    <div>
                        Tên sách: <?php echo mb_strtoupper($hang_sach->getTensach(),"UTF-8"); ?>
                    </div>
                    <div>
		Giá: <?php echo $hang_sach->getGia(); ?>
		</div>
		<div>
		
        <form action="" method="post">
		Số lượng mua: 
		<input style="text-align: center;" type="text" size="1" name="soluongmua" value="<?php echo $hang_sach->getSoluong(); ?>">
		<input hidden="true" type="text" name="masach" value="<?php echo $hang_sach->getMasach(); ?>">
		<input class="btn btn-info btn-sm" type='submit' name='capnhat' value='Cập nhật'>
		<input class="btn btn-info btn-sm" type='submit' name='tralai' value='Trả lại'>
		</form>
		</div>
		<div>
		Thành tiền: <?php $tt = $hang_sach->getGia() * $hang_sach->getSoluong();  echo $tt; ?>
		</div>
                </div>
		</td>
	</tr>
        <?php
        $tongtien+=$tt;
        }
        ?>
	</tbody>

	</table>
        <hr>
        <div class="text-right">
            <h2 style="margin-right: 10px;">Tổng tiền: <?php echo $tongtien; ?> VNĐ</h2><br>
            <?php
                
                if(!isset($_SESSION['khachhang'])){
                ?>
                Bạn cần đăng nhập để đặt hàng
                <a href="index.php?xem=dangnhap" class="btn btn-sm btn-info">Đăng nhập</a>
                <?php 
                }
                else{
                ?>
                <form action="?xem=hoadon" method="post" class="form-inline" style="float: right; margin-left: 10px;">
                <input class="btn btn-sm btn-success" type="submit" value="Đặt hàng" name="dathang" />
                </form>
                
                <?php } ?>
                
            
        
        <a  href="?xem=trangchu"><button type="submit" class="btn btn-sm btn-success">Tiếp tục mua hàng</button></a>
        </div>
        </div>
       </div>