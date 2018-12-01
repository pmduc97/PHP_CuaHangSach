<div class="login">
    
    <h3>Đăng ký tài khoản</h3>
    <hr>
    <?php
    if(isset($kiemtraDangKy)){
        if($kiemtraDangKy == -1){
            echo 'Tên đăng nhập đã tồn tại trong hệ thống';
        }
        if($kiemtraDangKy == 1){
            echo 'Đăng ký thành công';
        }
        if($kiemtraDangKy == 0){
            echo 'Có lỗi. Vui lòng thử lại';
        }
    }
    ?>
    </div>
    <form action="" method="post">
                                                                    
									<table class="table table-bordered text-center">
                                                                            <tbody>
                                                                                        <tr>
												<td style="width: 150px;">Tài khoản</td>
												<td>
                                             <input class="form-control" name="tendn" type="text" placeholder="Nhập tài khoản" value="">
												</td>
											</tr>
                                                                                        
                                                                                         <tr>
												<td style="width: 150px;">Mật khẩu</td>
												<td>
                                           <input class="form-control" name="matkhau" type="password" placeholder="Nhập mật khẩu" value="">
												</td>
											</tr>
  <tr>
												<td style="width: 150px;">Họ tên</td>
												<td>
                                             <input class="form-control" name="hoten" type="text" placeholder="Nhập họ tên" value="">
												</td>
											</tr>
                                                                                        
                                                                                        <tr>
												<td style="width: 150px;">Số điện thoại</td>
												<td>
                                             <input class="form-control" name="sdt" type="text" placeholder="Nhập số điện thoại" value="">
												</td>
											</tr>
											<tr>
												<td colspan="2">
													<input type="submit" class="btn btn-primary" name="dangky" value="Đăng ký">
												</td>
											</tr>
										</tbody>
									</table>
</form>