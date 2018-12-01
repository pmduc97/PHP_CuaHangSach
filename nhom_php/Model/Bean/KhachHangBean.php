<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KhachHangBean
 *
 * @author pmduc97
 */
class KhachHangBean {
    //put your code here
    private $makh;
    private $tendn;
    private $matkhau;
    private $hoten;
    private $sdt;
    private $quyen;
    public function __construct($makh, $tendn, $matkhau, $hoten, $sdt, $quyen) {
        $this->makh = $makh;
        $this->tendn = $tendn;
        $this->matkhau = $matkhau;
        $this->hoten = $hoten;
        $this->sdt = $sdt;
        $this->quyen = $quyen;
    }
    public function getMakh() {
        return $this->makh;
    }

    public function getTendn() {
        return $this->tendn;
    }

    public function getMatkhau() {
        return $this->matkhau;
    }

    public function getHoten() {
        return $this->hoten;
    }

    public function getSdt() {
        return $this->sdt;
    }

    public function getQuyen() {
        return $this->quyen;
    }

    public function setMakh($makh) {
        $this->makh = $makh;
    }

    public function setTendn($tendn) {
        $this->tendn = $tendn;
    }

    public function setMatkhau($matkhau) {
        $this->matkhau = $matkhau;
    }

    public function setHoten($hoten) {
        $this->hoten = $hoten;
    }

    public function setSdt($sdt) {
        $this->sdt = $sdt;
    }

    public function setQuyen($quyen) {
        $this->quyen = $quyen;
    }


}
