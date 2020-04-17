<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
.warning {color: #FF0000;}
</style>
</head>
<body>

<?php
$error_nama = "";
$error_jkel = "";
$error_nisn = "";
$error_nik = "";
$error_tptlahir = "";
$error_tgllahir = "";
$error_noreg = "";
$error_agama = "";
$error_kwn = "";
$error_berkebutuhan = "";
$error_alamat = "";
$error_rt = "";
$error_rw = "";
$error_dusun = "";
$error_kel = "";
$error_kec = "";
$error_kodepos = "";
$error_lintang = "";
$error_bujur = "";
$error_tpttinggal = "";
$error_transport = "";
$error_kks = "";
$error_anakke = "";
$error_kps = "";
$error_nokps = "";

$nama = "";
$jkel = "";
$nisn = "";
$nik = "";
$tptlahir = "";
$tgllahir = "";
$noreg = "";
$agama = "";
$kwn = "";
$berkebutuhan = "";
$alamat = "";
$rt = "";
$rw = "";
$dusun = "";
$kel = "";
$kec = "";
$kodepos = "";
$lintang = "";
$bujur = "";
$tpttinggal = "";
$transport = "";
$kks = "";
$anakke = "";
$kps = "";
$nokps = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//setting nama
	if (empty($_POST["nama"])) { 
		$error_nama = "Nama tidak boleh kosong"; 
	} else { 
		if (!preg_match("/^[a-zA-z ]*$/",($_POST["nama"]))) { 
			$error_nama = "Nama hanya boleh huruf dan spasi";
		} else {
			$nama = cek_input($_POST["nama"]);
		} 
	}
//setting jenis kelamin
	if (empty($_POST["jkel"])) { 
		$error_jkel = "Jenis Kelamin tidak boleh kosong"; 
	} else { 
		$jkel = cek_input($_POST["jkel"]); 
	}
//setting nisn
	if (empty($_POST["nisn"])) { 
		$error_nisn = "NISN tidak boleh kosong"; 
	} else { 
		if(!is_numeric($_POST["nisn"])) { 
	$error_nisn = "NISN tidak sesuai"; 
} else { 
	$nisn = cek_input($_POST["nisn"]); }
}
//setting nik
	if (empty($_POST["nik"])) { 
		$error_nik = "NIK tidak boleh kosong"; 
	} else { 
		if(!is_numeric($_POST["nik"])) { 
			$error_nik = "NIK tidak sesuai"; 
		} else {
			$nik = cek_input($_POST["nik"]);
		}
	}
//setting tempat lahir
	if (empty($_POST["tptlahir"])) { 
		$error_tptlahir = "Tempat lahir tidak boleh kosong";} else { 
				if (!preg_match("/^[a-zA-z ]*$/",($_POST["tptlahir"]))) { 
					$error_tptlahir = "Input hanya boleh huruf dan spasi"; 
				} else {
					$tptlahir = cek_input($_POST["tptlahir"]);
				} 
			}
//setting tanggal lahir
	if (empty($_POST["tgllahir"])) { 
		$error_tgllahir = "Tanggal lahir tidak boleh kosong"; 
	} else { 
		if(!is_numeric($_POST["tgllahir"])) { 
			$error_tgllahir = "Isi tanggal lahir dengan angka"; 
		} else {
			$tgllahir = cek_input($_POST["tgllahir"]);
		} 
	}
//setting no registrasi akta lahir
	if (empty($_POST["noreg"])) { 
		$error_noreg = "No Registrasi tidak boleh kosong"; 
	} else { 
		if(!is_numeric($_POST["noreg"])) { 
			$error_noreg = "No Registrasi tidak sesuai"; 
		} else {
			$noreg = cek_input($_POST["noreg"]);
		} 
	}
//setting agama & kepercayaan
	if (empty($_POST["agama"])) { 
		$error_agama = "Data tidak boleh kosong"; 
	} else { 
		$agama = cek_input($_POST["agama"]); 
	}
//setting kewarganegaraan
	if (empty($_POST["kwn"])) { 
		$error_kwn = "Data tidak boleh kosong"; 
	} else { 
		$kwn = cek_input($_POST["kwn"]); 
	}
//setting berkebutuhan khusus
	if (empty($_POST["berkebutuhan"])) { 
		$error_berkebutuhan = "Data tidak boleh kosong"; 
	} else { 
		$berkebutuhan = cek_input($_POST["berkebutuhan"]); 
	}
//setting alamat jalan
	if (empty($_POST["alamat"])) { 
		$error_alamat = "Alamat tidak boleh kosong"; 
	} else { 
		$alamat = cek_input($_POST["alamat"]); 
	}
//setting RT
	if (empty($_POST["rt"])) { 
		$error_rt = "Data tidak boleh kosong"; 
	} else { 
		if(!is_numeric($_POST["rt"])) { 
			$error_rt = "Input hanya berupa angka"; 
		} else {
			$rt = cek_input($_POST["rt"]);
		} 
	}
//setting RW
	if (empty($_POST["rw"])) { 
		$error_rw = "Data tidak boleh kosong"; 
	} else { 
		if(!is_numeric($_POST["rw"])) { 
			$error_rw = "Input hanya berupa angka"; 
		} else {
			$rw = cek_input($_POST["rw"]);
		}
	}
//setting nama dusun
	if (empty($_POST["dusun"])) { 
		$error_dusun = "Data tidak boleh kosong"; 
	} else { 
		$dusun = cek_input($_POST["dusun"]); 
	}
//setting nama kelurahan/desa
	if (empty($_POST["kel"])) { 
		$error_kel = "Data tidak boleh kosong";
	} else { 
			if (!preg_match("/^[a-zA-z ]*$/",($_POST["kel"]))) { 
					$error_kel = "Input hanya boleh huruf dan spasi"; 
				} else {
					$kel = cek_input($_POST["kel"]);
				} 
			}
//setting kecamatan
	if (empty($_POST["kec"])) { 
		$error_kec = "Data tidak boleh kosong";
	} else { 
			if (!preg_match("/^[a-zA-z ]*$/",($_POST["kec"]))) { 
					$error_kec = "Input hanya boleh huruf dan spasi"; 
				} else {
					$kec = cek_input($_POST["kec"]);
				} 
			}
//setting kodepos
	if (empty($_POST["kodepos"])) { 
		$error_kodepos = "Data tidak boleh kosong"; 
	} else { 
		if(!is_numeric($_POST["kodepos"])) { 
			$error_kodepos = "Data tidak sesuai"; 
		} else {
			$kodepos = cek_input($_POST["kodepos"]);
		}
	}
//setting lintang
	if (empty($_POST["lintang"])) { 
		$error_lintang = "Data tidak boleh kosong"; 
	} else { 
		$lintang = cek_input($_POST["lintang"]); 
	}
//setting bujur
	if (empty($_POST["bujur"])) { 
		$error_bujur = "Data tidak boleh kosong"; 
	} else { 
		$bujur = cek_input($_POST["bujur"]); 
	}
//setting tempat tinggal
	if (empty($_POST["tpttinggal"])) { 
		$error_tpttinggal = "Data tidak boleh kosong"; 
	} else { 
		$tpttinggal = cek_input($_POST["tpttinggal"]); 
	}
//setting moda transportasi
	if (empty($_POST["transport"])) { 
		$error_transport = "Data tidak boleh kosong";
	} else { 
			if (!preg_match("/^[a-zA-z ]*$/",($_POST["transport"]))) { 
					$error_transport = "Input hanya boleh huruf dan spasi"; 
				} else {
					$transport = cek_input($_POST["transport"]);
				} 
			}
//setting nomor KKS
	$kks = cek_input($_POST["kks"]);
//setting anak ke berapa
	if (empty($_POST["anakke"])) { 
		$error_anakke = "Data tidak boleh kosong"; 
	} else { 
		if(!is_numeric($_POST["anakke"])) { 
			$error_anakke = "Input berupa angka"; 
		} else {
			$anakke = cek_input($_POST["anakke"]);
		}
	}
//setting penerima kps/pkh
	if (empty($_POST["kps"])) { 
		$error_kps = "Data tidak boleh kosong"; 
	} else { 
		$kps = cek_input($_POST["kps"]); 
	}
//setting no kps/pkh
	$nokps = cek_input($_POST["nokps"]); 
}
function cek_input($data) { 
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data; }
?>

<div class="row">
<div class="col-md-6">
<div class="card">
	<div class="card-header">
		FORMULIR PESERTA DIDIK
	</div>

	<div class="card-body">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

			<div class="form-group row">
				<label for="nama" class="col-sm-10 col-form-label"> Nama Lengkap* </label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : "");?>"
					id="nama" value="<?php echo $nama; ?>"> <span class="warning"> <?php echo $error_nama; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="jkel" class="col-sm-10 col-form-label"> Jenis Kelamin* </label>
				<div class="col-sm-10">
					<input type="radio" name="jkel" <?php if (isset($jkel) && $jkel=="Laki-laki") echo "checked";?>  value="Laki-laki"> Laki-laki 
					<input type="radio" name="jkel" <?php if (isset($jkel) && $jkel=="Perempuan") echo "checked";?>  value="Perempuan"> Perempuan <span class="warning"> <?php echo $error_jkel; ?> </span> 
				</div>
			</div>

			<div class="form-group row">
				<label for="nisn" class="col-sm-10 col-form-label"> NISN* </label>
				<div class="col-sm-10">
					<input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" value="<?php echo $nisn; ?>"> <span class="warning"> <?php echo $error_nisn; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="nik" class="col-sm-10 col-form-label"> NIK/No. KITAS* </label>
				<div class="col-sm-10">
					<input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" value="<?php echo $nik; ?>"> <span class="warning"> <?php echo $error_nik; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="tptlahir" class="col-sm-10 col-form-label"> Tempat Lahir* </label>
				<div class="col-sm-10">
					<input type="text" name="tptlahir" class="form-control <?php echo($error_tptlahir !="" ? "is-invalid" : ""); ?>" id="tptlahir" value="<?php echo $tptlahir; ?>"> <span class="warning"> <?php echo $error_tptlahir; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="tgllahir" class="col-sm-10 col-form-label"> Tanggal Lahir* </label>
				<div class="col-sm-10">
					<input type="text" name="tgllahir" class="form-control <?php echo($error_tgllahir !="" ? "is-invalid" : ""); ?>" id="tgllahir" value="<?php echo $tgllahir; ?>"> <span class="warning"> <?php echo $error_tgllahir; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="noreg" class="col-sm-10 col-form-label"> No Registrasi Akta Lahir* </label>
				<div class="col-sm-10">
					<input type="text" name="noreg" class="form-control <?php echo($error_noreg !="" ? "is-invalid" : ""); ?>" id="noreg" value="<?php echo $noreg; ?>"> <span class="warning"> <?php echo $error_noreg; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="agama" class="col-sm-10 col-form-label"> Agama & Kepercayaan* </label>
				<div class="col-sm-10">
					<input type="radio" name="agama" <?php if (isset($agama) && $agama=="Islam") echo "checked";?>  value="Islam"> Islam
					<input type="radio" name="agama" <?php if (isset($agama) && $agama=="Kristen") echo "checked";?>  value="Islam"> Kristen <br>
					<input type="radio" name="agama" <?php if (isset($agama) && $agama=="Katolik") echo "checked";?>  value="Islam"> Katolik
					<input type="radio" name="agama" <?php if (isset($agama) && $agama=="Hindu") echo "checked";?>  value="Islam"> Hindu
					<input type="radio" name="agama" <?php if (isset($agama) && $agama=="Buddha") echo "checked";?>  value="Islam"> Buddha <br>
					<input type="radio" name="agama" <?php if (isset($agama) && $agama=="Konghucu") echo "checked";?>  value="Islam"> Konghucu
					<input type="radio" name="agama" <?php if (isset($agama) && $agama=="Kepercayaan kpd Tuhan YME") echo "checked";?>  value="Islam"> Kepercayaan kepada Tuhan YME 
					<span class="warning"> <?php echo $error_agama; ?> </span> 
				</div>
			</div>

			<div class="form-group row">
				<label for="kwn" class="col-sm-10 col-form-label"> Kewarganegaraan* </label>
				<div class="col-sm-10">
					<input type="radio" name="kwn" <?php if (isset($kwn) && $kwn=="Indonesia (WNI)") echo "checked";?>  value="Indonesia (WNI)"> Indonesia (WNI) 
					<input type="radio" name="kwn" <?php if (isset($kwn) && $kwn=="Asing (WNA) ") echo "checked";?>  value="Asing (WNA)"> Asing (WNA) <span class="warning"> <?php echo $error_kwn; ?> </span> 
				</div>
			</div>

			<div class="form-group row">
				<label for="berkebutuhan" class="col-sm-10 col-form-label"> Berkebutuhan Khusus* </label>
				<div class="col-sm-10">
					<input type="radio" name="berkebutuhan" <?php if (isset($berkebutuhan) && $berkebutuhan=="Ya") echo "checked";?>  value="Ya"> Ya 
					<input type="radio" name="berkebutuhan" <?php if (isset($berkebutuhan) && $berkebutuhan=="Tidak") echo "checked";?>  value="Tidak"> Tidak <span class="warning"> <?php echo $error_berkebutuhan; ?> </span> 
				</div>
			</div>

			<div class="form-group row">
				<label for="alamat" class="col-sm-10 col-form-label"> Alamat Jalan* </label>
				<div class="col-sm-10">
					<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : "");?>"
					id="alamat" value="<?php echo $alamat; ?>"> <span class="warning"> <?php echo $error_alamat; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="rt" class="col-sm-10 col-form-label"> RT* </label>
				<div class="col-sm-10">
					<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : "");?>"
					id="rt" value="<?php echo $rt; ?>"> <span class="warning"> <?php echo $error_rt; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="rw" class="col-sm-10 col-form-label"> RW* </label>
				<div class="col-sm-10">
					<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : "");?>"
					id="rw" value="<?php echo $rw; ?>"> <span class="warning"> <?php echo $error_rw; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="dusun" class="col-sm-10 col-form-label"> Nama Dusun* </label>
				<div class="col-sm-10">
					<input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is-invalid" : "");?>"
					id="dusun" value="<?php echo $dusun; ?>"> <span class="warning"> <?php echo $error_dusun; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="kel" class="col-sm-10 col-form-label"> Nama Kelurahan/Desa* </label>
				<div class="col-sm-10">
					<input type="text" name="kel" class="form-control <?php echo ($error_kel !="" ? "is-invalid" : "");?>"
					id="kel" value="<?php echo $kel; ?>"> <span class="warning"> <?php echo $error_kel; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="kec" class="col-sm-10 col-form-label"> Kecamatan* </label>
				<div class="col-sm-10">
					<input type="text" name="kec" class="form-control <?php echo ($error_kec !="" ? "is-invalid" : "");?>"
					id="kec" value="<?php echo $kec; ?>"> <span class="warning"> <?php echo $error_kec; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="kodepos" class="col-sm-10 col-form-label"> Kode Pos* </label>
				<div class="col-sm-10">
					<input type="text" name="kodepos" class="form-control <?php echo ($error_kodepos !="" ? "is-invalid" : "");?>"
					id="kodepos" value="<?php echo $kodepos; ?>"> <span class="warning"> <?php echo $error_kodepos; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="lintang" class="col-sm-10 col-form-label"> Lintang* </label>
				<div class="col-sm-10">
					<input type="text" name="lintang" class="form-control <?php echo ($error_lintang !="" ? "is-invalid" : "");?>"
					id="lintang" value="<?php echo $lintang; ?>"> <span class="warning"> <?php echo $error_lintang; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="bujur" class="col-sm-10 col-form-label"> Bujur* </label>
				<div class="col-sm-10">
					<input type="text" name="bujur" class="form-control <?php echo ($error_bujur !="" ? "is-invalid" : "");?>"
					id="bujur" value="<?php echo $bujur; ?>"> <span class="warning"> <?php echo $error_bujur; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="tpttinggal" class="col-sm-10 col-form-label"> Tempat Tinggal* </label>
				<div class="col-sm-10">
					<input type="radio" name="tpttinggal" <?php if (isset($tpttinggal) && $tpttinggal=="Bersama Orang Tua") echo "checked";?>  value="Bersama Orang Tua"> Bersama Orang Tua
					<input type="radio" name="tpttinggal" <?php if (isset($tpttinggal) && $tpttinggal=="Bersama Wali") echo "checked";?>  value="Bersama Wali"> Bersama Wali
					<input type="radio" name="tpttinggal" <?php if (isset($tpttinggal) && $tpttinggal=="Kost") echo "checked";?>  value="Kost"> Kost <br>
					<input type="radio" name="tpttinggal" <?php if (isset($tpttinggal) && $tpttinggal=="Asrama") echo "checked";?>  value="Asrama"> Asrama
					<input type="radio" name="tpttinggal" <?php if (isset($tpttinggal) && $tpttinggal=="Panti Asuhan") echo "checked";?>  value="Panti Asuhan"> Panti Asuhan
					<span class="warning"> <?php echo $error_tpttinggal; ?> </span> 
				</div>
			</div>

			<div class="form-group row">
				<label for="transport" class="col-sm-10 col-form-label"> Moda Transportasi* </label>
				<div class="col-sm-10">
					<input type="text" name="transport" class="form-control <?php echo ($error_transport !="" ? "is-invalid" : "");?>"
					id="transport" value="<?php echo $transport; ?>"> <span class="warning"> <?php echo $error_transport; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="kks" class="col-sm-10 col-form-label"> Nomor KKS (Kartu Keluarga Sejahtera) (jika ada) </label>
				<div class="col-sm-10">
					<input type="text" name="kks" id="kks" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label for="anakke" class="col-sm-10 col-form-label"> Anak ke-berapa* </label>
				<div class="col-sm-10">
					<input type="text" name="anakke" class="form-control <?php echo ($error_anakke !="" ? "is-invalid" : "");?>"
					id="anakke" value="<?php echo $anakke; ?>"> <span class="warning"> <?php echo $error_anakke; ?> </span>
				</div>
			</div>

			<div class="form-group row">
				<label for="kps" class="col-sm-10 col-form-label"> Penerima KPS/PKH* </label>
				<div class="col-sm-10">
					<input type="radio" name="kps" <?php if (isset($kps) && $kps=="Ya") echo "checked";?>  value="Ya"> Ya 
					<input type="radio" name="kps" <?php if (isset($kps) && $kps=="Tidak") echo "checked";?>  value="Tidak"> Tidak 
					<span class="warning"> <?php echo $error_kps; ?> </span> 
				</div>
			</div>

			<div class="form-group row">
				<label for="nokps" class="col-sm-10 col-form-label"> No. KPS/PKH (apabila menerima) </label>
				<div class="col-sm-10">
					<input type="text" name="nokps" id="nokps" class="form-control">
				</div>
			</div>

	<div class="form-group row">
		<div class="col-sm-10">
			<button type="submit" class="btn btn-primary">Daftar</button>
		</div>
	</div>
</form>
</div>
</div>
</div>
</div>

</body>
</html>

<?php
include ("koneksi.php");

if(!empty($nama) && !empty($jkel) && !empty($nisn) && !empty($nik) && !empty($tptlahir) && !empty($tgllahir) && !empty($noreg) && !empty($agama) && !empty($kwn) && !empty($berkebutuhan) && !empty($alamat) && !empty($rt) && !empty($rw) && !empty($dusun) && !empty($kel) && !empty($kec) && !empty($kodepos) && !empty($lintang) && !empty($bujur) && !empty($tpttinggal) && !empty($transport) && !empty($anakke) && !empty($kps)) {
$sql = "INSERT INTO formulir set
nama='$nama', 
jkel='$jkel', 
nisn='$nisn', 
nik='$nik',
tptlahir='$tptlahir',
tgllahir='$tgllahir',
noreg='$noreg',
agama='$agama',
kwn='$kwn',
berkebutuhan='$berkebutuhan', 
alamat='$alamat',
rt='$rt',
rw='$rw',
dusun='$dusun',
kel='$kel',
kec='$kec',
kodepos='$kodepos',
lintang='$lintang',
bujur='$bujur',
tpttinggal='$tpttinggal',
transport='$transport',
kks='$kks',
anakke='$anakke',
kps='$kps',
nokps='$nokps'";

mysqli_query($conn, $sql) or die ("Gagal menyimpan data");
mysqli_close($conn);
echo "Berhasil input data";
}
?>