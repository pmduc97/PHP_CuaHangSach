<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChiTietHoaDonDao
 *
 * @author pmduc97
 */
include_once '/../Bean/ChiTietHoaDonBean.php';
include_once 'DungChung.php';
class ChiTietHoaDonDao {
    //put your code here
    public function getTheoMaHoaDon($maHoaDon){
        $conn = DungChung::KetNoi();
        $lstCTHD = array();
        $strSQL = "SELECT sach.tensach,chitiethoadon.soLuong,sach.gia FROM sach INNER JOIN chitiethoadon INNER JOIN hoadon on sach.masach = chitiethoadon.maSach AND hoadon.maHoadon = chitiethoadon.maHoadon WHERE chitiethoadon.maHoadon = '".$maHoaDon."'";
        $result = $conn->query($strSQL);
        while($row = $result->fetch_assoc()) {
            $tenSach = $row["tensach"];
            $soLuong = $row["soLuong"];
            $gia = $row["gia"];
            array_push($lstCTHD,new ChiTietHoaDonBean($tenSach,$soLuong,$gia));
        }
        mysqli_close($conn);
        return $lstCTHD;
    }
}
