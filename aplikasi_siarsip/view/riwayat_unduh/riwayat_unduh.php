<?php
include __DIR__."/../../inc/header.php";
include __DIR__."/../../inc/sidebar.php";
?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Daftar Riwayat Unduh</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Daftar Riwayat Unduh</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-download mr-1"></i>
                Daftar Riwayat Unduh
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Waktu Upload</th>
                                <th>User</th>
                                <th>Arsip yang sudah diunduh</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Waktu Upload</th>
                                <th>User</th>
                                <th>Arsip yang sudah diunduh</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>05-12-2024</td>
                                <td>Dhika</td>
                                <td>Jurnal</td>
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