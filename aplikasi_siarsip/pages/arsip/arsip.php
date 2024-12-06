<?php
include __DIR__."/../../inc/header.php";
include __DIR__."/../../inc/sidebar.php";
?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Daftar Arsip</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Daftar Arsip</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-file mr-1"></i>
                Daftar Arsip
                <a href="arsip_tambah.php" class="btn btn-primary float-right"><i class="fas fa-plus mr-2"></i>Tambah Arsip</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Waktu Upload</th>
                                <th>Arsip</th>
                                <th>Kategori</th>
                                <th>Petugas</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Waktu Upload</th>
                                <th>Arsip</th>
                                <th>Kategori</th>
                                <th>Petugas</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="<?php echo BASE_URL;?>/view/arsip/arsip_daftar.php"><u>05-12-2024</u></a></td>
                                <td>File tafsir </td>
                                <td>Jurnal</td>
                                <td>Dhika</td>
                                <td>-</td>
                                <td>
                                    <a href="arsip_edit.php" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                    &nbsp;
                                    <a href="#" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin Menghapus data ini??')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include "../../inc/footer.php";
?>