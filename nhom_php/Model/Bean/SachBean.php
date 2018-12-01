<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SachBean
 *
 * @author pmduc97
 */
class SachBean {
    //put your code here
    private $masach;
    private $tensach;
    private $anh;
    private $gia;
    private $tacgia;
    private $maloai;
    public function __construct($masach, $tensach, $anh, $gia, $tacgia, $maloai) {
        $this->masach = $masach;
        $this->tensach = $tensach;
        $this->anh = $anh;
        $this->gia = $gia;
        $this->tacgia = $tacgia;
        $this->maloai = $maloai;
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

    public function getTacgia() {
        return $this->tacgia;
    }

    public function getMaloai() {
        return $this->maloai;
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

    public function setTacgia($tacgia) {
        $this->tacgia = $tacgia;
    }

    public function setMaloai($maloai) {
        $this->maloai = $maloai;
    }


}
