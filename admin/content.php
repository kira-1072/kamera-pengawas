<?php
/* panggil file database.php untuk koneksi ke database */
require_once "../config/database.php";
/* panggil file fungsi tambahan */
require_once "../config/fungsi_tanggal.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan message = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk pemanggilan file halaman konten
else {
	// jika halaman konten yang dipilih home, panggil file view home
	if ($_GET['module'] == 'home') {
		include "modules/home/view.php";
	}

	// jika halaman konten yang dipilih streaming, panggil file view streaming
	elseif ($_GET['module'] == 'streaming') {
		include "modules/streaming/view.php";
	}

	// jika halaman konten yang dipilih form streaming, panggil file form streaming
	elseif ($_GET['module'] == 'form_streaming') {
		include "modules/streaming/form.php";
	}
	// -----------------------------------------------------------------------------

	// jika halaman konten yang dipilih recording, panggil file view recording
	elseif ($_GET['module'] == 'recording') {
		include "modules/recording/view.php";
	}

	// jika halaman konten yang dipilih form recording, panggil file form recording
	elseif ($_GET['module'] == 'form_recording') {
		include "modules/recording/form.php";
	}
	// -----------------------------------------------------------------------------
	
	// jika halaman konten yang dipilih pictures, panggil file view pictures
	elseif ($_GET['module'] == 'pictures') {
		include "modules/pictures/view.php";
	}

	// jika halaman konten yang dipilih form pictures, panggil file form pictures
	elseif ($_GET['module'] == 'form_pictures') {
		include "modules/pictures/form.php";
	}
	// -----------------------------------------------------------------------------

		// jika halaman konten yang dipilih setting, panggil file view setting
	elseif ($_GET['module'] == 'setting') {
		include "modules/setting/view.php";
	}

	// jika halaman konten yang dipilih form setting, panggil file form setting
	elseif ($_GET['module'] == 'form_setting') {
		include "modules/setting/form.php";
	}
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih message, panggil file view message
	elseif ($_GET['module'] == 'message') {
		include "modules/message/view.php";
	}

	// jika halaman konten yang dipilih form message, panggil file form message
	elseif ($_GET['module'] == 'form_message') {
		include "modules/message/form.php";
	}
	// -----------------------------------------------------------------------------

	// jika halaman konten yang dipilih password, panggil file view password
	elseif ($_GET['module'] == 'password') {
		include "modules/password/view.php";
	}
}
?>