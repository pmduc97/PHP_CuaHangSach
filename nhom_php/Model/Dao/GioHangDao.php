<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GioHangDao
 *
 * @author pmduc97
 */
include_once '/../Bean/GioHangBean.php';
class GioHangDao {
    //put your code here
    public function getGioHang(){
        session_start();
        $list = $_SESSION['gioHang'];
        return $list;
    }
    
    public function timKiem($maSach,$listGioHang){
        $n = count($listGioHang);
        for($i=0;$i<$n;$i++){
            if($listGioHang[$i]->getMasach() == $maSach)
            {
                return $i;
            }
        }
        return -1;
    }
    public function xoaSachKhoiGio($maSach,$listGioHang){
        $n = count($listGioHang);
        $a = -1;
        for($i=0;$i<$n;$i++){
            if($listGioHang[$i]->getMasach() == $maSach)
            {
                $a = $i;
            }
        }
        array_splice($listGioHang, $a, 1);
        return $listGioHang;
    }
    public function capNhatGioHang($masach,$soLuong,$listGioHang){
        $n = count($listGioHang);
        $a = -1;
        for($i=0;$i<$n;$i++){
            if($listGioHang[$i]->getMasach() == $masach)
            {
                $a = $i;
            }
        }
        $listGioHang[$a]->setSoluong($soLuong);
        return $listGioHang;
    }
    public function setTrungSach($viTri,$listGioHang){
        $listGioHang[$viTri]->setSoluong($listGioHang[$viTri]->getSoluong() + 1);
        return $listGioHang;
    }
    
    public function themGioHang($masach,$tensach,$anh,$gia,$listGioHang){
        array_push($listGioHang, new GioHangBean($masach,$tensach,$anh,$gia,1));
        return $listGioHang;
    }
}
