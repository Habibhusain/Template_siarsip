<?php
include __DIR__ ."/../inc/header.php";
include __DIR__ ."/../inc/sidebar.php";
?>
<main>
      <div class="container-fluid">
          <h1 class="mt-4">Form Horizontal</h1>
          <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active">Form Horizontal</li>
          </ol>
          <div class="card mb-4">
              <div class="card-body">
                  <form action="" method="post">
                    <!-- INPUT Text-->
                      <div class="form-group row">
                          <label for="inputNama3" class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="" id="inputNama3">
                          </div>
                        </div>

                      <!-- INPUT Email-->
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="" id="inputEmail3" aria-describedby="emailHelp">
                        </div>
                      </div>

                      <!-- INPUT Password-->
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="" id="inputPassword3">
                        </div>
                      </div>
                      
                      <!-- INPUT File-->
                      <div class="form-group row mb-0">
                          <label for="inputGroupFile01" class="col-sm-2 col-form-label">File</label>
                          <div class="col-sm-10">
                              <div class="input-group mb-3">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                  </div>
                                </div>
                          </div>
                        </div>

                        <!-- INPUT Checkbox-->
                        <div class="form-group row mb-0">
                          <div class="col-sm-10 offset-sm-2">
                            <div class="form-group form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Chcekbox 1
                                </label>
                              </div>
                              <div class="form-group form-check mb-0">
                                <input class="form-check-input" name="" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                  Checkbox 2
                                </label>
                              </div>
                              <div class="form-group form-check">
                                <input class="form-check-input" name="" type="checkbox" value="" id="defaultCheck3" disabled>
                                <label class="form-check-label" for="defaultCheck3">
                                  Checkbox 3
                                </label>
                              </div>
                          </div>
                        </div>
                        
                      <!-- INPUT Radio-->
                      <div class="form-group row mb-0">
                        <div class="col-sm-10 offset-sm-2">
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
                        </div>
                      </div>
                      
                      <!-- INPUT Textarea-->
                      <div class="form-group row">
                          <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">TextArea</label>
                              <div class="col-sm-10">
                                  <textarea class="form-control" name="" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                        </div>

                      <!-- INPUT Select-->
                      <div class="form-group row">
                          <label for="inputFile3" class="col-sm-2 col-form-label">Select</label>
                          <div class="col-sm-10">
                              <select class="custom-select" name="" id="inputGroupSelect01">
                                  <option selected>Choose...</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                              </select>
                          </div>
                      </div>

                      <!-- INPUT Select Multiple-->
                      <div class="form-group row">
                          <label for="inputFile3" class="col-sm-2 col-form-label">Select Multiple</label>
                          <div class="col-sm-10">
                              <select multiple="" name="" class="custom-select">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                                </select>
                          </div>
                        </div>

                        <!-- INPUT Input Addons-->
                        <div class="form-group row">
                          <label for="inputFile3" class="col-sm-2 col-form-label">Input Addons</label>
                          <div class="col-sm-10">
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                  </div>
                                  <input type="text" class="form-control" name="" placeholder="Username">
                              </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="inputFile3" class="col-sm-2 col-form-label">Input Addons</label>
                          <div class="col-sm-10">
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                  </div>
                                  <input type="text" class="form-control" name="">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">0.00</span>
                                    </div>
                              </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="inputFile3" class="col-sm-2 col-form-label">Input Addons</label>
                          <div class="col-sm-10">
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                  </div>
                                  <input type="email" class="form-control" name="" placeholder="Email">
                                </div>
                          </div>
                        </div>
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <div class="card-footer">
                              <button type="submit" class="btn btn-info">Sign in</button>
                              <a href="#" class="btn btn-dark float-right">Cancel</a>
                            </div>
                        </div>
                      </div>
                    </form>
              </div>
          </div>
      </div>
</main>
<?php
include __DIR__ ."/../inc/footer.php";
?>