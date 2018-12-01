<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoaiBo
 *
 * @author pmduc97
 */
include_once '/../Dao/LoaiDao.php';
class LoaiBo {
    //put your code here
    public function getTatCaLoai(){
        return LoaiDao::getTatCaLoai();
    }
    
    public function themLoai($maLoai,$tenLoai){
        return LoaiDao::themLoai($maLoai,$tenLoai);
    }
    public function xoaLoai($maLoai){
        return LoaiDao::xoaLoai($maLoai);
    }
    public function capNhatLoai($maLoai,$tenLoai){
        return LoaiDao::capNhatLoai($maLoai,$tenLoai);
    }
    
    public function get1Loai($maLoai){
        return LoaiDao::get1Loai($maLoai);
    }
}
