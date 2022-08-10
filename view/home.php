<!-- Start home  -->
<section>
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class=""></li>
      <li data-target="#demo" data-slide-to="1" class="active"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item">
        <img src="../view/img/banner_gamer_1.png" alt="Los Angeles" width="1100" height="500">
      </div>
      <div class="carousel-item active">
        <img src="../view/img/banner_gamer_2.png" alt="Chicago" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="../view/img/banner_gamer_3.png" alt="Los Angeles" width="1100" height="500">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <div class="container py-3">
    <div class="row">
      <div class="row">
        <h2>SẢN PHẨM HOT & KHUYẾN MÃI </h2>
      </div>
      <div class="row mb-5 mt-2">
        <div class="col-3">
          <div class="card">
            <img class="card-img-top" src="https://www.playzone.vn/image/cache/catalog/san%20pham/FL-Esports/ban%20phim/CMK87%20SAM/2583348_852882-400x400.jpg" alt="Card image cap">
            <div class="card-body">
              <a href="index.php?page=chitiet_sp&id_product=39">
                <p class="card-text">Bàn phím cơ FL-Esports CMK87 SAM Mashmallow
                </p>
              </a>
              <p class="card-gia">400.000đ</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img class="card-img-top" src="https://www.playzone.vn/image/cache/catalog/san%20pham/Logitech/Speakers/g560/Logitech-G560-PC-Gaming-Speaker-6-400x400.jpg" alt="Card image cap">
            <div class="card-body">
              <a href="index.php?page=chitiet_sp&id_product=38">
                <p class="card-text">Loa LOGITECH G560 LIGHTSYNC RGB
                </p>
              </a>
              <p class="card-gia">400.000đ</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img class="card-img-top" src="https://www.playzone.vn/image/cache/catalog/san%20pham/BenQ/XL2546K/xl2546k-4-400x400.png" alt="Card image cap">
            <div class="card-body">
              <a href="index.php?page=chitiet_sp&id_product=5">
                <p class="card-text">Màn hình BenQ ZOWIE XL2546K 240Hz DyAc+™ 24.5 inch
                </p>
              </a>
              <!-- <p class="card-text">Kem Nền Đa Năng INK LASTING FOUNDATION SLIM FIT SPF30 PA++ 30ML
                CICA
              </p> -->
              <p class="card-gia">400.000đ</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img class="card-img-top" src="https://www.playzone.vn/image/cache/catalog/san%20pham/HyperX/cloud-ii/cloud2red/83286983_2607823019314195_6735177034219126784_n-400x400.jpg" alt="Card image cap">
            <div class="card-body">
              <a href="index.php?page=chitiet_sp&id_product=42">
                <p class="card-text">Tai nghe HyperX Cloud II Red
                  EX CICA
                </p>
              </a>
              <p class="card-gia">400.000đ</p>
            </div>
          </div>
        </div>
        <!-- <div class="col5">
          <div class="card">
            <img class="card-img-top" src="../view/img/hinh5.webp" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Phấn Nước Lâu Trôi INK LASTING CUSHION SPF 30 PA++15g FOUNDATION
                SLIM
              </p>
              <p class="card-gia">400.000đ</p>
            </div>
          </div>
        </div> -->
      </div>
      <nav class="row nav">
        <a class="nav-link active title py-2 " href="index.php?page=collection&duong-da">BÀN/GHẾ GAMING</a>
        <?php
        // $tungdanhmuccon biến để lưu từng phần tử trong mảng
        // dsdanhmuc = [tungdanhmuccon,tungdanhmuccon,tungdanhmuccon]
        // array = [object,object,object] => array[0] sẽ in duoc object 
        // object = {doituong1,doituong2,doituong3} => object['doituong1']

        //1 kết quả về của sql sẽ hiển thị dưới
        //array = [
        //     {1, "Các sản phẩm"} ,
        //     {2, "Nước cân bằng"} ,
        //     {3, "Tinh chất"}
        // ]
        foreach ($dsdanhmuc as $tungdanhmuccon) {
          $tendanhmuc = $tungdanhmuccon['name'];
          // $slugdm = to_slug($tendanhmuc);
          // $link = "index.php?page=danhmuc&idcatalog=".$slugdm;
          $link = "index.php?page=collection&id_danhmuc=" . $tungdanhmuccon['id_type'];
          echo '<a class="nav-link" href="' . $link . '">' . $tendanhmuc . '</a>';
        }
        ?>
      </nav>
      <div class="row">
        <div class="col-2"></div>
        <div class="col-12">
          <div class="box1 bia">
            <img src="https://mypc.vn/wp-content/uploads/2021/09/banner-2.jpg" alt="">
          </div>
          <?php
          foreach ($danhsach_catagory as $sanpham_theo_cata) {
            $id = $sanpham_theo_cata['id_product'];
            $name = $sanpham_theo_cata['name'];
            $img = $sanpham_theo_cata['img'];
            $price = $sanpham_theo_cata['price'];
            $id_catagory = $sanpham_theo_cata['id_catagory'];
            if ($id_catagory == 1) {
              echo '<div class="col5 mar-2 mt-5">
                                    <div class="card">
                                        <img class="card-img-top" src="../view/img/' . $img . '" alt="Card image cap">
                                        <div class="card-body">
                                            <a href="index.php?page=chitiet_sp&id_product=' . $id . '">
                                                <p class="card-text">' . $name . '</p>
                                            </a>
                                            <p class="card-gia">' . $price . 'đ</p>
                                        </div>
                                    </div>
                                </div>';
            }
          }
          ?>
        </div>
        <nav class="row nav mt-5">
          <a class="nav-link active title py-2 " href="index.php?page=collection&lam-sach">MÀN HÌNH GAMING</a>
          <?php
          foreach ($dsdanhmuc as $tungdanhmuccon) {
            $tendanhmuc = $tungdanhmuccon['name'];
            // $slugdm = to_slug($tendanhmuc);
            // $link = "index.php?page=danhmuc&idcatalog=".$slugdm;
            $link = "index.php?page=collection&id_danhmuc=" . $tungdanhmuccon['id_type'];
            echo '<a class="nav-link" href="' . $link . '">' . $tendanhmuc . '</a>';
          }
          ?>
          <!-- <a class="nav-link" href="#">Các sản phẩm</a>
          <a class="nav-link" href="#">Sữa rửa mặt</a>
          <a class="nav-link" href="#">Dầu tẩy trang</a>
          <a class="nav-link" href="#">Kem tẩy trang</a>
          <a class="nav-link" href="#">Mặt nạ kì</a> -->
        </nav>
        <div class="row">
          <div class="col-2"></div>
          <div class="col-12">
            <div class="box1 bia">
              <img src="https://tandoanh.vn/wp-content/uploads/2021/01/Banner-Post-Mua-Chung-LCD-Sale-Off.jpg" alt="">
            </div>
            <?php
            foreach ($danhsach_catagory as $sanpham_theo_cata) {
              $id = $sanpham_theo_cata['id_product'];
              $name = $sanpham_theo_cata['name'];
              $img = $sanpham_theo_cata['img'];
              $price = $sanpham_theo_cata['price'];
              $id_catagory = $sanpham_theo_cata['id_catagory'];
              if ($id_catagory == 2) {
                echo '<div class="col5 mar-2 mt-5">
                            <div class="card">
                                <img class="card-img-top" src="../view/img/' . $img . '" alt="Card image cap">
                                <div class="card-body">
                                    <a href="index.php?page=chitiet_sp&id_product=' . $id . '">
                                        <p class="card-text">' . $name . '</p>
                                    </a>
                                    <p class="card-gia">' . $price . 'đ</p>
                                </div>
                            </div>
                        </div>';
              }
            }
            ?>
          </div>
        </div>
        <nav class="row nav mt-5">
          <a class="nav-link active title py-2 " href="index.php?page=collection&id_catagory">LINH KIỆN</a>
          <?php
          foreach ($dsdanhmuc as $tungdanhmuccon) {
            $tendanhmuc = $tungdanhmuccon['name'];
            // $slugdm = to_slug($tendanhmuc);
            // $link = "index.php?page=danhmuc&idcatalog=".$slugdm;
            $link = "index.php?page=collection&id_danhmuc=" . $tungdanhmuccon['id_type'];
            echo '<a class="nav-link" href="' . $link . '">' . $tendanhmuc . '</a>';
          }
          ?>
        </nav>
        <div class="row">
          <div class="col-2"></div>
          <div class="col-12">
            <div class="box1 bia">
              <img src="https://phatnang.com/thumbs/958x384x1/upload/photo/slider-4501.jpg" alt="">
            </div>
            <?php
            foreach ($danhsach_catagory as $sanpham_theo_cata) {
              $id = $sanpham_theo_cata['id_product'];
              $name = $sanpham_theo_cata['name'];
              $img = $sanpham_theo_cata['img'];
              $price = $sanpham_theo_cata['price'];
              $id_catagory = $sanpham_theo_cata['id_catagory'];
              if ($id_catagory == 3) {
                echo '<div class="col5 mar-2 mt-5">
                            <div class="card">
                                <img class="card-img-top" src="../view/img/' . $img . '" alt="Card image cap">
                                <div class="card-body">
                                    <a href="index.php?page=chitiet_sp&id_product=' . $id . '">
                                        <p class="card-text">' . $name . '</p>
                                    </a>
                                    <p class="card-gia">' . $price . 'đ</p>
                                </div>
                            </div>
                        </div>';
              }
            }
            ?>
          </div>
          <div class="row mt-4">
            <h2>VÌ SAO CHỌN CHÚNG TÔI?</h2>
          </div>
          <div class="row custom info1 no_margin">
            <div class="col-sm-6 col-md-3">
              <div class="single dark_color light_bg_color_hover "> <i class="icon-heart"></i>
                <h5>Nổi tiếng NHIỆT TÌNH</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="single dark_color light_bg_color_hover "> <i class="icon-user"></i>
                <h5>chuyên gia hàng đầu</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="single dark_color light_bg_color_hover "> <i class="icon-diamond"></i>
                <h5>Uy tín Tận cùng</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="single dark_color light_bg_color_hover "> <i class="icon-money"></i>
                <h5>Giá tốt hơn thị trường</h5>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <h2>KIẾN THỨC</h2>
          </div>
          <div class="row">
            <div class="col-3">
              <div class="card goclamdep">
                <img class="card-img-top" src="https://www.playzone.vn/image/cache/catalog/bai-viet/akko/1-800x800.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Tìm hiểu và phân loại các loại bàn phím cơ AKKO hiện nay? Hướng dẫn chọn mua bàn phím cơ AKKO.</p>
                  <a href="#" class="xemthem">Xem thêm</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card goclamdep">
                <img class="card-img-top" src="https://www.playzone.vn/image/cache/catalog/bai-viet/akko-gear/su-dung/macro/1-1-800x800.jpeg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Hướng dẫn sử dụng bàn phím Gaming Akko : Macro. <br> Có những lợi ích gì?</p>
                  <a href="#" class="xemthem">Xem thêm</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card goclamdep">
                <img class="card-img-top" src="https://www.playzone.vn/image/cache/catalog/bai-viet/akko-gear/11-800x800.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Tìm hiểu và phân loại các loại bàn phím cơ Filco hiện nay? Hướng dẫn chọn mua bàn phím cơ Filco</p>
                  <a href="#" class="xemthem">Xem thêm</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card goclamdep">
                <img class="card-img-top" src="https://www.playzone.vn/image/cache/catalog/BANNER-MOI-2019/BAI-VIET/thang-1/1-800x800.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Tìm hiểu và phân loại các loại bàn phím cơ Filco hiện nay? Hướng dẫn chọn mua bàn phím cơ Filco</p>
                  <a href="#" class="xemthem">Xem thêm</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>