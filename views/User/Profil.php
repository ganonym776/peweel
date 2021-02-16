<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $data['title'] ?></title>
  <link rel="shortcut icon" href="<?php echo $data['asset'] ?>/img/favico.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/style.css">
  <style>
    body {
      background-color: #ffffff;
      font-family: 'Nunito', sans-serif;
    }

    /* navbar */
    .navbar {
      background-color: #ffffff;
    }

    .navbar-brand img {
      max-height: 40px;
    }

    .btn-navbar-right {
      margin-top: -10px !important;
      margin-bottom: -8px !important;
      margin-right: -18px !important;
      height: 70px;
      border-radius: 0;
    }

    /* header */
    header {
      margin-top: 1rem;
      padding: 0px 60px;
      margin-bottom: 1rem;
    }

    header .img {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 1rem;
    }

    .w-label {
      width: 8rem !important;
    }

    .w-label>span {
      width: 100% !important;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .bg-disable {
      background-color: #f4f4f4 !important;
    }

    main {
      padding: 1rem;
    }

    header h3 {
      color: #000000;
      font-weight: 900;
    }
  </style>
</head>

<body>
  <!-- navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent navbar-fixed-top">
    <nav class="container">
      <a class="navbar-brand align-self-center" href="<?php echo $data['URLROOT'] ?>">
        <img src="<?php echo $data['asset'] ?>/img/img5.png" alt="Logo Bekasan">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $data['URLROOT'] ?>/pages/aboutus">Tentang Kami <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $data['URLROOT'] ?>/helps/index">Pusat Bantuan</a>
          </li>
        </ul>
      </div>
    </nav>
  </nav>
  <!--end navbar -->
  <!-- kalau bisa kasih navbar yang dibikin sama gunawan sih biar sama smua -->

  <!-- header -->
  <header>
    <div class="container card">
      <div class="row d-flex justify-content-center align-items-center py-3">
        <div class="col-4">
          <div class="img">

            <form class="mt-2" action="<?php echo $data['URLROOT'] . '/user/updatef/' . $data['user']['username']; ?>" method="post" enctype="multipart/form-data">
              <div class="mt-3">
                <div class="mb-5 text-center">
                  <img id="image" src="<?php if (empty($data['lokasi_foto'])) {
                                          echo $data['asset'] . '/img/user_default.jpeg';
                                        } else {
                                          echo $data['lokasi_foto'];
                                        } ?>" width="200" height="200" class="rounded-circle">
                </div>
              </div>
              <div class="custom-file">
                <input type="file" id="fileInput" class="custom-file-input" id="profil-pic" aria-describedby="profil-pic" name="lokasi_foto" accept="image/jpg,image/jpeg,image/png">
                <label class="custom-file-label" for="profil-pic">Pilih file</label>
              </div>
              <input class="w-100" type="submit" name="submit" value="Upload">
              <small><strong>Note:</strong> Only .jpg, .jpeg, .png formats allowed to a max size of 2 MB.</small>
            </form>
          </div>
        </div>
        <div class="col-8 align-self-center">
          <div class="input-group mb-3">
            <div class="input-group-prepend w-label">
              <span class="input-group-text" id="username">Username</span>
            </div>
            <input type="text" class="form-control bg-disable" placeholder="Username" aria-label="Username" aria-describedby="username" value="<?php echo $data['user']['username']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend w-label">
              <span class="input-group-text" id="email">Email</span>
            </div>
            <input type="text" class="form-control bg-disable" placeholder="Email" aria-label="email" aria-describedby="email" value="<?php echo $data['user']['email']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend w-label">
              <span class="input-group-text" id="first_name">Nama Depan</span>
            </div>
            <input type="text" class="form-control" placeholder="Nama Depan" aria-label="Nama Depan" aria-describedby="first_name" value="<?php echo $data['user']['first_name']; ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend w-label">
              <span class="input-group-text" id="last_name">Nama Belakang</span>
            </div>
            <input type="text" class="form-control" placeholder="Nama Belakang" aria-label="Nama Belakang" aria-describedby="last_name" value="<?php echo $data['user']['last_name']; ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend w-label">
              <span class="input-group-text" id="no-telpon">Nomor Telpon</span>
            </div>
            <input type="text" class="form-control" placeholder="Nomor Telpon" aria-label="No Telpon" aria-describedby="no-telpon" value="<?php echo $data['user']['phone_num']; ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend w-label">
              <span class="input-group-text" id="address">Alamat</span>
            </div>
            <textarea name="address" class="form-control" aria-describedby="address" placeholder="Alamat" aria-label="Alamat" cols="30" rows="3"><?php echo $data['user']['address']; ?></textarea>
          </div>
          <button class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </div>
    </div>
  </header>
  <!-- end header -->

  <main>
    <div class="container card">
      <div class="d-flex flex-column justify-content-center align-items-center py-3">
        <img width="200" height="150" src="<?php echo $data['asset'] ?>/img/empty.png" alt="Kosong">
        <a href="edit-profil.html"><button class="btn btn-primary">Upload Barang</button></a>
      </div>
    </div>
  </main>

  <footer class="mt-5 mb-4 border-top">
    <div class="container pt-5 pb-5">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-12 col-lg-3">
                  <img width="200px" src="<?php echo $data['asset'] ?>/img/img10.png">
                </div>
                <div class="col-12 col-lg-3">
                  <h5>BEKASAN</h5>
                  <ul class="list-unstyled">
                    <li><a href="<?php echo $data['URLROOT'] ?>/pages/aboutus">Tentang Bekasan</a></li>
                    <li><a href="<?php echo $data['URLROOT'] ?>/helps/index">Pusat Bantuan</a></li>
                  </ul>
                </div>
                <div class="col-12 col-lg-3">
                  <h5>Kontak</h5>
                  <ul class="list-unstyled">
                    <li>Yogyakarta</li>
                    <li>Indonesia</li>
                    <li>0821 - 2222 - 8888</li>
                    <li>support@bekasan.id</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row border-top justify-content-center align-items-center pt-4">
        <div class="col-auto text-gray-500 font-weight-light">
          2020 Copyright Bekasan
        </div>
      </div>
    </div>
  </footer>

  <script src="<?php echo $data['asset'] ?>/js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/js/bootstrap.js"></script>
  <script src="<?php echo $data['asset'] ?>/js/retina.min.js"></script>
  <script>
    document.getElementById('fileInput').onchange = function(evt) {
      var tgt = evt.target || window.event.srcElement,
        files = tgt.files;

      // FileReader support
      if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function() {
          document.getElementById('image').src = fr.result;
        }
        fr.readAsDataURL(files[0]);
      }

      // Not supported
      else {
        // fallback -- perhaps submit the input to an iframe and temporarily store
        // them on the server until the user's session ends.
      }
    }
  </script>
</body>

</html>