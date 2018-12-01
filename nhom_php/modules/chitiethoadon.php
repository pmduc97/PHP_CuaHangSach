

        <?php
        // put your code here
        ?>
<div class="row">  
    <h2>Chi tiết hóa đơn: <?php echo $_POST['mahoadon']; ?></h2>
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
                                                                                    $lstCTHD = ChiTietHoaDonBo::getTheoMaHoaDon($_POST['mahoadon']);
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