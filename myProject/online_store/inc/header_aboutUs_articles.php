<header class=" h-11 bg-gray container-fluid">
    <div class="row bg-gray">
      <div class="test col-md-2 ms-3 logo-area">
        <a href="index.php" data-bs-toggle="modal" data-bs-target="#myModal-2">
          <img src="./img/logo1.png" alt="" width="85%" height="100%"></a>
      </div>
      <div class="test col-md-2 mt-4 pt-3">

        <a href="index.php">
          <h2 style="font-weight:600;">奇多喵合作社</h2>
        </a>

      </div>
      <div class="col-md-4 test-1 pt-5">
        <div class="page-link ">

          <ul>
            <li class="nav-item me-3">
              <a href="index.php">回首頁</a>
              <div class="unloading-bar"></div>
              <div class="loading-bar"></div>
            </li>


        </div>

      </div>

      <div class="col-md-1 pt-4 test" style="margin-top:8px;margin-left:37px">
        <a class="shopping-cart-a" target="_blank" href="">
          <i class="fa-sharp fa-solid fa-cart-shopping shopping-cart fa-l" style="  font-size: 2em;"></i>
          <p class="mt-1 shopping-cart-p">Buy it !</p>
        </a>

      </div>


      <div class="test col-md-1 pt-4 " style="margin-top:8px;margin-left:37px">

        <div class="offcanvas offcanvas-end" id="demo">
          <div class="offcanvas-header">
            <h1 class="offcanvas-title">會員中心<img src="./img/logo1.png" alt="" width="60px"></h1>

            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <div class="modal-header">
              <h4 class="modal-title">請先登入</h4>


            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <!-- 插入程式碼要有頭跟END，方便日後維護及辨識 -->
              <!-- Modal body container.. -->
              <div class="container mt-3">


                <form action="/action_page.php">

                  <div class="row">
                    <div class="col-12">
                      <div class="mb-3">
                        <label for="price">帳號:</label>
                        <input type="text" class="form-control" id="acc" placeholder="Enter acc" name="acc">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="mb-3">
                        <label for="unit">密碼:</label>
                        <input type="password" class="form-control" id="pw" placeholder="Enter password" name="pw">
                      </div>
                    </div>
                  </div>

                  <div class="row mt-5">
                    <div class="col-12 mt-1">
                      <div class="mb-3">
                        <div class="d-flex gap-2">
                          <button type="reset" class="btn btn-primary btn-secondary col-6">重置</button>
                          <button type="submit" class="btn btn-primary btn-warning  col-6">送出</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- Modal body container end -->
            </div>
          </div>
        </div>
        <div>

          <i class="fa-regular fa-circle-user me-5" style=" font-size: 2em;" data-bs-toggle="offcanvas"
            data-bs-target="#demo"></i>

          <p class="mt-1 me-5 shopping-cart-p">Menbership</p>
        </div>
        </button>
      </div>
      <div class="col-md-1 test pt-4" style="margin-top:20px;margin-left:37px">
        <form class="d-flex">
          <input class="search-wrapper me-2 myInput " type="text" placeholder="Search">
          <button class="btn btn-primary rounded-pill btn-bg" style="width:130px" type="button">Search</button>
        </form>
      </div>
    </div>
  </header>