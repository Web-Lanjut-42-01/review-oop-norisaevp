<?php 

class satu{
    
	function hitung($bmi, $jk){
		if ($jk=="Laki-laki") {
			if ($bmi<17) {
				echo "BMI :".$bmi."<br>Termasuk Kategori : Under Weight/Kurus";
			} elseif ($bmi>=17 && $bmi<=25) {
				echo "BMI :".$bmi."<br>Termasuk Kategori : Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo "BMI :".$bmi."<br>Termasuk Kategori : Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo "BMI :".$bmi."<br>Termasuk Kategori : Obesitas";
			}
		} elseif ($jk=="Perempuan") {
			if ($bmi<18) {
				echo "BMI :".$bmi."<br>Termasuk Kategori : Under Weight/Kurus";
			} elseif ($bmi>=18 && $bmi<=25) {
				echo "BMI :".$bmi."<br>Termasuk Kategori : Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo "BMI :".$bmi."<br>Termasuk Kategori : Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo "BMI :".$bmi."<br>Termasuk Kategori : Obesitas";
			}
		}
	}

}
$noor = new satu(); 
if (isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$bb= $_POST['bb'];
	$tb = $_POST['tb'];
	$jk = $_POST['jk'];
	$bmi = $bb/($tb*$tb/10000);
    $noor->hitung($bmi, $jk);
    echo "<br>";
    echo "Nama : $nama<br>";
    echo "Jenis Kelamin : $jk<br>";
}
 ?>