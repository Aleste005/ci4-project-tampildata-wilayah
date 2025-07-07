<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda - Helpdesk</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style>
        body {
            background-color: #fdfdfd;
            font-size: 15px;
        }
        .section-title {
            border-bottom: 2px solid #ccc;
            padding-bottom: 5px;
            margin-bottom: 20px;
            font-weight: bold;
            font-size: 18px;
        }
        .table th {
            background-color: #e9ecef;
        }
    </style>
</head>
<body class="container py-4">

    <h2 class="text-center mb-5">CONTOH MENAMPILKAN DATA PADA CI4 - DAN PHP 8.3</h2>

    <!-- Daftar Kecamatan -->
    <div class="mb-4">
        <div class="section-title">Daftar Kecamatan</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama Kecamatan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($kecamatan as $kec): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($kec['nama_kecamatan']) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- Daftar Desa -->
    <div>
        <div class="section-title">Daftar Desa</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama Desa</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($desa as $d): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($d['nama_desa']) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
