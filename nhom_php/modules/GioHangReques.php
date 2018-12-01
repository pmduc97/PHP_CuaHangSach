<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GioHangReques
 *
 * @author pmduc97
 */
include_once '/../Model/Bo/GioHangBo.php';

    session_start();
    $masach = $_GET['masach'];
    $tensach = $_GET['tensach'];
    $anh = $_GET['anh'];
    $gia = $_GET['gia'];
    
    $gio = $_SESSION['gioHang'];
    $a = GioHangBo::timKiem($masach,$gio);
    if($a == -1){
        $gio = GioHangBo::themGioHang($masach,$tensach,$anh,$gia,$gio);
    }
    else{
        $gio = GioHangBo::setTrungSach($a,$gio);
    }
    $_SESSION['gioHang'] = $gio;
    //var_dump($_SESSION['gioHang']);
    header('Location: ../?xem=giohang')
    

?>