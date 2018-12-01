<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SachDao
 *
 * @author pmduc97
 */
include_once 'DungChung.php';
include_once '/../Bean/SachBean.php';
class SachDao {
    //put your code here
    public function getTatCa(){
        $conn = DungChung::KetNoi();
        $listSach = array();
        $strSQL = "SELECT * FROM sach";
        $result = $conn->query($strSQL);
        while($row = $result->fetch_assoc()) {
            $masach = $row["masach"];
            $tensach = $row["tensach"];
            $gia = $row["gia"];
            $anh = $row["anh"];
            $tacgia = $row["tacgia"];
            $maloai = $row["maloai"];
            array_push($listSach,new SachBean($masach,$tensach,$anh,$gia,$tacgia,$maloai));
        }
        mysqli_close($conn);
        return $listSach;
    }
    
    public function getTop6(){
        $conn = DungChung::KetNoi();
        $listSach = array();
        $strSQL = "SELECT * FROM sach LIMIT 6";
        $result = $conn->query($strSQL);
        while($row = $result->fetch_assoc()) {
            $masach = $row["masach"];
            $tensach = $row["tensach"];
            $gia = $row["gia"];
            $anh = $row["anh"];
            $tacgia = $row["tacgia"];
            $maloai = $row["maloai"];
            array_push($listSach,new SachBean($masach,$tensach,$anh,$gia,$tacgia,$maloai));
        }
        mysqli_close($conn);
        return $listSach;
    }
    
    public function getSachTheoLoai($maloai){
        $conn = DungChung::KetNoi();
        $listSach = array();
        $strSQL = "SELECT * FROM sach WHERE maloai = '".$maloai."'";
        $result = $conn->query($strSQL);
        while($row = $result->fetch_assoc()) {
            $masach = $row["masach"];
            $tensach = $row["tensach"];
            $gia = $row["gia"];
            $anh = $row["anh"];
            $tacgia = $row["tacgia"];
            $maloai = $row["maloai"];
            array_push($listSach,new SachBean($masach,$tensach,$anh,$gia,$tacgia,$maloai));
        }
        mysqli_close($conn);
        return $listSach;
    }
    
    public function getSachTheoKey($key){
        $conn = DungChung::KetNoi();
        $listSach = array();
        $strSQL = "SELECT * FROM sach WHERE tensach LIKE '%".$key."%'";
        $result = $conn->query($strSQL);
        while($row = $result->fetch_assoc()) {
            $masach = $row["masach"];
            $tensach = $row["tensach"];
            $gia = $row["gia"];
            $anh = $row["anh"];
            $tacgia = $row["tacgia"];
            $maloai = $row["maloai"];
            array_push($listSach,new SachBean($masach,$tensach,$anh,$gia,$tacgia,$maloai));
        }
        mysqli_close($conn);
        return $listSach;
    }
    
    public function xoaSach($masach){
        $conn = DungChung::KetNoi();
        $sql = "DELETE FROM sach WHERE masach='".$masach."'"; 
        $conn->query($sql);
        $i = $conn->affected_rows;
        $conn->close();
        return $i;
    }
    
    public function get1Sach($masach){
        $conn = DungChung::KetNoi();
        $sach = 0;
        $strSQL = "SELECT * FROM sach WHERE masach = '".$masach."'";
        $result = $conn->query($strSQL);
        while($row = $result->fetch_assoc()) {
            $masach = $row["masach"];
            $tensach = $row["tensach"];
            $gia = $row["gia"];
            $anh = $row["anh"];
            $tacgia = $row["tacgia"];
            $maloai = $row["maloai"];
            $sach = new SachBean($masach,$tensach,$anh,$gia,$tacgia,$maloai);
        }
        mysqli_close($conn);
        return $sach;
    }
    
    public function themSach($masach,$tensach,$gia,$anh,$tacgia,$maloai){
        $conn = DungChung::KetNoi();
        $strSQL = "INSERT INTO sach(masach, tensach, gia, anh, tacgia, maloai) VALUES (?,?,?,?,?,?)";
        $stmt = $conn->prepare($strSQL);
        $stmt->bind_param("ssisss", $masach, $tensach, $gia, $anh, $tacgia,$maloai);
        $stmt->execute();
        $i = $stmt->affected_rows;
        $stmt->close();
        $conn->close();
        return $i;
    }
    
    public function suaSach($masach,$tensach,$gia,$anh,$tacgia,$maloai){
        $conn = DungChung::KetNoi();
        $strSQL = "UPDATE sach SET tensach = ?, gia = ?, anh = ?, tacgia = ?, maloai = ? WHERE masach = ?";
        $stmt = $conn->prepare($strSQL);
        $stmt->bind_param("sissss", $tensach, $gia, $anh, $tacgia ,$maloai , $masach);
        $stmt->execute();
        $i = $stmt->affected_rows;
        $stmt->close();
        $conn->close();
        return $i;
    }
}
