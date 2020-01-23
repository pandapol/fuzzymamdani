<!DOCTYPE html>
<?php
require_once "koneksi.php";
$sql = mysqli_query($con, "SELECT * FROM `data_kendaraan`");
?>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Print Laporan Uji Kendaraan - Fuzzy Logic | Universitas Komputer Indonesia </title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Content
    ============================================= -->

    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                <div class="heading-block center">
                    <h1>LAPORAN UJI KELAYAKAN KENDARAAN</h1>
                    <span>DINAS PERHUBUNGAN<br>
                    KOMUNIKASI DAN INFORMATIKA<br>
                    KOTA BANDUNG</span>
                </div>

                <div class="col_full">
                    <table class="table table-hover">
                        <thead>
                        <tr class="active">
                            <th>Merek</th>
                            <th>Nama Pembuat</th>
                            <th>Tipe Kendaraan</th>
                            <th>Jenis Kendaraan</th>
                            <th>Chassis No</th>
                            <th>Engine No</th>
                            <th>Model</th>
                            <th>Letak Motor Penggerak</th>
                            <th>Jumlah Konfigurasi Silinder</th>
                            <th>Sistem Pengereman</th>
                            <th>RANGKA</th>
                            <th>Gas Emisi</th>
                            <th>Tanggal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($tampil_data = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <td><?php echo $tampil_data['merek']; ?></td>
                            <td><?php echo $tampil_data['pembuat']; ?></td>
                            <td><?php echo $tampil_data['tipe']; ?></td>
                            <td><?php echo $tampil_data['jenis']; ?></td>
                            <td><?php echo $tampil_data['chassis_no']; ?></td>
                            <td><?php echo $tampil_data['engine_no']; ?></td>
                            <td><?php echo $tampil_data['model']; ?></td>
                            <td><?php echo $tampil_data['letak_motor']; ?></td>
                            <td><?php echo $tampil_data['silinder']; ?></td>
                            <td><?php echo $tampil_data['rem']; ?></td>
                            <td><?php echo $tampil_data['rangka']; ?></td>
                            <td><?php echo $tampil_data['emisi']; ?></td>
                            <td><?php echo $tampil_data['tanggal']; ?></td>
                        </tr>
                        <?php }?>
                        <tr></tr>
                        </tbody>
                    </table>
                </div>


                <?php
                $query_sign = mysqli_query($con, "SELECT * FROM `user` WHERE `username`='$username'");
                if($tampil_sign = mysqli_fetch_array($query_sign)){
                    $nama = $tampil_sign['fullname'];
                    $NIP = $tampil_sign['id'];
                }
                ?>
                <div class="fright center">
                    KEPALA DINAS PERHUBUNGAN<br>
                    KOMUNIKASI DAN INFORMATIKA<br>
                    KOTA BANDUNG
                    <br><br><br><br>
                    <table class="table table-hover">
                        <tbody>
                        <tr>{NAMA PEJABAT} </tr>
                        <tr>
                            <td>{NIP PEJABAT}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </section><!-- #content end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>