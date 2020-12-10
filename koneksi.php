<?php
// $base_url = "http://localhost/KITTRAVELLING/";
date_default_timezone_set('Asia/Jakarta');
$server = "localhost";
// $user = "sditgsch_permata";
// $password = "sditpp2019";
// $database = "sditgsch_permata";
$user = "root";
$password = "";
$database = "db_sditpermata";

$con = mysqli_connect($server, $user, $password, $database) or die(mysqli_connect_error());


function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}


