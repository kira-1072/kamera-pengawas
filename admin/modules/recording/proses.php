<?php
session_start();
require_once "../../../config/database.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
else {
    if ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
            if (isset($_POST['nis'])) {
                // ambil data hasil submit dari form
            $nama              = mysqli_real_escape_string($mysqli, trim($_POST['nama']));
            $jenis_kelamin     = mysqli_real_escape_string($mysqli, trim($_POST['jenis_kelamin']));
            $tgl_lahir         = mysqli_real_escape_string($mysqli, trim($_POST['tgl_lahir']));
            $tempat_lahir      = mysqli_real_escape_string($mysqli, trim($_POST['tempat_lahir']));
                
                $foto         = $_FILES['foto']['name'];
                // $ukuran_file        = $_FILES['foto']['size'];
                // $tipe_file          = $_FILES['foto']['type'];
                $tmp_file           = $_FILES['foto']['tmp_name'];
                
                // tentuka extension yang diperbolehkan
                // $allowed_extensions = array('jpg','jpeg','png');
                
                // Set path folder tempat menyimpan imagenya
                $path               = "../../../images/siswa/".$foto;
                
                // check extension
                // $file               = explode(".", $nama_file);
                // $extension          = array_pop($file);

                // jika image tidak diubah
                if (empty($foto)) {
                    // perintah query untuk mengubah data pada tabel siswa
                    $query = mysqli_query($mysqli, "UPDATE siswa SET nama= '$nama', jenis_kelamin='$jenis_kelamin', tgl_lahir='$tgl_lahir',tempat_lahir='$tempat_lahir'
                                                                      WHERE nis = '$nis'")
                                                    or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));
                    if ($query) {

                        header("location: ../../main.php?module=siswa&alert=2");
                    } 
                }

                else {

                    // if(in_array($extension, $allowed_extensions)) {
                        // if($ukuran_file <= 1000000) {
                            if(move_uploaded_file($tmp_file, $path)) { // Cek apakah image berhasil diupload atau tidak
                                // Jika image berhasil diupload, Lakukan : 
                                // perintah query untuk mengubah data pada tabel siswa
                                $query = mysqli_query($mysqli, "UPDATE siswa SET nama= '$nama', jenis_kelamin='$jenis_kelamin', tgl_lahir='$tgl_lahir',tempat_lahir='$tempat_lahir',foto='$foto'
                                                                                  WHERE nis = '$nis'")
                                                                or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                                // cek query
                                if ($query) {
                                    // jika berhasil tampilkan pesan berhasil update data
                                    header("location: ../../main.php?module=siswa&alert=2");
                                }
                            } else {
                                // Jika image gagal diupload, tampilkan pesan gagal upload
                                header("location: ../../main.php?module=siswa&alert=4");
                            }
                        // } else {
                        //     // Jika ukuran file lebih dari 1MB, tampilkan pesan gagal upload
                        //     header("location: ../../main.php?module=siswa&alert=5");
                        // }
                    // } else {
                        // Jika tipe file yang diupload bukan JPG / JPEG / PNG, tampilkan pesan gagal upload
                        // header("location: ../../main.php?module=siswa&alert=6");
                    } 
                }      
            }
        }
    // }

       elseif ($_GET['act']=='detail') {
            if (isset($_POST['rekaman_id'])) {
                // ambil data hasil submit dari form
            $rekaman_id     = mysqli_real_escape_string($mysqli, trim($_POST['rekaman_id']));
            $kamera         = mysqli_real_escape_string($mysqli, trim($_POST['kamera']));
            $tanggal        = mysqli_real_escape_string($mysqli, trim($_POST['tanggal']));
            $video          = mysqli_real_escape_string($mysqli, trim($_POST['video']));
            $pembaruan      = mysqli_real_escape_string($mysqli, trim($_POST['pembaruan']));
         
            }      
        }
    

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $rekaman_id = $_GET['id'];
    
            // perintah query untuk menghapus data pada tabel rekaman
            $query = mysqli_query($mysqli, "DELETE FROM rekaman WHERE rekaman_id='$rekaman_id'")
                                            or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));

            // cek hasil query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil delete data
                header("location: ../../main.php?module=recording&alert=3");
            }
        }
    }       
}       
?>