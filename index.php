<!DOCTYPE html>
<html lang="en">
<head>
	<title>Elitery Form Covid-19</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/eliteryicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

    <h4 class="sent-notification"></h4>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form method="post" action="tiga.php.php" class="contact100-form validate-form">
			   <center><IMG SRC="eliterylogo.png" ALT="some text" ></center>
			   <br>
				<span class="contact100-form-title">
					Instrumen Self Assessment Risiko Covid-19
				</span>
				<span class="label-input100">
				    <center><b>PERHATIAN</b></center>
				</span>
				<br>
				<span class="label-input100" >
				<p align="justify">    Demi Kesehatan dan keselamatan bersama di tempat kerja, anda harus JUJUR dalam menjawab pertanyaan dibawah ini. </p>
				</span>
				<span class="label-input100">
				<p align="justify">    Dalam 14 hari terakhir, apakah anda pernah mengalami hal-hal berikut: </p>
				</span>
				<br>
				<span class="label-input100">
				    <p align="justify">
				    0   = Risiko Kecil
				    <br>
				    1-4 = Risiko Sedang
				    <br>
				    >=5 = Risiko Besar
				    </p>
				</span>
				<br>
				<br>
				


				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" id ="email" name="email" placeholder="Masukan Email Anda">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Nama Lengkap</span>
					<input class="input100" type="text" id="name" name="nama" placeholder="Masukan Nama Lengkap Anda">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name Company is required">
					<span class="label-input100">Nama Perusahaan</span>
					<input class="input100" type="text" id="subject" name="subject" placeholder="Masukan Nama Perusahaan Anda">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Jenis kelamin</span>
					<div>
						<select class="selection-2" id ="jk" name="jk">
							<option>Pilih salah satu</option>
							<option>Laki-Laki</option>
							<option>Perempuan</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100"><p align="justify">1. Apakah pernah keluar rumah / tempat umum (pasar, fasyankes, kerumunan orang dan lain-lain)?</p></span> 
					<div>
						<select class="selection-2" id="no5" name="no5">
							<option>Pilih salah satu</option>
							<option>Ya</option>
							<option>Tidak</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

								<div class="wrap-input100 input100-select">
					<span class="label-input100"><p align="justify">2. Apakah pernah menggunakan transportasi umum?</p></span> 
					<div>
						<select class="selection-2" id="no6" name="no6">
							<option>Pilih salah satu</option>
							<option>Ya</option>
							<option>Tidak</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

								<div class="wrap-input100 input100-select">
					<span class="label-input100"><p align="justify">3. Apakah pernah melakukan perjalanan ke luar kota / internasional? (wilayah yang terjangkit / zona merah)</p></span> 
					<div>
						<select class="selection-2" id="no7" name="no7">
							<option>Pilih salah satu</option>
							<option>Ya</option>
							<option>Tidak</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

								<div class="wrap-input100 input100-select">
					<span class="label-input100"><p align="justify">4. Apakah anda mengikuti kegiatan yang melibatkan orang banyak? </p></span> 
					<div>
						<select class="selection-2" id="no8" name="no8">
							<option>Pilih salah satu</option>
							<option>Ya</option>
							<option>Tidak</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

								<div class="wrap-input100 input100-select">
				<span class="label-input100"><p align="justify">5. Apakah memiliki riwayat kontak erat dengan orang yang dinyatakan ODP, PDP atau konfirm COVID-19 (berjabat tangan, berbicara, berada dalam satu ruangan / satu rumah)? </p></span>
					<div>
						<select class="selection-2" id="no9" name="no9">
							<option>Pilih salah satu</option>
							<option>Ya</option>
							<option>Tidak</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

								<div class="wrap-input100 input100-select">
					<span class="label-input100"> <p align="justify"> 6. Apakah pernah mengalami demam / batuk / pilek / sakit tenggorokan / sesak / dalam 14 hari terakhir?</p></span>
					<div>
						<select class="selection-2" id="no10" name="no10">
							<option>Pilih salah satu</option>
							<option>Ya</option>
							<option>Tidak</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100"> <p align="justify"> Jika pertanyaan No.5 dan 6 "Ya" mohon dijelaskan kondisi anda saat ini? kapan mulai dirasakan? self monitoring apa yang sudah anda lakukan? sudah pernah melakukan rapid test atau test lainnya?</p> </span>
					<textarea class="input100" id="note" name="note" placeholder="Tulis pesan anda disini..."></textarea>
					<span class="focus-input100"></span>
				</div>
				

			<form class="contact100-form validate-form">
			    <span class="label-input100">
			        <b>Anjuran</b>
			        <br>
			      <p align="justify">  *Jika kondisi kesehatan anda tidak dalam keadaan sehat sebaiknya tidak melanjutkan kunjungan ke Data Center dan segera periksa ke dokter." </p>
			    </span>
			    </form>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" onclick="sendEmail()" value="simpan">
							<span>
								Kirim
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");
            var jk = $("#jk");
            var no5 = $("#no5");
            var no6 = $("#no6");
            var no7 = $("#no7");
            var no8 = $("#no8");
            var no9 = $("#no9");
            var no10 = $("#no10");
            var note = $("#note");
            
            location.reload();

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val(),
                       jk: jk.val(),
                       no5: no5.val(),
                       no6: no6.val(),
                       no7: no7.val(),
                       no8: no8.val(),
                       no9: no9.val(),
                       no10: no10.val(),
                       note: note.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>
</html>
