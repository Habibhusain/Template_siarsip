<?php
include __DIR__."/../../inc/header.php";
include __DIR__."/../../inc/sidebar.php";
?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Arsip</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Arsip</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                DataTable Example
                <a href="arsip_tambah.php" class="btn btn-primary float-right"><i class="fas fa-plus mr-2"></i>arsip Tambah</a>
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
                                <th>Action</th>
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
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="<?php echo BASE_URL;?>/view/arsip/arsip_daftar.php"><u>05-12-2024</u></a></td>
                                <td>
                                    <strong>Kode</strong> : KD-11
                                    <br>
                                    <strong>Nama</strong> : File tafsir
                                    <br>
                                    <strong>Jenis</strong> : pdf
                                </td>
                                <td>Keterangan</td>
                                <td>Keterangan</td>
                                <td>Keterangan</td>
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