<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>พูลลิท | บริษัท พูล อัพ จำกัด </title>
    <meta property="og:url" content="http://pulletdiaper.com/index.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="พูลลิท | SAFECORE บริษัท พูล อัพ จำกัด " key='title' />
    <meta property="og:description" content="พูลลิท |  SAFECORE บริษัท พูล อัพ จำกัด , บริการรักษาความปลอดภัย ,คลังสินค้า, หมู่บ้าน, อาคารสำนักงาน,  สำนักบ้าน,รปภ. โรงงาน ,รปภ. หมู่บ้าน ,รปภ. สำนักงาน รปภ. คลังสินค้า, รปภ. กรุงเทพ ,รปภ. บางนา, ชลบุรี" />
    <meta property="og:image" content="https://i.imgur.com/NhZje1F.png" />
    <meta name="description" content="SAFECORE บริษัท พูล อัพ จำกัด , บริการรักษาความปลอดภัย ,คลังสินค้า, หมู่บ้าน, อาคารสำนักงาน,  สำนักบ้าน,รปภ. โรงงาน ,รปภ. หมู่บ้าน ,รปภ. สำนักงาน รปภ. คลังสินค้า, รปภ. กรุงเทพ ,รปภ. บางนา, ชลบุรี">
    <meta name="keywords" content="พูลลิท , SAFECORE บริษัท พูล อัพ จำกัด , บริการรักษาความปลอดภัย คลังสินค้า,บริการรักษาความปลอดภัย หมู่บ้าน,บริการรักษาความปลอดภัย อาคารสำนักงาน, บริการรักษาความปลอดภัย สำนักบ้าน,รปภ. โรงงาน ,รปภ. หมู่บ้าน ,รปภ. สำนักงาน รปภ. คลังสินค้า, รปภ. กรุงเทพ ,รปภ. บางนา,รปภ. ชลบุรี">
      


    <?php include('includes/head.php'); ?>
</head>

<body>
    <?php include('includes/header.php'); ?>

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bc-img-slider">
            
                    </div>
                </div>
            </div>
            <div class="row mt-5">


                <div class="col-lg-3 col-6 col-sm-6 text-center ">
                    <div class="marketing-block">
                      
                        <p class="title" > <img src="./img/index/ใช้วัตถุดิบคุณภาพสูงในการผลิต.png" width="30" alt="" class=""> &nbsp; <b>ใช้วัตถุดิบคุณภาพสูงในการผลิต</b></p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-sm-6 text-center ">
                    <div class="marketing-block">
                       
                        <p class="title"><img src="./img/index/เป็นมิตรต่อผิว.png" width="30" alt="" class=""> &nbsp;<b>เป็นมิตรต่อผิว</b></p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-sm-6 text-center ">
                    <div class="marketing-block">
                        
                        <p class="title"><img src="./img/index/ส่งตรงถึงหน้าบ้าน.png" width="30" alt="" class=""> &nbsp;<b>ส่งตรงถึงหน้าบ้าน</b></p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-sm-6 text-center ">
                    <div class="marketing-block">
                     
                        <p class="title"><img src="./img/index/ราคาสบายกระเป๋า.png" width="30" alt="" class=""> &nbsp;<b>ราคาสบายกระเป๋า</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>สินค้าของเรา</h2>
                    </div>

                </div>
            </div>
            <div class="row featured__filter">


                <?php
                include 'includes/conn.php';
                include 'includes/formate_date.php';
                $conn = $pdo->open();
                $i = 0;
                try {
                    $stmt = $conn->prepare("SELECT * FROM `products` where type ='0' ORDER BY id DESC LIMIT 4  ");
                    $stmt->execute();
                    foreach ($stmt as $row) {
                        $link_shop_2 = $row['link_shop'];
                        $photo_2 = $row['photo'];
                        $name_2 = $row['name'];
                        $slug_id = $row['id'];

                     

                        echo "
                        <div class='col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat'>
                        <div class='featured__item'>
                        <a  href='products-details?p={$slug_id}'>
                            <div class='featured__item__pic set-bg' data-setbg='./images/upload/product/{$photo_2}'>
                                <ul class='featured__item__pic__hover'>
                                </ul>
                            </div>
                            </a>
                            <div class='featured__item__text'>
                            <h5><a  href='products-details?p={$slug_id}'>{$name_2}</a></h5>
                           
                            </div>
                        </div>
                    </div>

                    ";
                        // $i++;
                    }
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

                $pdo->close();
                ?>


            </div>
        </div>
    </section>


    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>สั่งซื้อสินค้า</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item lazada set-bg" data-setbg="img/shop/index/lazada.png">
                            <h5><a  target="_blank" href="https://www.lazada.co.th/shop/pullet-diaper/?spm=a2o4m.pdp_revamp.seller.1.77894c11JqWK2D&itemId=932828258&channelSource=pdp">Lazada</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item shopee set-bg" data-setbg="img/shop/index/shopee.png">
                            <h5><a target="_blank" href="https://shopee.co.th/pullet_official_shop?categoryId=21732&itemId=7853754405">Shopee</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item line set-bg" data-setbg="img/shop/index/line.png">
                            <h5><a target="_blank" href="https://line.me/R/ti/p/%40390rmzvo">Line</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item facebook set-bg" data-setbg="img/shop/index/facebook.png">
                            <h5><a target="_blank" href="https://www.facebook.com/pulletdiaper">Facebook</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>สาระน่ารู้</h2>
                    </div>
                </div>
            </div>
            <div class="row">


                <?php

                $conn = $pdo->open();
                $i = 0;
                try {
                    $stmt = $conn->prepare("SELECT * FROM `products` where type ='1' limit 3 ");
                    $stmt->execute();
                    foreach ($stmt as $row) {
                        $photo = $row['photo'];
                        $name = $row['name'];
                        $slug = $row['id'];
                        $date_create = thai_datetime($row['date_create']);
                        $i += 1;
                        echo "
                        <div class='col-lg-3 col-md-4 col-sm-6'>
                        <div class='blog__item'>
                            <div class='blog__item__pic'>
                            <img src='./images/upload/product/{$photo}' alt=''>
                            </div>
                            <div class='blog__item__text'>
                                <ul>
                                <li><i class='fa fa-calendar-o'></i>{$date_create}</li>
                                    
                                </ul>
                                <h5><a href='blog-details?p={$slug}'>{$name}</a></h5>
                            </div>
                        </div>
                    </div>

                ";
                        // $i++;
                    }
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

                $pdo->close();
                ?>




            </div>
        </div>
    </section>





    <?php include('includes/footer.php'); ?>

    <?php include('includes/scripts.php'); ?>



</body>

</html>