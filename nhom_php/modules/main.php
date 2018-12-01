<div class="main">
<?php

      if(isset($_GET['xem'])){
        $tam=$_GET['xem'];

      }
      else {
        $tam='';
      }
      
      if($tam=='dangnhap'){
        include ('modules/DangNhap.php');
      }
      else if($tam=='trangchu'){
        include ('modules/home.php');
      
      }else if($tam=='dangky'){
        include ('modules/dangky.php');
      }
      else if($tam=='giohang'){
        include ('modules/giohang.php');
      }else if ($tam=='hoadon'){
        include('modules/hoadon.php');
      }else if ($tam=='chitiethoadon'){
        include('modules/chitiethoadon.php');
      }else if ($tam==''){
        include('modules/home.php');
      }
      ?>

</div>
