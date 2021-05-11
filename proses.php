<form action="Tugas_Praktikum 7.php" method="post">
<fieldset style="margin: 100px 380px">
        <legend>Data Diri Anda</legend>

  <?php
	if ($_POST)
	{
		echo '<b>Nama : </b>' . $_POST['nama'];
		echo '<br>';
		echo '<br>';
		echo '<b>Tanggal Lahir : </b>' . $_POST['Tanggal_Lahir'];
		echo '<br>';
		echo '<br>';
		$tanggal_lahir = new DateTime($_POST['Tanggal_Lahir']);
		$sekarang = new DateTime("today");
		if ($tanggal_lahir > $sekarang) { 
		$thn = "0";
		$bln = "0";
		$tgl = "0";
	}
	$thn = $sekarang->diff($tanggal_lahir)->y;
	$bln = $sekarang->diff($tanggal_lahir)->m;
	$tgl = $sekarang->diff($tanggal_lahir)->d;
	echo "<b>Umur : </b>";
	echo $thn." tahun ".$bln." bulan ".$tgl." hari";
	echo '<br>';
	echo '<br>';
	echo '<b>Pekerjaan : </b>' . $_POST['Pekerjaan'];
	echo '<br>';
	echo '<br>';
	echo '<b>Gaji :</b>';
	$gawean = $_POST["Pekerjaan"];

	if ($gawean=="Karyawan") {
	$gaweanku="Karyawan"; }
	else if ($gawean=="Polisi") {
	$gaweanku="Polisi"; }
	else if ($gawean=="guru") {
	$gaweanku="Guru"; }
	else if ($gawean=="TNI") {
	$gaweanku="TNI"; }
	else
		{$gaweanku="Sopir";}
	echo "";
	if ($gaweanku=="Karyawan") {
	$gajifinal="4.500.000"; }
	else if ($gaweanku=="Polisi") {
	$gajifinal="4.000.000"; }
	else if ($gaweanku=="Guru") {
	$gajifinal="3.500.000"; }
	else if ($gaweanku=="TNI") {
	$gajifinal="4.100.000"; }
else
		{$gajifinal="3.799.360";}
	echo " Rp. $gajifinal";
}
?>
</fieldset>
</form>




<!-- penambahan Style pada Form -->
<style>
    form p > label {
        display: inline-block;
        width: 100px;
 }
 form input[type="text"], form textarea {border: 1px solid #613686;
 }
 form input[type="submit"] {
    border: 1px solid #613686;
    background-color: #613686;
    color: #ffffff;
    font-weight: bold;
    padding: 5px 15px;
 }
</style>