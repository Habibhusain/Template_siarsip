<?php
include __DIR__ ."/../inc/header.php";
include __DIR__ ."/../inc/sidebar.php";
?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Vertical</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Vertical</li>
        </ol>
        <div class="card mb-4 ">
            <div class="card-body ">
                <form action="" method="post">
                  <!-- INPUT Text-->
                  <div class="form-group">
                    <label for="exampleInputNama1">Nama</label>
                      <input type="text" class="form-control" name="" id="exampleInputNama1" aria-describedby="namaHelp">
                  </div>

                  <!-- INPUT Email-->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" name="" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                    <!-- INPUT Password-->    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" name="" id="exampleInputPassword1">
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

                    <!-- INPUT Checkbox-->
                    <div class="form-group form-check mb-0">
                        <input class="form-check-input" type="checkbox" name="" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          Chcekbox 1
                        </label>
                      </div>
                      <div class="form-group form-check mb-0">
                        <input class="form-check-input" type="checkbox" name="" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                          Checkbox 2
                        </label>
                      </div>
                      <div class="form-group form-check ">
                        <input class="form-check-input" type="checkbox" name="" value="" id="defaultCheck3" disabled>
                        <label class="form-check-label" for="defaultCheck3">
                          Checkbox 3
                        </label>
                      </div>

                      <!-- INPUT Radio-->
                      <div class="form-group form-check mb-0">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Radio 1
                        </label>
                      </div>
                      <div class="form-group form-check mb-0">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                          Radio 2
                        </label>
                      </div>
                      <div class="form-group form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                        <label class="form-check-label" for="exampleRadios3">
                          Radio 3
                        </label>
                      </div>

                      <!-- INPUT Textarea-->
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">TextArea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                      <!-- INPUT Select-->
                      <div class="form-group">
                        <label>Select</label>
                        <select class="custom-select" id="inputGroupSelect01">
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>

                      <!-- INPUT Select Multiple-->
                        <div class="form-group">
                          <label>Custom Select Multiple</label>
                          <select multiple="" class="custom-select">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                            <option>option 5</option>
                          </select>
                        </div>

                        <!-- INPUT Input addon-->
                        <div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group input-group mb-3">
                            <input type="text" class="form-control" placeholder="">
                            <div class="input-group-prepend">
                              <span class="input-group-text">0.00</span>
                            </div>
                        </div>
                        <div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                              </div>
                            <input type="text" class="form-control" placeholder="">
                            <div class="input-group-prepend">
                              <span class="input-group-text">0.00</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Sign in</button>
                            <a href="#" class="btn btn-dark float-right">Cancel</a>
                          </div>
                  </form>
            </div>
        </div>
    </div>
</main>
<?php
include __DIR__ ."/../inc/footer.php";
?>