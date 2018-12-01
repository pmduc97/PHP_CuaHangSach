<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoaiBean
 *
 * @author pmduc97
 */
class LoaiBean {
    //put your code here
    private $maloai;
    private $tenloai;
    public function __construct($maloai, $tenloai) {
        $this->maloai = $maloai;
        $this->tenloai = $tenloai;
    }
    public function getMaloai() {
        return $this->maloai;
    }

    public function getTenloai() {
        return $this->tenloai;
    }

    public function setMaloai($maloai) {
        $this->maloai = $maloai;
    }

    public function setTenloai($tenloai) {
        $this->tenloai = $tenloai;
    }


}
