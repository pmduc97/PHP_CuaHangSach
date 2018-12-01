<div class="sidebar">
			<ul>
				<li id="e" >Danh mục sách</li>
                                <?php
                                $listLoai = LoaiDao::getTatCaLoai();
                                $n = count($listLoai);
                                for($i=0;$i<$n;$i++){
                                ?>
                                <li style="list-style-image: url('images/book-icon.png'); margin-left: 20px;"><a style="display: block;text-decoration: none;" href="?maloai=<?php echo $listLoai[$i]->getMaloai(); ?>"><?php echo $listLoai[$i]->getTenloai(); ?></a></li>
                                <?php
                                }
                                ?>
				
			</ul>
		</div>