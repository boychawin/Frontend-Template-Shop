<?php

$id = $_GET['p'];
// exit;
include 'includes/conn.php';
include 'includes/formate_date.php';
$conn = $pdo->open();
$i = 0;
try {
    $stmt = $conn->prepare("SELECT * FROM `products` where id = '" . $_GET['p'] . "' ");
    $stmt->execute();
    foreach ($stmt as $row) {
        $photo = './images/upload/product/' . $row['photo'];
        $name = $row['name'];
        $slug = $row['slug'];
        $description = $row['description'];
        $date_create = thai_datetime($row['date_create']);
        $i += 1;
?>


        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="description" content="Ogani Template">
            <meta name="keywords" content="Ogani, unica, creative, html">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <title><?php echo $name; ?> | บริษัท พูล อัพ จำกัด </title>
            <meta property="og:url" content="http://pulletdiaper.com/blog-details?p=<?php echo $id; ?>" />
            <meta property="og:type" content="website" />
            <meta property="og:title" content="<?php echo $name; ?> | SAFECORE บริษัท พูล อัพ จำกัด " key='title' />
            <meta property="og:description" content="<?php echo $name; ?> |  บริษัท พูล อัพ จำกัด" />
            <meta property="og:image" content="http://pulletdiaper.com/<?php echo $photo; ?>" />
            <meta name="description" content="<?php echo $name; ?> | บริษัท พูล อัพ จำกัด">
            <meta name="keywords" content="<?php echo $name; ?>, พูลลิท , บริษัท พูล อัพ จำกัด">


            <?php include('includes/head.php'); ?>
        </head>

        <body>
            <?php include('includes/header.php'); ?>




            <section class="blog-details-hero set-bg" data-setbg="img/breadcrumb.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog__details__hero__text">
                                <h2><?php echo $name; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="blog-details spad">
                <div class="container-sm">
                    <div class="row">

                        <div class="col-lg-12  col-md-12 order-md-1 order-1">
                            <div class="blog__details__text">
                                <img src="<?php echo $photo; ?>" alt="">
                                <?php echo $description; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </section>



            <section class="related-blog spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title related-blog-title">
                                <h2>สาระน่ารู้อื่นๆที่น่าสนใจ</h2>
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
                                <div class='col-lg-4 col-md-4 col-sm-6'>
                                <div class='blog__item'>
                                    <div class='blog__item__pic'>
                                    <a href='blog-details?p={$slug}'>
                                    <img src='./images/upload/product/{$photo}' alt=''>
                                    </a>
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


<?php      // $i++;
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$pdo->close();
?>