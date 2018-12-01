<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoaiDao
 *
 * @author pmduc97
 */
include_once 'DungChung.php';
include_once '/../Bean/LoaiBean.php';
class LoaiDao {
    //put your code here
    public function getTatCaLoai(){
        $conn = DungChung::KetNoi();
        $strSQL = "SELECT * FROM loai";
        $listLoai = array();
        $result = $conn->query($strSQL);
        while($row = $result->fetch_assoc()) {
            $maloai = $row["maloai"];
            $tenloai = $row["tenloai"];
            array_push($listLoai,new LoaiBean($maloai,$tenloai));
        }
        mysqli_close($conn);
        return $listLoai;
    }
    
    public function get1Loai($maLoai){
        $conn = DungChung::KetNoi();
        $strSQL = "SELECT * FROM loai WHERE maloai = '".$maLoai."'";
        $Loai = 0;
        $result = $conn->query($strSQL);
        while($row = $result->fetch_assoc()) {
            $maloai = $row["maloai"];
            $tenloai = $row["tenloai"];
            $Loai = new LoaiBean($maloai,$tenloai);
        }
        mysqli_close($conn);
        return $Loai;
    }
    
    public function themLoai($maLoai,$tenLoai){
        $conn = DungChung::KetNoi();
        $strSQL = "INSERT INTO loai(maloai, tenloai) VALUES (?,?)";
        $stmt = $conn->prepare($strSQL);
        $stmt->bind_param("ss", $maLoai, $tenLoai);
        $stmt->execute();
        $i = $stmt->affected_rows;
        $stmt->close();
        $conn->close();
        return $i;
    }
    
    public function xoaLoai($maLoai){
        $conn = DungChung::KetNoi();
        $sql = "DELETE FROM loai WHERE maloai='".$maLoai."'"; 
        $conn->query($sql);
        $i = $conn->affected_rows;
        $conn->close();
        return $i;
    }
    
    public function capNhatLoai($maLoai,$tenLoai){
        $conn = DungChung::KetNoi();
        $strSQL = "UPDATE loai SET tenloai = ? WHERE maloai = ?";
        $stmt = $conn->prepare($strSQL);
        $stmt->bind_param("ss", $tenLoai, $maLoai);
        $stmt->execute();
        $i = $stmt->affected_rows;
        $stmt->close();
        $conn->close();
        return $i;
    }
}
