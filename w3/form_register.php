<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container">
        <h3 style="text-align: center;">Form Regist Data Sience </h3>
        <form method="POST" action="form_register.php">
    <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">

</form>
</body>
</html><form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L"> 
        <label for="jk_0" class="custom-control-label">Laki - Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="studi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="studi" name="studi" class="custom-select">
        <option value="TI">Teknik Informasi</option>
        <option value="SI">Sistem Informasi</option>
        <option value="BD">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Checkboxes</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="checkbox_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="checkbox_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_2" type="checkbox" class="custom-control-input" value="javascript"> 
        <label for="checkbox_2" class="custom-control-label">Java Script</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_3" type="checkbox" class="custom-control-input" value="boostrap"> 
        <label for="checkbox_3" class="custom-control-label">Boostrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="checkbox_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_5" type="checkbox" class="custom-control-input" value="python"> 
        <label for="checkbox_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="checkbox_6" class="custom-control-label">JAVA</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>

<?php
// ambil data yang di inputkan user berdasarkan unique name
// gunakan fungsi isset untuk memeriksa apakah suatu variable sudah di atur atau belum 
// jika ada variable yang bernilai NULL maka fungsi isset akan mengembalikan nilai FALSE
if (isset($_POST["submit"])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = $_POST['jenis kelamin'];
    $studi = $_POST['studi'];
    $skill = $_POST['skill'];

    $nilai = 0;

    foreach ($skill as $value){
        switch ($value){
            case 'html' :
                $nilai += 10;
                break;
            case 'css' :
                $nilai += 10;
                break;
            case 'javascript' :
                $nilai += 20;
                break;
            case 'boostrap' :
                $nilai += 20;
                break;
            case 'php' :
                $nilai += 30;
                break;
            case 'python' :
                $nilai += 30;
                break;
            case 'java' :
                $nilai += 50;
                break;
            default :
                $nilai += 0;
                break;       
            
        }
    }
}
?>

<?php
// cetak hasil inputan user
echo "<h4>Hasil Register; </h4>";
echo "<br/>Nama : $nama ";
echo "<br/>NIM : $nim ";
echo "<br/>Jenis Kelamin: $jk ";
echo "<br/>Program Studi : $studi ";
echo "<br/>Skill : ";
foreach ($skill as $value){
    echo $value . ".";
}
echo "<br/>Skor Nilai : $nilai";
?>