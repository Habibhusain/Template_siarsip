<?php
include __DIR__."/../../inc/header.php";
include __DIR__."/../../inc/sidebar.php";
?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Daftar User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Daftar User</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                User
                <a href="users_tambah.php" class="btn btn-primary float-right"><i class="fas fa-plus mr-2"></i>Tambah User</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href=""><u>Nixon</u></a></td>
                                <td>nixon</td>
                                <td>nixon@gmail.com</td>
                                <td>089123</td>
                                <td>active</td>
                                <td>
                                    <a href="users_edit.php" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
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