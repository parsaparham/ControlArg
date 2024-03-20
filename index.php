<?php
include("lib/classFront.php");
include ("dashboard/lib/connect.php");

   $header=new header();
   $header->put_header();

$object=new class_parent();
?>

        <!-- Start Main Banner Area -->
        <div class="home-slides owl-carousel owl-theme">
            <?php
            $sql="select * from slideShows where active=1 order by priority asc";
            $res=$object->select($sql);
            foreach ($res as $row){

                $id=$row['id'];
                $path = 'uploads/slideShows/'.$id.".*";
                $filenames = glob($path);
                $file=$filenames[0];
                $fileType= pathinfo($file, PATHINFO_EXTENSION);
                $image="uploads/slideShows/".$id.".".$fileType;

            ?>
            <div class="main-banner-item">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="main-banner-content">
                                        <div class="circle"></div>
                                        <!--<span>تا 20% تخفیف</span>-->
                                        <h2><?php echo $row['name']  ?></h2>

                                        <div class="banner-btn">
                                            <a href="#" class="default-btn">اکنون خرید</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="banner-image">
                                        <div class="circle"></div>
                                        <img src="<?php echo $image?>" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-banner-shape">
                    <div class="shape1">
                        <img src="assets/img/main-banner/shape.png" alt="image">
                    </div>
                    <div class="shape2">
                        <img src="assets/img/main-banner/shape2.png" alt="image">
                    </div>
                </div>
            </div>

                <?php
            }
                ?>

        </div>
        <!-- End Main Banner Area -->

        <!-- Start Collections Area -->
        <section class="collections-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <p>مجموعه ها</p>
                    <h2>جواهرات پرطرفدار</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="collections-item">
                            <div class="image">
                                <a href="shop.html">
                                    <img src="assets/img/collections/collections1.jpg" alt="image">
                                </a>

                                <div class="shop-btn">
                                    <a href="shop.html" class="default-btn">افزودن سبد</a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="shop.html">گردنبند</a>
                                </h3>
                                <span>5500 تومان</span>
                                <ul class="star-list">
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="collections-item">
                            <div class="image">
                                <a href="shop.html">
                                    <img src="assets/img/collections/collections2.jpg" alt="image">
                                </a>

                                <div class="shop-btn">
                                    <a href="shop.html" class="default-btn">افزودن سبد</a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="shop.html">حلقه الماس</a>
                                </h3>
                                <span>2500 تومان</span>
                                <ul class="star-list">
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="collections-item">
                            <div class="image">
                                <a href="shop.html">
                                    <img src="assets/img/collections/collections3.jpg" alt="image">
                                </a>

                                <div class="shop-btn">
                                    <a href="shop.html" class="default-btn">افزودن سبد</a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="shop.html">گوشواره</a>
                                </h3>
                                <span>7500 تومان</span>
                                <ul class="star-list">
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Collections Area -->

        <!-- Start Overview Area -->
        <section class="overview-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="overview-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content">
                                        <span>انتخاب کارکنان برتر</span>
                                        <h3>حلقه های فروشگاه</h3>
                                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. استاندارد صنعت بوده است.</p>
        
                                        <div class="overview-btn">
                                            <a href="#" class="default-btn">اکنون خرید</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="overview-image">
                                        <img src="assets/img/overview/overview1.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="overview-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content">
                                        <span>انتخاب کارکنان برتر</span>
                                        <h3>خرید جواهرات</h3>
                                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. استاندارد صنعت بوده است.</p>
        
                                        <div class="overview-btn">
                                            <a href="#" class="default-btn">اکنون خرید</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="overview-image">
                                        <img src="assets/img/overview/overview2.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Overview Area -->

        <!-- Start Discover Area -->
        <section class="discover-area pb-100">
            <div class="container">
                <div class="section-title">
                    <h2>محصولات فروشگاه ژنوز</h2>
                </div>

                <div class="discover-slider owl-carousel owl-theme">
                    <div class="discover-item">
                        <div class="icon">
                            <i class="flaticon-like"></i>
                        </div>
                        <h3>رضایت 100%</h3>
                        <p>تنوع محصولات</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon">
                            <i class="flaticon-shopping-bag"></i>
                        </div>
                        <h3>در 60 کشور خرید کنید</h3>
                        <p>تنوع محصولات</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon">
                            <i class="flaticon-delivery-truck"></i>
                        </div>
                        <h3>ارسال فوری</h3>
                        <p>تنوع محصولات</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon">
                            <i class="flaticon-credit-card"></i>
                        </div>
                        <h3>بازگشت پول</h3>
                        <p>تنوع محصولات</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon">
                            <i class="flaticon-customer-service"></i>
                        </div>
                        <h3>پشتیبانی 24/7</h3>
                        <p>تنوع محصولات</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Discover Area -->

        <!-- Start Special Products Area -->
        <section class="special-products-area pb-70">
            <div class="container">
                <div class="section-title">
                    <p>محصولات ویژه</p>
                    <h2>محصولات ویژه ما</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="special-products-item">
                            <div class="image">
                                <a href="products-details.html">
                                    <img src="assets/img/special-products/ring1.jpg" alt="image">
                                </a>

                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-transfer"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class="flaticon-loupe"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="percentage">
                                    <span>10%</span>
                                </div>
                            </div>

                            <div class="content">
                                <h3>
                                    <a href="products-details.html">گوشواره مروارید</a>
                                </h3>
                                <span>2500 تومان</span>
                                <ul class="star-list">
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="special-products-item">
                            <div class="image">
                                <a href="products-details.html">
                                    <img src="assets/img/special-products/ring2.jpg" alt="image">
                                </a>

                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-transfer"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class="flaticon-loupe"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="percentage">
                                    <span>20%</span>
                                </div>
                            </div>

                            <div class="content">
                                <h3>
                                    <a href="products-details.html">حلقه الماس</a>
                                </h3>
                                <span>5500 تومان</span>
                                <ul class="star-list">
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="special-products-item">
                            <div class="image">
                                <a href="products-details.html">
                                    <img src="assets/img/special-products/ring3.jpg" alt="image">
                                </a>

                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-transfer"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class="flaticon-loupe"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="percentage">
                                    <span>35%</span>
                                </div>
                            </div>

                            <div class="content">
                                <h3>
                                    <a href="products-details.html">حلقه طلا</a>
                                </h3>
                                <span>4500 تومان</span>
                                <ul class="star-list">
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="special-products-item">
                            <div class="image">
                                <a href="products-details.html">
                                    <img src="assets/img/special-products/ring4.jpg" alt="image">
                                </a>

                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-transfer"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class="flaticon-loupe"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="percentage">
                                    <span>40%</span>
                                </div>
                            </div>

                            <div class="content">
                                <h3>
                                    <a href="products-details.html">گردنبند طلا</a>
                                </h3>
                                <span>1700 تومان</span>
                                <ul class="star-list">
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="special-products-item">
                            <div class="image">
                                <a href="products-details.html">
                                    <img src="assets/img/special-products/ring5.jpg" alt="image">
                                </a>

                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-transfer"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class="flaticon-loupe"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="percentage">
                                    <span>60%</span>
                                </div>
                            </div>

                            <div class="content">
                                <h3>
                                    <a href="products-details.html">حلقه مروارید</a>
                                </h3>
                                <span>3100 تومان</span>
                                <ul class="star-list">
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="special-products-item">
                            <div class="image">
                                <a href="products-details.html">
                                    <img src="assets/img/special-products/ring6.jpg" alt="image">
                                </a>

                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-transfer"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class="flaticon-loupe"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="percentage">
                                    <span>70%</span>
                                </div>
                            </div>

                            <div class="content">
                                <h3>
                                    <a href="products-details.html">حلقه زمرد</a>
                                </h3>
                                <span>1500 تومان</span>
                                <ul class="star-list">
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="special-products-item">
                            <div class="image">
                                <a href="products-details.html">
                                    <img src="assets/img/special-products/ring7.jpg" alt="image">
                                </a>

                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-transfer"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class="flaticon-loupe"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="percentage">
                                    <span>80%</span>
                                </div>
                            </div>

                            <div class="content">
                                <h3>
                                    <a href="products-details.html">حلقه یاقوت</a>
                                </h3>
                                <span>8500 تومان</span>
                                <ul class="star-list">
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="special-products-item">
                            <div class="image">
                                <a href="products-details.html">
                                    <img src="assets/img/special-products/ring8.jpg" alt="image">
                                </a>

                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-transfer"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class="flaticon-loupe"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="percentage">
                                    <span>30%</span>
                                </div>
                            </div>

                            <div class="content">
                                <h3>
                                    <a href="products-details.html">حلقه پازل</a>
                                </h3>
                                <span>3200 تومان</span>
                                <ul class="star-list">
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="special-products-item">
                            <div class="image">
                                <a href="products-details.html">
                                    <img src="assets/img/special-products/ring9.jpg" alt="image">
                                </a>

                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-transfer"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class="flaticon-loupe"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="percentage">
                                    <span>55%</span>
                                </div>
                            </div>

                            <div class="content">
                                <h3>
                                    <a href="products-details.html">انگشتر زمرد</a>
                                </h3>
                                <span>1200 تومان</span>
                                <ul class="star-list">
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Special Products Area -->

        <!-- Start Coming Soon Area -->
        <section class="coming-soon-area ptb-100">
            <div class="container">
                <div class="coming-soon-title">
                    <span>پیشنهاد محدود!</span>
                    <h3>فروش هفتگی با 60% تخفیف</h3>
                </div>

                <div class="coming-soon-content">
                    <div id="timer">
                        <div id="days"></div>
                        <div id="hours"></div>
                        <div id="minutes"></div>
                        <div id="seconds"></div>
                    </div>
                </div>
            </div>
            <div class="coming-soon-shape">
                <img src="assets/img/coming-soon-shape.png" alt="image">
            </div>
        </section>
        <!-- End Coming Soon Area -->

        <!-- Start Blog Area -->
        <section class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <p>خبرها</p>
                    <h2>آخرین اخبار وبلاگ</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="image">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog1.jpg" alt="image">
                                </a>
                                <div class="date">
                                    <span>21 دی 1401</span>
                                </div>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="blog-details.html">
                                        مجموعه بهار و تابستان و زمستان طراحی گرایش های جدید
                                    </a>
                                </h3>
                                <a href="blog-details.html" class="blog-btn">بیشتر بخوانید +</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="image">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog2.jpg" alt="image">
                                </a>
                                <div class="date">
                                    <span>21 دی 1401</span>
                                </div>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="blog-details.html">
                                        مجموعه بهار و تابستان و زمستان طراحی گرایش های جدید
                                    </a>
                                </h3>
                                <a href="blog-details.html" class="blog-btn">بیشتر بخوانید +</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="blog-item">
                            <div class="image">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog3.jpg" alt="image">
                                </a>
                                <div class="date">
                                    <span>21 دی 1401</span>
                                </div>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="blog-details.html">
                                        مجموعه بهار و تابستان و زمستان طراحی گرایش های جدید
                                    </a>
                                </h3>
                                <a href="blog-details.html" class="blog-btn">بیشتر بخوانید +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

        <!-- Start Partner Area -->
        <section class="partner-area pb-100">
            <div class="container">
                <div class="partner-slider owl-carousel owl-theme">
                    <div class="partner-item">
                        <a href="#">
                            <img src="assets/img/partner/partner1.png" alt="image">
                        </a>
                    </div>

                    <div class="partner-item">
                        <a href="#">
                            <img src="assets/img/partner/partner2.png" alt="image">
                        </a>
                    </div>

                    <div class="partner-item">
                        <a href="#">
                            <img src="assets/img/partner/partner3.png" alt="image">
                        </a>
                    </div>

                    <div class="partner-item">
                        <a href="#">
                            <img src="assets/img/partner/partner4.png" alt="image">
                        </a>
                    </div>

                    <div class="partner-item">
                        <a href="#">
                            <img src="assets/img/partner/partner5.png" alt="image">
                        </a>
                    </div>

                    <div class="partner-item">
                        <a href="#">
                            <img src="assets/img/partner/partner6.png" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Partner Area -->

        <!-- Start Instagram Area -->
        <section class="instagram-area">
            <div class="container-fluid">
                <div class="instagram-slides owl-carousel owl-theme">
                    <div class="instagram-post">
                        <img src="assets/img/instagram/image1.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="#" target="_blank" class="link-btn"></a>
                    </div>

                    <div class="instagram-post">
                        <img src="assets/img/instagram/image2.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="#" target="_blank" class="link-btn"></a>
                    </div>

                    <div class="instagram-post">
                        <img src="assets/img/instagram/image3.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="#" target="_blank" class="link-btn"></a>
                    </div>

                    <div class="instagram-post">
                        <img src="assets/img/instagram/image4.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="#" target="_blank" class="link-btn"></a>
                    </div>

                    <div class="instagram-post">
                        <img src="assets/img/instagram/image5.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="#" target="_blank" class="link-btn"></a>
                    </div>

                    <div class="instagram-post">
                        <img src="assets/img/instagram/image6.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="#" target="_blank" class="link-btn"></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Instagram Area -->
<?php
$header=new footer();
$header->put_footer();
?>