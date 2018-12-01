<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HoaDonBean
 *
 * @author pmduc97
 */
class HoaDonBean {
    //put your code here
    private $maHoaDon;
    private $maKhachHang;
    private $ngayMua;
    private $daMua;
    public function __construct($maHoaDon, $maKhachHang, $ngayMua, $daMua) {
        $this->maHoaDon = $maHoaDon;
        $this->maKhachHang = $maKhachHang;
        $this->ngayMua = $ngayMua;
        $this->daMua = $daMua;
    }
    public function getMaHoaDon() {
        return $this->maHoaDon;
    }

    public function getMaKhachHang() {
        return $this->maKhachHang;
    }

    public function getNgayMua() {
        return $this->ngayMua;
    }

    public function getDaMua() {
        return $this->daMua;
    }

    public function setMaHoaDon($maHoaDon) {
        $this->maHoaDon = $maHoaDon;
    }

    public function setMaKhachHang($maKhachHang) {
        $this->maKhachHang = $maKhachHang;
    }

    public function setNgayMua($ngayMua) {
        $this->ngayMua = $ngayMua;
    }

    public function setDaMua($daMua) {
        $this->daMua = $daMua;
    }



}
