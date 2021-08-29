<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>สาระน่ารู้ | บริษัท พูล อัพ จำกัด </title>
    <meta property="og:url" content="http://pulletdiaper.com/blog.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="สาระน่ารู้ | SAFECORE บริษัท พูล อัพ จำกัด " key='title' />
    <meta property="og:description" content="สาระน่ารู้ |  SAFECORE บริษัท พูล อัพ จำกัด , บริการรักษาความปลอดภัย ,คลังสินค้า, หมู่บ้าน, อาคารสำนักงาน,  สำนักบ้าน,รปภ. โรงงาน ,รปภ. หมู่บ้าน ,รปภ. สำนักงาน รปภ. คลังสินค้า, รปภ. กรุงเทพ ,รปภ. บางนา, ชลบุรี" />
    <meta property="og:image" content="https://i.imgur.com/NhZje1F.png" />
    <meta name="description" content="SAFECORE บริษัท พูล อัพ จำกัด , บริการรักษาความปลอดภัย ,คลังสินค้า, หมู่บ้าน, อาคารสำนักงาน,  สำนักบ้าน,รปภ. โรงงาน ,รปภ. หมู่บ้าน ,รปภ. สำนักงาน รปภ. คลังสินค้า, รปภ. กรุงเทพ ,รปภ. บางนา, ชลบุรี">
    <meta name="keywords" content="สาระน่ารู้ , SAFECORE บริษัท พูล อัพ จำกัด , บริการรักษาความปลอดภัย คลังสินค้า,บริการรักษาความปลอดภัย หมู่บ้าน,บริการรักษาความปลอดภัย อาคารสำนักงาน, บริการรักษาความปลอดภัย สำนักบ้าน,รปภ. โรงงาน ,รปภ. หมู่บ้าน ,รปภ. สำนักงาน รปภ. คลังสินค้า, รปภ. กรุงเทพ ,รปภ. บางนา,รปภ. ชลบุรี">


    <?php include('includes/head.php'); ?>
</head>

<body>
    <?php include('includes/header.php'); ?>




    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>สาระน่ารู้</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="blog spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-7">
                    <div class="row">


                        <?php
                        include 'includes/conn.php';
                        include 'includes/formate_date.php';
                        $conn = $pdo->open();
                        $i = 0;
                        try {
                            $stmt = $conn->prepare("SELECT * FROM `products` where type ='1' ");
                            $stmt->execute();
                            foreach ($stmt as $row) {
                                $photo = $row['photo'];
                                $name = $row['name'];
                                $slug = $row['id'];
                                $date_create = thai_datetime($row['date_create']);
                                $i += 1;
                                echo "
                                <div class='col-lg-4 col-md-6 col-sm-6'>
                                <div class='blog__item'>
                                    <div class='blog__item__pic'>
                                    <a href='blog-details?p={$slug}'>
                                        <img src='./images/upload/product/{$photo}' alt=''>
                                        </a>
                                    </div>
                                    <div class='blog__item__text'>
                                        <ul>
                                            <li><i class='fa fa-calendar-o'></i> {$date_create}</li>
                                           
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





                        <!-- <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include('includes/footer.php'); ?>

    <?php include('includes/scripts.php'); ?>



</body>

</html>