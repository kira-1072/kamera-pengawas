<?php
session_start();
//hapud sesi
session_destroy();

// setelah terhapus akan di alihkan ke halaman index.php dan muncul alert = 2 (yang sudah di setting pada halaman index.php)
header('Location: index.php?alert=2');