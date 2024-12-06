<?php
include __DIR__."/../../inc/header.php";
include __DIR__."/../../inc/sidebar.php";
?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Preview Arsip</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Arsip</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
              <a href="<?php echo BASE_URL;?>/view/arsip/arsip.php" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> &nbsp; Kembali</a>
            </div>
            <div class="card-body">
               <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tbody>
                            <tr>
                            <td class="font-weight-bold">Kode Arsip</td>
                            <td>J-120</td>
                            </tr>
                            <tr>
                            <td class="font-weight-bold"> Waktu Upload</td>
                            <td>21:20:20 18-20-2020</td>
                            </tr>
                            <tr>
                            <td class="font-weight-bold"> Nama File</td>
                            <td>Jurnal</td>
                            </tr>
                            <tr>
                            <td class="font-weight-bold"> Kategori</td>
                            <td>surat putusan</td>
                            </tr>
                            <tr>
                            <td class="font-weight-bold"> Jenis File</td>
                            <td>pdf</td>
                            </tr>
                            <tr>
                            <td class="font-weight-bold"> Petugas Pengupload</td>
                            <td>nixon</td>
                            </tr>
                            <tr>
                            <td class="font-weight-bold">Keterangan</td>
                            <td>tes</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <iframe src="<?php echo BASE_URL;?>assets/file/46722-118211-1-PB.pdf" width="100%" height="500px"></iframe>
                </div>
               </div>
            </div>
        </div>
    </div>
</main>
<?php
include "../../inc/footer.php";
?>