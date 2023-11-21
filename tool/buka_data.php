<?php
	if ($_GET) {
		switch ($_GET['Open']) {

			// Login ///////////////////////////////////////////////////////////////////////////////

			case 'Login' :
				if(!file_exists("login.php")) die ("File Tidak Ditemukan");
				include "login.php";
				break;

			case 'Validasi' :
				if(!file_exists("log/validasi.php")) die ("File Tidak Ditemukan");
				include "log/validasi.php";
				break;

			case 'Logout' :
				if(!file_exists("log/logout.php")) die ("File Tidak Ditemukan");
				include "log/logout.php";
				break;

			case 'Lupa-Password' :
				if(!file_exists("lupa_password.php")) die ("File Tidak Ditemukan");
				include "lupa_password.php";
				break;

			case 'Daftar-Account' :
				if(!file_exists("log/daftar_account.php")) die ("File Tidak Ditemukan");
				include "log/daftar_account.php";
				break;

			/////////////////////////////////////////////////////////////////////////////////

			case 'Ditolak' :
				if(!file_exists("view/ditolak.php")) die ("File Tidak Ditemukan");
				include "view/ditolak.php";
				break;

			// Profil
			///////////////////////////////////////////////////////////////////////////////

			case 'Profil' :
				if(!file_exists("view/profil.php")) die ("File Tidak Ditemukan");
				include "view/profil.php";
				break;

			// Data Yang digunakan ///////////////////////////////////////////////////////////////////////////////

			case 'Data-User' :
				if(!file_exists("view/daftar.php")) die ("File Tidak Ditemukan");
				include "view/daftar.php";
				break;

			case 'Penjadwalan' :
				if(!file_exists("tool/penjad.php")) die ("File Tidak Ditemukan");
				include "tool/penjad.php";
				break;

			case 'Manual' :
				if(!file_exists("tool/manual.php")) die ("File Tidak Ditemukan");
				include "tool/manual.php";
				break;

			case 'Hapus-Perawat' :
				if(!file_exists("view/hapus_perawat.php")) die ("File Tidak Ditemukan");
				include "view/hapus_perawat.php";
				break;

			case 'Terjadwal' :
				if(!file_exists("view/terjadwal.php")) die ("File Tidak Ditemukan");
				include "view/terjadwal.php";
				break;

			case 'Hapus-Jadwal' :
				if(!file_exists("view/hapus_jadwal.php")) die ("File Tidak Ditemukan");
				include "view/hapus_jadwal.php";
				break;

			case 'ubah' :
				if(!file_exists("view/ubah.php")) die ("File Tidak Ditemukan");
				include "view/ubah.php";
				break;

				// Perawat

			case 'Terjadwal_User' :
				if(!file_exists("view/terjadwal1.php")) die ("File Tidak Ditemukan");
				include "view/terjadwal1.php";
				break;

			case 'Indiv' :
				if(!file_exists("view/indiv.php")) die ("File Tidak Ditemukan");
				include "view/indiv.php";
				break;

			case 'Data_Diri' :
				if(!file_exists("view/datadiri.php")) die ("File Tidak Ditemukan");
				include "view/datadiri.php";
				break;

			case 'Pesan-D' :
				if(!file_exists("view/pesan.php")) die ("File Tidak Ditemukan");
				include "view/pesan.php";
				break;

			case 'Pes' :
				if(!file_exists("view/pes.php")) die ("File Tidak Ditemukan");
				include "view/pes.php";
				break;
		
			default:
				if(!file_exists("view/main.php")) die ("File Tidak Ditemukan");
				include "view/main.php";
				break;
		}
	} else {
			if(!file_exists("view/main.php")) die ("File Tidak Ditemukan");
			include "view/main.php";
	}
?>