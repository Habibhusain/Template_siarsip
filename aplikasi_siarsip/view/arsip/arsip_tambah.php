<?php
include __DIR__."/../../inc/header.php";
include __DIR__."/../../inc/sidebar.php";
?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Form Tambah Arsip</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Form Tambah Arsip</li>
        </ol>
        <div class="card mb-4 ">
            <div class="card-body ">
                <form action="" method="post">
                      <!-- INPUT Text-->
                      <div class="form-group">
                        <label for="exampleInputKodeArsip1">KodeArsip</label>
                          <input type="text" class="form-control" name="" id="exampleInputKodeArsip1" aria-describedby="kodeArsipHelp" autofocus required>
                      </div>
                      
                       <!-- INPUT Text-->
                       <div class="form-group">
                        <label for="exampleInputNama1">Nama File</label>
                          <input type="text" class="form-control" name="" id="exampleInputNama1" aria-describedby="namaHelp" autofocus required>
                      </div>

                       <!-- INPUT Select-->
                       <div class="form-group">
                        <label>Kategori</label>
                        <select class="custom-select" id="inputGroupSelect01" name="">
                          <option selected>Pilih Kategori</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>

                      <!-- INPUT Textarea-->
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">TextArea</label>
                        <textarea class="form-control" name="" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                          <a href="arsip.php" class="btn btn-dark float-right">Cancel</a>
                        </div>
                  </form>
            </div>
        </div>
    </div>
</main>
<?php
include __DIR__ ."/../../inc/footer.php";
?>