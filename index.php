<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR | SI PENGAJUAN BEASISWA</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="assets/js/jquery-3.7.1.min.js"></script>
</head>
<body>
    <?php if(isset($_GET["pesan"])){ ?>
    <div class="position-fixed top-0 left-0 text-center w-100 alert alert-danger" role="alert" style="z-index:99"><?= $_GET["pesan"] ?></div>
    <?php } ?>
    <header class="bg-primary">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
                <a class="navbar-brand text-warning fs-5 fw-b" href="#">SIB</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                            <a class="nav-link fw-bold fs-5 text-warning" href="index.php">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold fs-5 text-warning" href="data_beasiswa.php">Hasil</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center mb-3">FORM PENGAJUAN BEASISWA</h2>
                            <form action="save_registrasi.php" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nim" class="form-label fw-bold">Nim</label>
                                    <input type="text" name="nim" id="nim" class="form-control" onchange="get_nama()" required>                          
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label fw-bold">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" required>                          
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" required>                          
                                </div>
                                <div class="mb-3">
                                    <label for="ipk" class="form-label fw-bold">Telepon</label>
                                    <input type="text" name="telp" id="telp" class="form-control" required>                          
                                </div>
                                <div class="mb-3">
                                    <label for="semester" class="form-label fw-bold">Semester Saat Ini :</label>
                                    <select name="semester" id="semester" class="form-control" onchange="get_ipk()" required> 
                                        <option value="">- Pilih Semester -</option>
                                        <option value="1">Semester 1</option>
                                        <option value="2">Semester 2</option>
                                        <option value="3">Semester 3</option>
                                        <option value="4">Semester 4</option>
                                        <option value="5">Semester 5</option>
                                        <option value="6">Semester 6</option>
                                        <option value="7">Semester 7</option>
                                        <option value="8">Semester 8</option>
                                    </select>                         
                                </div> 
                                <div class="mb-3">
                                    <label for="ipk" class="form-label fw-bold">IPK</label>
                                    <input type="text" name="ipk" id="ipk" class="form-control" required readonly>                          
                                </div>
                                <div class="mb-3">
                                    <label for="jenis" class="form-label fw-bold">Jenis Beasiswa</label>
                                    <select name="jenis" id="jenis" class="form-control" required disabled> 
                                        <option value="">- Pilih Beasiswa -</option>
                                        <option value="Akademik">Akademik</option>
                                        <option value="Non Akademik">Non Akademik</option>
                                    </select>                         
                                </div>                                 
                                <div class="mb-3">
                                    <label for="syarat" class="form-label">Berkas Syarat</label>
                                    <input type="file" class="form-control" name="syarat" id="syarat" required disabled>
                                </div>       
                                <div class="mb-3">
                                    <input id="btn-submit" type="submit" value="DAFTAR" class="btn btn-primary btn-md d-block mx-auto" disabled>
                                </div>                                              
                            </form>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-primary">
        <div class="container">
            <p class="py-3 text-light text-center">Copyright <?php echo date("Y") ?> - Nama Anda</p>
        </div>
    </footer>
    <!-- Bootstrap jQuery -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>