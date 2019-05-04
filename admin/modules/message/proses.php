<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../../config/database.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk update dan delete
else {
    if ($_GET['act']=='update_status') {
        if (isset($_GET['id'])) {
            // ambil data hasil submit dari form
            $message_id = mysqli_real_escape_string($mysqli, trim($_GET['id']));
            $status     = "y";

            // perintah query untuk mengubah data pada tabel message
            $query = mysqli_query($mysqli, "UPDATE pesan SET status     = '$status'
                                                            WHERE message_id = '$message_id'")
                                            or die('Ada kesalahan pada query update status : '.mysqli_error($mysqli));
            
            // cek query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil update data
                header("location: ../../main.php?module=form_message&form=detail&id=$message_id");
            }       
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $message_id = $_GET['id'];
    
            // perintah query untuk menghapus data pada tabel message
            $query = mysqli_query($mysqli, "DELETE FROM pesan WHERE message_id='$message_id'")
                                            or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));

            // cek hasil query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil delete data
                header("location: ../../main.php?module=message&alert=1");
            }
        }
    }       
}       
?>