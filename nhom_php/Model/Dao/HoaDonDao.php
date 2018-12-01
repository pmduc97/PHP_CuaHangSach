<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HoaDonDao
 *
 * @author pmduc97
 */
include_once '/../Bean/HoaDonBean.php';
include_once 'DungChung.php';
class HoaDonDao {
    //put your code here
    public function getTatCa(){
        $conn = DungChung::KetNoi();
        $listHoaDon = array();
        $strSQL = "SELECT * FROM hoadon";
        $result = $conn->query($strSQL);
        while($row = $result->fetch_assoc()) {
            $maHoaDon = $row["maHoadon"];
            $maKhachHang = $row["makh"];
            $ngayMua = $row["ngayMua"];
            $daMua = $row["daMua"];
            array_push($listHoaDon,new HoaDonBean($maHoaDon,$maKhachHang,$ngayMua,$daMua));
        }
        mysqli_close($conn);
        return $listHoaDon;
    }
    public function getHoaDonDaMua(){
        $conn = DungChung::KetNoi();
        $listHoaDon = array();
        $strSQL = "SELECT * FROM hoadon WHERE daMua = 1";
        $result = $conn->query($strSQL);
        while($row = $result->fetch_assoc()) {
            $maHoaDon = $row["maHoadon"];
            $maKhachHang = $row["makh"];
            $ngayMua = $row["ngayMua"];
            $daMua = $row["daMua"];
            array_push($listHoaDon,new HoaDonBean($maHoaDon,$maKhachHang,$ngayMua,$daMua));
        }
        mysqli_close($conn);
        return $listHoaDon;
    }
    public function getHoaDonChuaMua(){
        $conn = DungChung::KetNoi();
        $listHoaDon = array();
        $strSQL = "SELECT * FROM hoadon WHERE daMua = 0";
        $result = $conn->query($strSQL);
        while($row = $result->fetch_assoc()) {
            $maHoaDon = $row["maHoadon"];
            $maKhachHang = $row["makh"];
            $ngayMua = $row["ngayMua"];
            $daMua = $row["daMua"];
            array_push($listHoaDon,new HoaDonBean($maHoaDon,$maKhachHang,$ngayMua,$daMua));
        }
        mysqli_close($conn);
        return $listHoaDon;
    }
    
    public function getHoaDonTheoKhachHang($maKhachHang){
        $conn = DungChung::KetNoi();
        $listHoaDon = array();
        $strSQL = "SELECT * FROM hoadon WHERE makh = '".$maKhachHang."'";
        $result = $conn->query($strSQL);
        while($row = $result->fetch_assoc()) {
            $maHoaDon = $row["maHoadon"];
            $maKhachHang = $row["makh"];
            $ngayMua = $row["ngayMua"];
            $daMua = $row["daMua"];
            array_push($listHoaDon,new HoaDonBean($maHoaDon,$maKhachHang,$ngayMua,$daMua));
        }
        mysqli_close($conn);
        return $listHoaDon;
    }
    public function getHoaDonTheoMaHoaDon($maHoaDon){
        $conn = DungChung::KetNoi();
        $listHoaDon = array();
        $strSQL = "SELECT * FROM hoadon WHERE maHoadon = '".$maHoaDon."'";
        $result = $conn->query($strSQL);
        while($row = $result->fetch_assoc()) {
            $maHoaDon = $row["maHoadon"];
            $maKhachHang = $row["makh"];
            $ngayMua = $row["ngayMua"];
            $daMua = $row["daMua"];
            array_push($listHoaDon,new HoaDonBean($maHoaDon,$maKhachHang,$ngayMua,$daMua));
        }
        mysqli_close($conn);
        return $listHoaDon;
    }

    
    public function themHoaDon($maKhachHang){
        $conn = DungChung::KetNoi();
        $strSQL = "INSERT INTO hoadon(maKh, ngayMua, daMua) VALUES (?,?,0)";
        $stmt = $conn->prepare($strSQL);
        $stmt->bind_param("is", $maKhachHang,date("Y-m-d"));
        $stmt->execute();
        $i = $stmt->affected_rows;
        $stmt->close();
        $conn->close();
        return $i;
    }
    
    public function thanhToanHoaDon($maHoaDon){
        $conn = DungChung::KetNoi();
        $strSQL = "UPDATE hoadon SET daMua = 1 WHERE maHoadon = '".$maHoaDon."'"; 
        $stmt = $conn->prepare($strSQL);
        $stmt->execute();
        $i = $stmt->affected_rows;
        $stmt->close();
        $conn->close();
        return $i;
    }
    
}
