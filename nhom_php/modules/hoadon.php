
        <?php
        // put your code here
        ?>
<div class="row">  
<h2>Đơn hàng của bạn</h2>
<div class="col-md-12">
<table class="table">
										<thead>
											<tr  style="border-bottom: 1px solid black;">
												<th>Mã Đơn Hàng</th>
                                                                                                <th>Ngày Mua</th>
                                                                                                <th>Tổng Tiền</th>
                                                                                                <th>Trạng Thái</th>
											</tr>
										</thead>
										<tbody>
                                                                                    <?php
                                                                                    $lstDonHangGET = HoaDonBo::getHoaDonTheoKhachHang($_SESSION['khachhang']->getMakh());
                                                                                    //$size_DH = count($lstDonHangGET);
                                                                                    foreach ($lstDonHangGET as $dh){
                                                                                    ?>
                                                                                    <tr>
                                                                                        <td><?php echo $dh->getMaHoaDon(); ?></td>
                                                                                        <td><?php echo $dh->getNgayMua(); ?></td>
                                                                                        <td>
                                                                                            <?php
                                                                                                $tong_tien = HoaDonBo::tinhTongTien($dh->getMaHoaDon());
                                                                                                if($tong_tien == NULL){
                                                                                                    echo '0';
                                                                                                }
                                                                                                else
                                                                                                    echo $tong_tien;
                                                                                                ?>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <?php
                                                                                                                $damua = $dh->getDaMua();
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
                                                                                                                <input type="hidden" name="mahoadon" value="<?php echo $dh->getMaHoaDon(); ?>" >
														
                                                                                                                <input style="float: left;" type="submit" value="Thanh Toán" class="btn btn-sm btn-info" name="thanhtoan" >
                                                                                                                        </form>
                                                                                                                <?php } ?>
                                                                                <form action="?xem=chitiethoadon" method="post">
                                                                                    <input type="hidden" name="mahoadon" value="<?php echo $dh->getMaHoaDon(); ?>" >
                                                                                    <input style="float: right; margin-left: 10px;" type="submit" name="chitiethoadon" value="Chi Tiết" class="btn btn-sm btn-info" >
                                                                                                                        						</form>	
														</div>
													</td>
												</tr>
                                                                                    <?php } ?>
										</tbody>
</table>
</div>
</div>