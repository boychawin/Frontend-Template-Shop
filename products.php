<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>สินค้า | บริษัท พูล อัพ จำกัด </title>
    <meta property="og:url" content="http://pulletdiaper.com/products.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="สินค้า | SAFECORE บริษัท พูล อัพ จำกัด " key='title' />
    <meta property="og:description" content="สินค้า |  SAFECORE บริษัท พูล อัพ จำกัด , บริการรักษาความปลอดภัย ,คลังสินค้า, หมู่บ้าน, อาคารสำนักงาน,  สำนักบ้าน,รปภ. โรงงาน ,รปภ. หมู่บ้าน ,รปภ. สำนักงาน รปภ. คลังสินค้า, รปภ. กรุงเทพ ,รปภ. บางนา, ชลบุรี" />
    <meta property="og:image" content="https://i.imgur.com/NhZje1F.png" />
    <meta name="description" content="SAFECORE บริษัท พูล อัพ จำกัด , บริการรักษาความปลอดภัย ,คลังสินค้า, หมู่บ้าน, อาคารสำนักงาน,  สำนักบ้าน,รปภ. โรงงาน ,รปภ. หมู่บ้าน ,รปภ. สำนักงาน รปภ. คลังสินค้า, รปภ. กรุงเทพ ,รปภ. บางนา, ชลบุรี">
    <meta name="keywords" content="สินค้า , SAFECORE บริษัท พูล อัพ จำกัด , บริการรักษาความปลอดภัย คลังสินค้า,บริการรักษาความปลอดภัย หมู่บ้าน,บริการรักษาความปลอดภัย อาคารสำนักงาน, บริการรักษาความปลอดภัย สำนักบ้าน,รปภ. โรงงาน ,รปภ. หมู่บ้าน ,รปภ. สำนักงาน รปภ. คลังสินค้า, รปภ. กรุงเทพ ,รปภ. บางนา,รปภ. ชลบุรี">


    <?php include('includes/head.php'); ?>
</head>

<body>
    <?php include('includes/header.php'); ?>



    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>สินค้าทั้งหมด</h2>


                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="product spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class='row'>
                        <?php
                        include 'includes/conn.php';
                        include 'includes/formate_date.php';
                        $conn = $pdo->open();
                        $i = 0;
                        try {
                            $stmt = $conn->prepare("SELECT * FROM `products` where type ='0' ");
                            $stmt->execute();
                            foreach ($stmt as $row) {
                                $photo = $row['photo'];
                                $name = $row['name'];
                                $slug = $row['slug'];
                                $id = $row['id'];

                                $date_create = thai_datetime($row['date_create']);

                                $link_shop = $row['link_shop'];
                                $i += 1;
                                echo "
                         

                          
                            <div class='col-lg-3 col-md-6 col-sm-6'>
                                <div class='product__item'>
                                <a  href='products-details?p={$id}'>
                                    <div class='product__item__pic set-bg' data-setbg='./images/upload/product/$photo'>
                                        
                                    </div>
                                    </a>
                                    <div class='featured__item__text'>
                            <h5><a  href='products-details?p={$id}'>{$name}</a></h5>
                           
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
            </div>
        </div>
    </section>


    <?php include('includes/footer.php'); ?>

    <?php include('includes/scripts.php'); ?>

</body>

</html>