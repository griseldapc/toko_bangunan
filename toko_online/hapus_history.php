<?php
    if($_GET['id_transaksi']){
        include "koneksitoko.php";
        $qry_hapus=mysqli_query($conn,"delete from transaksi where id_transaksi='".$_GET['id_transaksi']."'");
    if($qry_hapus){
        echo "<script>alert('Sukses hapus histori');location.href='history_pembelian.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus histori');location.href='history_pembelian.php';</script>";
}
}
?>