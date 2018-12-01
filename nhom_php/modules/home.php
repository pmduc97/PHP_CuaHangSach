<div class="row">
<table class="table table-bordered" style="width: 98.5%;margin-top: 10px;">
<tbody>
    <?php
    $n = count($listSach);
    if($n==0){
        echo '<br>Không có kết quả cần tìm cho từ khóa: '.$_GET['key'];
    }
    for($i = 0;$i<$n;){
    ?>
<tr class="d-flex">
    <?php
                    for($k = 0;$k<3;$k++){
                    if($i<$n){
                ?>
<td class="col-4 col-sm-4 td-view">
<div>
<div>
    <img class="td-img" src="<?php echo $listSach[$i]->getAnh(); ?>">
</div>
<div style="text-transform: uppercase; color: #CC0000; font-weight: bold;">
<?php echo $listSach[$i]->getTensach(); ?>
</div>
<div style="font-weight: bold;">Giá Sách: <?php echo $listSach[$i]->getGia(); ?>
</div>
<div>
<form action="modules/GioHangReques.php" method="get">
    <input type="hidden" name ="masach" value="<?php echo $listSach[$i]->getMasach(); ?>" >
    <input type="hidden" name ="tensach" value="<?php echo $listSach[$i]->getTensach(); ?>" >
    <input type="hidden" name ="anh" value="<?php echo $listSach[$i]->getAnh(); ?>" >
    <input type="hidden" name ="gia" value="<?php echo $listSach[$i]->getGia(); ?>" >
    <input style="border-radius: 4px;" type="image" src="images/buynow.jpg"/>
</form>
</div>
</div>
</td>
<?php
                    }
                    $i++;
                    }
                    ?>

</tr>

<?php
    }
    ?>

</tbody>
</table>
</div>
