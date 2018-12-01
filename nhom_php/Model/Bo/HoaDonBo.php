<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HoaDonBo
 *
 * @author pmduc97
 */
include_once '/../Dao/HoaDonDao.php';
class HoaDonBo {
    //put your code here
    public function getTatCa(){
        return HoaDonDao::getTatCa();
    }
    public function getHoaDonDaMua(){
        return HoaDonDao::getHoaDonDaMua();
    }
    public function getHoaDonChuaMua(){
        return HoaDonDao::getHoaDonChuaMua();
    }
    public function getHoaDonTheoKhachHang($maKhachHang){
        return HoaDonDao::getHoaDonTheoKhachHang($maKhachHang);
    }
    public function getHoaDonTheoMaHoaDon($maHoaDon){
        return HoaDonDao::getHoaDonTheoMaHoaDon($maHoaDon);
    }
    public function themHoaDon($maKhachHang){
        return HoaDonDao::themHoaDon($maKhachHang);
    }
    
    public function thanhToanHoaDon($maHoaDon){
        return HoaDonDao::thanhToanHoaDon($maHoaDon);
    }
    public function themChiTietHoaDon($maSach,$soLuong,$maHoaDon){
        $conn = DungChung::KetNoi();
        $strSQL = "INSERT INTO chitiethoadon(maSach, soLuong, maHoadon) VALUES (?,?,?)";
        $stmt = $conn->prepare($strSQL);
        $stmt->bind_param("sii", $maSach,$soLuong ,$maHoaDon);
        $stmt->execute();
        $i = $stmt->affected_rows;
        $stmt->close();
        $conn->close();
        return $i;
    }
    
    public function tinhTongTien($maHoaDon){
        //SELECT SUM(sach.gia * chitiethoadon.soLuong) as tongtien FROM sach INNER JOIN chitiethoadon on sach.masach = chitiethoadon.maSach WHERE chitiethoadon.maHoadon = 2
        $conn = DungChung::KetNoi();
        $tongtien = 0;
        $strSQL = "SELECT SUM(sach.gia * chitiethoadon.soLuong) as tongtien FROM sach INNER JOIN chitiethoadon on sach.masach = chitiethoadon.maSach WHERE chitiethoadon.maHoadon = '".$maHoaDon."'";
        $result = $conn->query($strSQL);
        while($row = $result->fetch_assoc()) {
            $tongtien = $row["tongtien"];
        }
        mysqli_close($conn);
        return $tongtien;
    }
    
    public function getMaHoaDonNow(){
        $conn = DungChung::KetNoi();
        $maHoaDon = -1;
        $strSQL = "SELECT COUNT(*) as sumRow FROM hoadon";
        $result = $conn->query($strSQL);
        while($row = $result->fetch_assoc()) {
            $maHoaDon = $row["sumRow"];
        }
        mysqli_close($conn);
        return $maHoaDon;
    }
    
    
}
