<div class="login">
    
    <h3>Đăng nhập</h3>
    <hr>
    <?php
    if(isset($kiemtraDangNhap)){
        echo 'Sai thông tin đăng nhập';
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
												<td colspan="2">
													<input type="submit" class="btn btn-primary" name="dangnhap" value="Đăng nhập">
												</td>
											</tr>
										</tbody>
									</table>
								</form>

