<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="<?= base_url('assets/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<div class="row">
		<div class="col-sm-3">

		</div>
		<div class="col-sm-6" style="top: 50px;">
			<div class="card">
				<div class="card-body">
					<form method="post" action="<?= base_url('welcome/hasil'); ?>">
						<div class="form-group">
							<label for="nik">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
						</div>
						<div class="form-group">
							<label for="nik">NIK</label>
							<input type="number" class="form-control" id="nik" name="nik" placeholder="Masukan NIK">
						</div>
						<div class="form-group">
							<label for="nik">Nomor Kartu Keluarga</label>
							<input type="number" class="form-control" id="kk" name="kk" placeholder="Masukan KK">
						</div>
						<div class="form-group">
							<label>Foto KTP</label>
							<input type="file" class="form-control-file" id="FKTP" name="FKTP">
						</div>
						<div class="form-group">
							<label for="nik">Foto Kartu Keluarga</label>
							<input type="file" class="form-control-file" id="FKK" name="FKK">
						</div>
						<div class="form-group">
							<label for="nik">Umur</label>
							<input type="number" class="form-control" id="umur" name="umur">
						</div>

						<div class="form-group">
							<label for="exampleFormControlSelect1">Jenis Kelamin</label>
							<select class="form-control" id="kelamin" name="kelamin">
								<option disabled selected>Pilih Kelamin</option>
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>

						<div class="form-group">
							<label for="exampleFormControlSelect1">Provinsi</label>
							<select class="form-control" id="provinsi" name="provinsi">
								<option disabled selected>Pilih Provinsi</option>
								<?php foreach ($provinsi as $item) : ?>
									<option value=" <?= $item->id ?>"> <?= $item->name ?></option>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="form-group">
							<label for="nik">Kab/Kota</label>
							<select class="form-control" id="kabkot" name="kabkot">
								<option disabled selected>Pilih Kab/kota</option>
							</select>
						</div>
						<div class="form-group">
							<label for="nik">Kecamatan</label>
							<select class="form-control" id="kec" name="kec">
								<option disabled selected>Pilih kecamatan</option>
							</select>
						</div>
						<div class="form-group">
							<label for="nik">Kelurahan/Desa</label>
							<select class="form-control" id="kel" name="kel">
								<option disabled selected>Pilih Kelurahan</option>
							</select>
						</div>

						<div class="form-group">
							<label for="nik">Alamat</label>
							<input type="text" class="form-control" id="nkk" placeholder="Masukan Alamat">
						</div>

						<div class="row">
							<div class="col">
								<label for="nik">RT</label>
								<input type="text" class="form-control" placeholder="Masukan RT" name="rt" id="rt" aria-label="First name">
							</div>
							<div class="col">
								<label for="nik">RW</label>
								<input type="text" class="form-control" placeholder="Masukan RW" name="rw" id="rw" aria-label="Last name">
							</div>
						</div>

						<div class="form-group">
							<label for="nik">Penghasilan Sebelum Pandemi</label>
							<input type="text" class="form-control" id="nkk" placeholder="Masukan Penghasilan Sebelum Pandemi">
						</div>

						<div class="form-group">
							<label for="nik">Penghasilan Setelah Pandemi</label>
							<input type="text" class="form-control" id="nkk" placeholder="Masukan Penghasilan Setelah Pandemi">
						</div>


						<div class="form-group">
							<label for="alasan">Alasan membutuhkan bantuan</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
								<label class="form-check-label" for="flexRadioDefault1">
									Kehilangan pekerjaan
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
								<label class="form-check-label" for="flexRadioDefault1">
									Kepala keluarga terdampak atau korban Covid-19
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
								<label class="form-check-label" for="flexRadioDefault1">
									Tergolong fakir/miskin semenjak sebelum Covid-19
								</label>
							</div>

						</div>
						<div class="form-group">
							<label for="nik">Lainnya</label>
							<input type="text" class="form-control" id="lain" name="lain" placeholder="Tanggapan lain">
						</div>

						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="cek4" name="cek4">

								<label class="form-check-label" for="defaultCheck1">
									Saya menyatakan bahwa data yang diisikan adalah benar dan siap mempertanggungjawabkan apabila ditemukan ketidaksesuaian dalam data tersebut.
								</label>
							</div>
						</div>

						<button type="submit" class="btn btn-primary">SIMPAN</button>
					</form>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="<?= base_url('assets/') ?>js/bootstrap.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#provinsi').change(function() {
					var provinsi_id = $('#provinsi').val().trim();
					if (provinsi_id != '') {
						$.ajax({
							url: "https://www.emsifa.com/api-wilayah-indonesia/api/regencies/" + provinsi_id + ".json",
							method: "GET",
							data: {
								province_id: provinsi_id
							},
							success: function(data) {
								var html = '';
								var i;
								for (i = 0; i < data.length; i++) {
									html += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
									console.log(html)
								}
								$('#kabkot').html(html);
							}
						});
					}
				});

				$('#kabkot').change(function() {
					var distrik_id = $('#kabkot').val().trim();
					if (distrik_id != '') {
						$.ajax({
							url: "http://www.emsifa.com/api-wilayah-indonesia/api/districts/" + distrik_id + ".json",
							method: "GET",
							data: {
								regency_id: distrik_id
							},

							success: function(data) {
								var html = '';
								var i;
								for (i = 0; i < data.length; i++) {
									html += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
								}
								$('#kec').html(html);
							}
						});
					}
				});


				$('#kec').change(function() {
					var villages = $('#kec').val().trim();
					if (villages != '') {
						$.ajax({
							url: "http://www.emsifa.com/api-wilayah-indonesia/api/villages/" + villages + ".json",
							method: "GET",
							data: {
								district_id: villages
							},

							success: function(data) {
								var html = '';
								var i;
								for (i = 0; i < data.length; i++) {
									html += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
								}
								$('#kel').html(html);
							}
						});
					}
				});

			});
		</script>

</body>

</html>