<!DOCTYPE html>
<html lang="en">

<head>
  <title>奇多喵合作社>文章>幼貓照護指南：啟蒙與關愛的開始</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/css.css">
  <style>
 .aside {
      background-image: url(./img/18-2500x1667.jpg);
      opacity: 0.9;

    }

    .main {
      height: 100vh;
    }

    .h3 {
      border-left: 10px solid brown;
      font-weight: bolder;
    }

    h3>p {
      font-size: 25px;
      line-height: 50px;
    }

    .footer{
      margin-top:0px;
    }
  </style>
</head>


<body>

  <header class=" h-11 bg-gray container-fluid">
    <div class="row bg-gray">
      <div class="test col-md-2 ms-3 logo-area">
        <a href="../index.php" data-bs-toggle="modal" data-bs-target="#myModal-2">
          <img src="../img/logo1.png" alt="" width="85%" height="100%"></a>
      </div>
      <div class="test col-md-2 mt-4 pt-3">

        <a href="../index.php">
          <h2 style="font-weight:600;">奇多喵合作社</h2>
        </a>

      </div>
      <div class="col-md-4 test-1 pt-5">
        <div class="page-link ">

          <ul>
            <li class="nav-item me-3">
              <a href="../index.php">回首頁</a>
              <div class="unloading-bar"></div>
              <div class="loading-bar"></div>
            </li>
            <li class="nav-item me-3">
              <a href="../articles.php">回上一頁</a>
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
            <h1 class="offcanvas-title">會員中心<img src="../img/logo1.png" alt="" width="60px"></h1>

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

  <!-- ---- -->
  <div class="container-fluid">
    <div class="row d-flex main">
      <div class="col-5 aside">
<img src="../img/kitten.jpg" alt="" width="100%" style="padding-top:70px ;">
      </div>

      <div class="col-6 section ms-5 ps-5">
        <br>
        <div class="box mt-5">
          <h3 class="h3">&nbsp;幼貓照護指南：啟蒙與關愛的開始</h3>
          <p class="mt-5" id="origin">

            幼貓是生命的初階，需要特別的照顧與愛護。首先，確保提供優質的幼貓糧，滿足牠們快速發展的需求。維持適宜的環境溫度，不僅可以促進食慾，還能避免感冒等健康問題。
<br><br>
建立與幼貓的深厚關係至關重要。透過溫柔的撫摸、遊戲和語言互動，培養出親密無間的連結，有助於幼貓的社交發展和信任建立。提供豐富且安全的玩具，激發牠們的好奇心，促進身心發展。
<br><br>
及早培養健康的飲食習慣，定期檢查口腔和牙齒，確保口腔健康。養成適時醫療檢查的習慣，以便發現潛在問題並及時處理。給予幼貓良好的衛生習慣，定期梳理毛髮，注意除蚤和驅蟲。
<br><br>
最後，給予足夠的關愛和時間，讓牠們在愉快的環境中茁壯成長。這段幼貓時期不僅是生理發展的關鍵時期，更是建立牠們與人類之間深厚情感連結的寶貴時光。透過這份愛與關懷，創造出一個快樂、健康的幼貓成長環境。
          </p>
        </div>


        <div class="col-1"></div>
      </div>
    </div>
  </div>

  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">會員登入</h4>
          <img src="../img/logo1.png" alt="" width="60px">
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
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
                <div class="col-12">
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
        </div>
        <!-- Modal body container end -->


        <!-- Modal footer -->
        <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div> -->

      </div>
    </div>
  </div>
  <div class="modal" id="myModal-2">
    <div class="modal-dialog">

      <img src="../img/logo1.png" alt="" width="120%">

      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

    </div>
  </div>


  <footer class="footer " id="footer">
    <div class="container-fluid">
      <div class="row" style="padding-top:35px">

        <div class="col-md-3 contact col" style="margin-top: 30px;margin-left:100px;">
          <img src="../img/logo1.png" alt="" width="130px">


          <p style="font-size:15px">243 新北市泰山區貴子里致遠新村55之1號</p>
          <a style="font-size:15px" href="mailto: wunshengliao@gmail.com">EMAIL: wunshengliao@gmail.com</a>
          <a style="font-size:15px" href="tel:+886123456789">TEL: +886-1-2345-6789</a>


        </div>
        <div class="font-awesome mt-5 col-md-1 col ps-4">
          <a aria-label="instagram" target="_blank" href="">
            <i class="fa-brands fa-instagram  fa-2xl pt-3 " style="padding-left:25px;font-size: 40px;"></i>
          </a>
          <br>
          <br>
          <a aria-label="facebook" target="_blank" href="">
            <i class="fa-brands fa-facebook  fa-2xl pt-4 " style="padding-left:25px;"></i>
          </a>
          <br>
          <br>
          <a aria-label="line" target="_blank" href="https://www.instagram.com/kingone_design">
            <i class="fa-brands fa-line fa-2xl pt-4 " style="padding-left:25px"></i>
          </a>
          <br>
          <br>
          <a aria-label="Youtube" target="_blank" href="">
            <i class="fa-brands fa-youtube  fa-2xl pt-4 " style="padding-left:23px"></i>
          </a>

        </div>
        <div class=" mt-5 col-md-5 col" style="border-left:5px solid white;margin-left:-5px">
          <ul class="pages">
            <li>
              <a class="footer-header" href="../aboutUs.php#">關於我們</a>
            </li>
            <li>
              <a href="../aboutUs.php#">起源</a>
            </li>
            <li>
              <a href="../aboutUs.php#origin">目標</a>
            </li>
            <li>
              <a href="../aboutUs.php#cheetos">店貓－奇多（Cheetos）</a>
            </li>

          </ul>

          <ul class="pages">
            <li>
              <a class="footer-header" href="../articles.php#">貓咪文章</a>
            </li>
            <li>
              <a class="" href="../articles.php#">幼貓</a>
            </li>
            <li>
              <a class="" href="../articles.php#">成貓</a>
            </li>
            <li>
              <a class="" href="../articles.php#">老貓</a>
            </li>
          </ul>
          <ul class="pages">
            <li>
              <a class="footer-header" href="../index.php#store">購物商城</a>
            </li>
            <li>
              <a class="" href="../index.php#store">食物</a>
            </li>
            <li>
              <a class=""href="../index.php#store">玩具</a>
            </li>
            <li>
              <a class="" href="../index.php#store">生活用品</a>
            </li>
          </ul>
          <ul class="pages">
            <li>
              <a class="footer-header" href=""  data-bs-toggle="offcanvas"
              data-bs-target="#demo">會員專區</a>
            </li>
            <li>
              <a href="">加入會員</a>
            </li>
            <li>
              <a href="">修改密碼</a>
            </li>
            <li>
              <a href="">訂單查詢</a>
            </li>
            <li>

          </ul>



        </div>

        <a class="footer-headerp join-us pt-1 text-center"
          style="color:#ffc94a;font-size: 55px;font-weight:bolder;border:3px solid#ffb71b;width:150px;height:180px;margin-top:60px;margin-left:35px"
          href="">Join Us!</a>

      </div>
  </footer>
  <div class="copyright">
    <p>© WSL Web ALL Reserved.</p>
  </div>
  </div>
</body>

</html>