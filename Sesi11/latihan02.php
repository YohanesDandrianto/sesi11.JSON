<?php

    $dta[0]["NIM"] ="1133557799";
    $dta[0]["NAMA"] ="Jhanson Kodrat";
    $dta[0]["JENISKELAMIN"] ="LAKI-LAKI";
    $dta[0]["UMUR"] ="86";
    $dta[0]["ALAMAT"] ="BEIJING";

    $dta[1]["NIM"] ="1122334455";
    $dta[1]["NAMA"] ="Erling Mbappe";
    $dta[1]["JENISKELAMIN"] ="LAKI-LAKI";
    $dta[1]["UMUR"] ="22";
    $dta[1]["ALAMAT"] ="FRANCE";

    $dta[2]["NIM"] ="2244668800";
    $dta[2]["NAMA"] ="Markus Brusslie";
    $dta[2]["JENISKELAMIN"] ="LAKI-LAKI";
    $dta[2]["UMUR"] ="31";
    $dta[2]["ALAMAT"] ="TIONGHOA";

    $dta[3]["NIM"] ="10203040";
    $dta[3]["NAMA"] ="andy groume";
    $dta[3]["JENISKELAMIN"] ="LAKI-LAKI";
    $dta[3]["UMUR"] ="23";
    $dta[3]["ALAMAT"] ="BRAZIL";

    $dta[4]["NIM"] ="20406080";
    $dta[4]["NAMA"] ="Yakop Gamby";
    $dta[4]["JENISKELAMIN"] ="LAKI-LAKI";
    $dta[4]["UMUR"] ="40";
    $dta[4]["ALAMAT"] ="Rusia";

    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);
