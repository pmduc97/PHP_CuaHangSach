<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KhachHangBo
 *
 * @author pmduc97
 */
include_once '/../Dao/KhachHangDao.php';
class KhachHangBo {
    //put your code here
    public function checkLogin($tendn,$matkhau){
        return KhachHangDao::checkLogin($tendn,$matkhau);
    }
    
    public function themKhachHang($tendn,$matkhau,$hoten,$sdt){
        return KhachHangDao::themKhachHang($tendn,$matkhau,$hoten,$sdt);
    }
    
    public function getHoTen($makh_cantim){
        return KhachHangDao::getHoTen($makh_cantim);
    }
}
