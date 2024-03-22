<?php  
$prodi = [
    "SI"=> "Sistem Informasi",
    "TI"=> "Teknik Informatika",
    "BD"=> "Bisnis Digital"
];
$skills = [
    "HTML"=> 10,
    "CSS"=> 10,
    "JAVASCRIPT"=> 20,
    "RWD BOOTSTRAP"=> 20,
    "PHP"=> 30,
    "PHYTON"=> 30,
    "JAVA"=> 50,
];
$domisili = [
    "JAKARTA",
    "DEPOK",
    "BOGOR",
    "TANGGERANG",
    "BEKASI",
    "Lainnya",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container p-4">
<form method="POST" action="index.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="nim" name="nim" placeholder="Masukkan NIM " type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukkan Nama " type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="j-kelamin" id="j-kelamin_0" type="radio" class="custom-control-input" value="laki" required="required"> 
        <label for="j-kelamin_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="j-kelamin" id="j-kelamin_1" type="radio" class="custom-control-input" value="perempuan" required="required"> 
        <label for="j-kelamin_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="program-studi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="program-studi" name="program-studi" class="custom-select" required="required">
        <option value="">Pilih Prodi</option>
        <?php foreach ( $prodi as $prodikey => $prodivalue) {?> 
        <option value='<?= $prodivalue ?>'><?= $prodivalue ?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="skill" class="col-4 col-form-label">Skills Web & Programming</label> 
    <div class="col-8">
        <?php foreach ( $skills as $skillskey => $skillsvalue) {?>
            <input type="checkbox" name="skill" id="<?= $skillskey ?>">
            <label for="<?= $skillskey ?>"><?= $skillskey ?></label>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="program-studi" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="program-studi" name="program-studi" class="custom-select" required="required">
        <option value="">Pilih Domisili</option>
        <?php foreach ( $domisili as $domisilikey => $domisilivalue) {?> 
        <option value='<?= $domisilivalue ?>'><?= $domisilivalue ?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-gg-circle"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="Masukkan Email" type="email" class="form-control">
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
</body>
</html>