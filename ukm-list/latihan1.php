<?php 
  $data = file_get_contents("data/data.json");
  $list = json_decode($data, true);
  $list = $list["list"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Template CSS -->
  <link rel="stylesheet" href="bs/css/bootstrap.min.css" />

  <title>List Organisasi - UTM</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
    <div class="container">
      <a class="navbar-brand" href="#">Organization LIST</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample05">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="#">All List</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row mt-5">
      <div class="col">
        <h1>All Menu</h1>
      </div>
    </div>

    <div class="row">
      <?php foreach($list as $row) : ?>
      <div class="col-md-4">
        <div class="card mt-3">
          <img src="img/<?= $row['gambar']; ?>" class="card-img-top img-fluid">

          <div class="card-body">
            <h5 class="card-title"><?= $row['nama']; ?></h5>
            <span class="badge bg-primary mt-2"><?= $row['kategori']; ?></span>
            <p class="card-text"><?= $row['deskripsi']; ?></p>
            <a href="#" class="">Detail</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Templates Javascript -->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="bs/js/bootstrap.bundle.min.js"></script>
  
  <!-- Custom JS -->
  <script src="js/script.js"></script>
</body>
</html>