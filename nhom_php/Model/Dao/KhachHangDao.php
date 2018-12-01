<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KhachHangDao
 *
 * @author pmduc97
 */
include_once 'DungChung.php';
include_once '/../Bean/KhachHangBean.php';
class KhachHangDao {
    //put your code here
    public function checkLogin($tendn,$matkhau){
        $khachhang = 0;
        $conn = DungChung::KetNoi();
        $strSQL = "SELECT * FROM khachhang WHERE tendn = '".$tendn."' AND matkhau = '".$matkhau."'";
        $result = $conn->query($strSQL);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $makh = $row["makh"];
            $tendn1 = $row["tendn"];
            $matkhau1 = $row["matkhau"];
            $hoten = $row["hoten"];
            $sdt = $row["sdt"];
            $quyen = $row["quyen"];
            $khachhang = new KhachHangBean($makh, $tendn1, $matkhau1, $hoten, $sdt, $quyen);
        }
        mysqli_close($conn);
        return $khachhang;
    }
    
    public function getHoTen($makh_cantim){
        $hoten = "";
        $conn = DungChung::KetNoi();
        $strSQL = "SELECT * FROM khachhang WHERE makh = '".$makh_cantim."'";
        $result = $conn->query($strSQL);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hoten = $row["hoten"];
        }
        mysqli_close($conn);
        return $hoten;
    }
    
    public function themKhachHang($tendn,$matkhau,$hoten,$sdt){
        $conn = DungChung::KetNoi();
        $strSQL0 = "SELECT * FROM khachhang WHERE tendn = '".$tendn."'";
        $result = $conn->query($strSQL0);
        if($result->fetch_assoc()) {
            mysqli_close($conn);
            return -1;
        }
        $strSQL = "INSERT INTO khachhang(tendn, matkhau, hoten, sdt) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($strSQL);
        $stmt->bind_param("ssss", $tendn, $matkhau, $hoten, $sdt);
        $stmt->execute();
        $i = $stmt->affected_rows;
        $stmt->close();
        $conn->close();
        return $i;
    }
}
