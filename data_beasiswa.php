<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA | SI PENGAJUAN BEASISWA</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="assets/js/jquery-3.7.1.min.js"></script>
</head>
<body>
    <?php if(isset($_GET["pesan"])){ ?>
        <div class="position-fixed top-0 left-0 text-center w-100 alert alert-success" role="alert" style="z-index:99"><?= $_GET["pesan"] ?></div>
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
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-3">DATA PENGAJUAN BEASISWA</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>TANGGAL</th>
                                <th>NIM</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>TELEPON</th>
                                <th>IPK</th>
                                <th>JENIS</th>
                                <th>SYARAT</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include "libs/koneksi.php";

                                $sql = "SELECT * FROM beasiswa";
                                $cmd = $conn->prepare($sql);
                                $cmd->execute();
                                $dtBeasiswa = $cmd->fetchAll();

                                foreach($dtBeasiswa as $rsBeasiswa){
                            ?>
                            <tr>
                                <td><?= $rsBeasiswa["tgl"] ?></td>
                                <td><?= $rsBeasiswa["nim"] ?></td>
                                <td><?= $rsBeasiswa["nama"] ?></td>
                                <td><?= $rsBeasiswa["email"] ?></td>
                                <td><?= $rsBeasiswa["telp"] ?></td>
                                <td><?= $rsBeasiswa["ipk"] ?></td>
                                <td><?= $rsBeasiswa["jenis"] ?></td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="syarat/<?= $rsBeasiswa["syarat"] ?>">LIHAT</a>
                                </td>
                                <td>
                                    <span class="badge bg-<?= ($rsBeasiswa["status"]==0 ? "warning" : ($rsBeasiswa["status"]==1 ?"success" : "danger")) ?>"><?= ($rsBeasiswa["status"]==0 ? "Belum di Verifikasi" : ($rsBeasiswa["status"]==1 ? "Verified" : "Ditolak")) ?></span>
                                </td>
                                <td>
                                    <?php if($rsBeasiswa["status"]==0){ ?>
                                        <a class="btn btn-success btn-sm text-light" href="update_status.php?status=1&id=<?= $rsBeasiswa["id"] ?>"><i class="bi bi-check"></i></a>
                                        <a class="btn btn-danger btn-sm text-light" href="update_status.php?status=2&id=<?= $rsBeasiswa["id"] ?>"><i class="bi bi-x-octagon-fill"></i></a>
                                    <?php } else { ?>
                                        <a class="btn btn-warning btn-sm text-dark" href="update_status.php?status=0&id=<?= $rsBeasiswa["id"] ?>"><i class="bi bi-arrow-clockwise"></i> UNVERIFIED</a>
                                    <?php } ?>
                                </td>
                            <?php
                                }
                            ?>
                            </tr>
                        </tbody>                                
                    </table>
                </div>
            </div>      
        </div>
    </main>
    <footer class="bg-primary">
        <div class="container">
            <p class="py-3 text-light">Copyright <?php echo date("Y") ?> - Nama Anda</p>
        </div>
    </footer>
    <!-- Bootstrap jQuery -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>