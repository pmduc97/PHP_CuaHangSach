<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GioHangBo
 *
 * @author pmduc97
 */
include_once '/../Dao/GioHangDao.php';
class GioHangBo {
    //put your code here
    public function timKiem($maSach,$listGioHang){
        return GioHangDao::timKiem($maSach,$listGioHang);
    }
    
    public function xoaSachKhoiGio($maSach,$listGioHang){
        return GioHangDao::xoaSachKhoiGio($maSach,$listGioHang);
    }
    
    public function capNhatGioHang($masach,$soLuong,$listGioHang){
        return GioHangDao::capNhatGioHang($masach,$soLuong,$listGioHang);
    }
    
    public function setTrungSach($viTri,$listGioHang){
        return GioHangDao::setTrungSach($viTri,$listGioHang);
    }
    
    public function themGioHang($masach,$tensach,$anh,$gia,$listGioHang){
        return GioHangDao::themGioHang($masach,$tensach,$anh,$gia,$listGioHang);
    }
}
