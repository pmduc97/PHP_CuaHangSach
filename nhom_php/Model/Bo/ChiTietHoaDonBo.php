<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChiTietHoaDonBo
 *
 * @author pmduc97
 */
include_once '/../Dao/ChiTietHoaDonDao.php';
class ChiTietHoaDonBo {
    //put your code here
    public function getTheoMaHoaDon($maHoaDon){
        return ChiTietHoaDonDao::getTheoMaHoaDon($maHoaDon);
    }
}
