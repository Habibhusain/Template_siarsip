<?php
include __DIR__."/../../inc/header.php";
include __DIR__."/../../inc/sidebar.php";
?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Form Tambah Petugas</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Form Tambah Petugas</li>
        </ol>
        <div class="card mb-4 ">
            <div class="card-body ">
                <form action="" method="post">
                      <!-- INPUT Text-->
                      <div class="form-group">
                        <label for="exampleInputNama1">Username</label>
                          <input type="text" class="form-control" name="" id="exampleInputNama1" aria-describedby="namaHelp" autofocus required>
                      </div>

                       <!-- INPUT Text-->
                       <div class="form-group">
                        <label for="exampleInputNama1">First Name</label>
                          <input type="text" class="form-control" name="" id="exampleInputNama1" aria-describedby="namaHelp" required>
                      </div>

                      <!-- INPUT Text-->
                      <div class="form-group">
                        <label for="exampleInputNama1">Last Name</label>
                          <input type="text" class="form-control" name="" id="exampleInputNama1" aria-describedby="namaHelp">
                      </div>

                      <!-- INPUT Email-->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" name="" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>

                    <!-- INPUT Password-->    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" name="" id="exampleInputPassword1" required>
                    </div>

                     <!-- INPUT Number-->
                     <div class="form-group">
                        <label for="exampleInputNama1">Phone</label>
                          <input type="number" class="form-control" name="" id="exampleInputNama1" aria-describedby="namaHelp">
                      </div>

                      <!-- INPUT File-->
                        <div class="form-group">
                          <label for="file">File</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                          </div>
                        </div>

                        <div class="card-footer">
                          <button type="submit" class="btn btn-info">Submit</button>
                          <a href="petugas.php" class="btn btn-dark float-right">Cancel</a>
                        </div>
                  </form>
            </div>
        </div>
    </div>
</main>
<?php
include __DIR__ ."/../../inc/footer.php";
?>