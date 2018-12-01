<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SachBo
 *
 * @author pmduc97
 */
include_once '/../Dao/SachDao.php';
class SachBo {
    //put your code here
    public function getTop6(){
        return SachDao::getTop6();
    }
    public function getTatCa(){
        return SachDao::getTatCa();
    }
    public function getSachTheoLoai($maloai){
        return SachDao::getSachTheoLoai($maloai);
    }
    
    public function getSachTheoKey($key){
        return SachDao::getSachTheoKey($key);
    }
    
    public function get1Sach($masach){
        return SachDao::get1Sach($masach);
    }
    
    public function xoaSach($masach){
        return SachDao::xoaSach($masach);
    }
    
    public function themSach($masach,$tensach,$gia,$anh,$tacgia,$maloai){
        return SachDao::themSach($masach,$tensach,$gia,$anh,$tacgia,$maloai);
    }
    
    public function suaSach($masach,$tensach,$gia,$anh,$tacgia,$maloai){
        return SachDao::suaSach($masach,$tensach,$gia,$anh,$tacgia,$maloai);
    }
}
