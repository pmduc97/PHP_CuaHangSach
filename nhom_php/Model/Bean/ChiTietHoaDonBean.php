<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChiTietHoaDonBean
 *
 * @author pmduc97
 */

class ChiTietHoaDonBean {
    //put your code here
    private $tenSach;
    private $soLuong;
    private $gia;
    public function __construct($tenSach, $soLuong, $gia) {
        $this->tenSach = $tenSach;
        $this->soLuong = $soLuong;
        $this->gia = $gia;
    }
    public function getTenSach() {
        return $this->tenSach;
    }

    public function getSoLuong() {
        return $this->soLuong;
    }

    public function getGia() {
        return $this->gia;
    }

    public function getThanhTien() {
        return $this->gia * $this->soLuong;
    }

    public function setTenSach($tenSach) {
        $this->tenSach = $tenSach;
    }

    public function setSoLuong($soLuong) {
        $this->soLuong = $soLuong;
    }

    public function setGia($gia) {
        $this->gia = $gia;
    }




}
