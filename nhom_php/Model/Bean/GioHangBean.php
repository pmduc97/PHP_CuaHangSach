<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GioHangBean
 *
 * @author pmduc97
 */
class GioHangBean {
    //put your code here
    private $masach;
    private $tensach;
    private $anh;
    private $gia;
    private $soluong;
    public function __construct($masach, $tensach, $anh, $gia, $soluong) {
        $this->masach = $masach;
        $this->tensach = $tensach;
        $this->anh = $anh;
        $this->gia = $gia;
        $this->soluong = $soluong;
    }
    public function getMasach() {
        return $this->masach;
    }

    public function getTensach() {
        return $this->tensach;
    }

    public function getAnh() {
        return $this->anh;
    }

    public function getGia() {
        return $this->gia;
    }

    public function getSoluong() {
        return $this->soluong;
    }

    public function setMasach($masach) {
        $this->masach = $masach;
    }

    public function setTensach($tensach) {
        $this->tensach = $tensach;
    }

    public function setAnh($anh) {
        $this->anh = $anh;
    }

    public function setGia($gia) {
        $this->gia = $gia;
    }

    public function setSoluong($soluong) {
        $this->soluong = $soluong;
    }


}
