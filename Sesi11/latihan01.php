<?php

    $dta["NIM"] ="1133557799";
    $dta["NAMA"] ="Jhanson Kodrat";
    $dta["JENISKELAMIN"] ="LAKI-LAKI";
    $dta["UMUR"] ="86";
    $dta["ALAMAT"] ="BEIJING";

    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);
