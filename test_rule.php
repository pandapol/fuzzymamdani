<?php
require_once "koneksi.php";

$query = mysqli_query($con, "SELECT * FROM `rule`");
$rem = array(
    "rendah" => 1,
    "sedang" => 5,
    "tinggi" => 10
);
$rangka = array(
    "rendah" => 1,
    "sedang" => 5,
    "tinggi" => 10
);
$emisi = array(
    "rendah" => 1,
    "sedang" => 5,
    "tinggi" => 10
);


while ($tampil = mysqli_fetch_array($query)){
    echo "IF" . " REM " . $tampil['rem']. " RANGKA " . $tampil['rangka']. " EMISI " . $tampil['emisi'] . " THEN ". $tampil['hasil'];
    echo "<br>";
    $cari_min = array($rem[$tampil['rem']], $rangka[$tampil['rangka']], $emisi[$tampil['emisi']]);

    if($tampil['hasil']=="layak"){
        $layak[]= min($cari_min);
    }elseif ($tampil['hasil']=="peremajaan"){
        $peremajaan[]=min($cari_min);
    }elseif ($tampil['hasil']=="tidak"){
        $tidak[]=min($cari_min);
    }
}

print_r($layak);
echo "<br>";
print_r($peremajaan);
echo "<br>";
print_r($tidak);
echo "<br>";

?>