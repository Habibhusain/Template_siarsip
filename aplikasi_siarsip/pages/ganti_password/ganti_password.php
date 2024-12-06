<?php
include __DIR__."/../../inc/header.php";
include __DIR__."/../../inc/sidebar.php";
?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Form Ganti Password</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Form Ganti Password</li>
        </ol>
        <div class="card mb-4 ">
            <div class="card-body ">
                <form action="" method="post">
                      <!-- INPUT Password-->    
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password Baru</label>
                            <input type="password" class="form-control" name="" id="exampleInputPassword1" autofocus required>
                        </div>

                        <div class="card-footer">
                          <button type="submit" class="btn btn-info">Submit</button>
                          <a href="kategori.php" class="btn btn-link float-right">Kembali</a>
                        </div>
                  </form>
            </div>
        </div>
    </div>
</main>
<?php
include __DIR__ ."/../../inc/footer.php";
?>