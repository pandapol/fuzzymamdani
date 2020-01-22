<!DOCTYPE html>
<?php
require_once "koneksi.php";
$id = mysqli_real_escape_string($con, $_GET['id']);
$sql = mysqli_query($con, "SELECT * FROM `data_kendaraan` where `id`='$id'");
if($tampil = mysqli_fetch_array($sql)){
    $merek = $tampil['merek'];
    $pembuat = $tampil['pembuat'];
    $tipe = $tampil['tipe'];
    $jenis = $tampil['jenis'];
    $chassis_no = $tampil['chassis_no'];
    $engine_no = $tampil['engine_no'];
    $model = $tampil['model'];
    $letak_motor = $tampil['letak_motor'];
    $silinder = $tampil['silinder'];
    $rem = $tampil['rem'];
    $rangka = $tampil['rangka'];
    $emisi = $tampil['emisi'];
    $status = $tampil['status'];
    $tanggal = $tampil['tanggal'];
}
?>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

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
    <title>Print <?php echo $merek . " ". $chassis_no ?> - Fuzzy Logic | Universitas Komputer Indonesia </title>

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
                    <h1>Hasil Uji Kelayakan Kendaraan</h1>
                    <span>DINAS PERHUBUNGAN<br>
                    KOMUNIKASI DAN INFORMATIKA<br>
                    KOTA BANDUNG</span>
                </div>

                <div class="col_full">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td>
                                <label>Tanggal Pengujian :</label>
                            </td>
                            <td>
                                <?php echo $tanggal; ?>
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <label>Merek :</label>
                            </td>
                            <td>
                                <?php echo $merek; ?>
                            </td>
                            <td>
                                <label>Nama Pembuat / Pemegang Merek :</label>
                            </td>
                            <td colspan="3">
                                <?php echo $pembuat; ?>
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <label>Tipe Kendaraan :</label>
                            </td>
                            <td>
                                <?php echo $tipe; ?>
                            </td>
                            <td>
                                <label>Jenis Kendaraan :</label>
                            </td>
                            <td colspan="3">
                                <?php echo $jenis; ?>
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <label>Chasis No :</label>
                            </td>
                            <td>
                                <?php echo $chassis_no; ?>
                            </td>
                            <td>
                                <label>Engine No :</label>
                            </td>
                            <td colspan="3">
                                <?php echo $engine_no; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Model :</label>
                            </td>
                            <td>
                                <?php echo $model; ?>
                            </td>
                            <td>
                                <label>Letak Motor Penggerak  :</label>
                            </td>
                            <td>
                                <?php echo $letak_motor; ?>
                            </td>
                            <td>
                                <label>Jumlah Konfigurasi Silinder :</label>
                            </td>
                            <td>
                                <?php echo $silinder; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Sistem Pengereman :</label>
                            </td>
                            <td>
                                <?php echo $rem; ?> %
                            </td>
                            <td>
                                <label>RANGKA :</label>
                            </td>
                            <td>
                                <?php echo $rangka; ?> %
                            </td>
                            <td>
                                <label>Gas Emisi :</label>
                            </td>
                            <td>
                                <?php echo $emisi; ?> %
                            </td>
                        </tr>
                        <tr>
                            <?php
                            if($status == "Layak"){
                                $class = "success";
                            }elseif($status == "Peremajaan"){
                                $class = "warning";
                            }else{
                                $class = "danger";
                            }
                            ?>
                            <td colspan="7" class="<?php echo $class; ?>">
                                Berdasarkan Hasil Uji Kelayakan, Kendaraan Dinyatakan
                                <strong>
                                <?php
                                if($status == "Tidak"){
                                    echo "Tidak Layak";
                                }else{
                                    echo $status;
                                }
                                ?>
                                </strong>
                            </td>
                        </tr>
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
                <div class="fright">
                    KEPALA PENGUJI
                    <br><br><br><br>
                    <table class="table table-hover">
                        <tbody>
                        <tr>{Nama Kepala Penguji}</tr>
                        <tr>
                            <td></td>
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