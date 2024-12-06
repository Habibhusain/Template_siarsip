<?php
include __DIR__."/../../inc/header.php";
include __DIR__."/../../inc/sidebar.php";
?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Form Tambah Kategori</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Form Tambah Kategori</li>
        </ol>
        <div class="card mb-4 ">
            <div class="card-body ">
                <form action="" method="post">
                      <!-- INPUT Text-->
                      <div class="form-group">
                        <label for="exampleInputNama1">Nama</label>
                          <input type="text" class="form-control" name="" id="exampleInputNama1" aria-describedby="namaHelp" autofocus required>
                      </div>

                      <!-- INPUT Textarea-->
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">TextArea</label>
                        <textarea class="form-control" name="" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                        <div class="card-footer">
                          <button type="submit" class="btn btn-info">Submit</button>
                          <a href="kategori.php" class="btn btn-dark float-right">Cancel</a>
                        </div>
                  </form>
            </div>
        </div>
    </div>
</main>
<?php
include __DIR__ ."/../../inc/footer.php";
?>