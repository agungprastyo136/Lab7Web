<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 7</title>
</head>
<body>
    <header>
        <h1></h1>
    </header>
</body>
</html>

<!-- membuat table sederhana -->
<form action="proses.php" method="post">
    <fieldset style="margin: 100px 380px">
        <legend>Data Masyarakat Kec.Cibitung</legend>
        <p>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama"><br> <br>
        </p>
        <p>
            <label>Tanggal Lahir</label>
            <input type="date" name="Tanggal_Lahir"><br> <br>
        </p>

        <p>
            <label>Pekerjaan</label>
            <select name="Pekerjaan">
                <option value="Karyawan">Karyawan</option>
                <option value="Polisi">Polisi</option>
                <option value="Guru">Guru</option>
                <option value="TNI">TNI</option>

            </select>
        </p>
        <p>
            <input type="submit" value="Simpan Data"></p>
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