<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> แนะนำเลือกสินค้า | บริษัท พูล อัพ จำกัด </title>
    <meta property="og:url" content="http://pulletdiaper.com/guide.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content=" แนะนำเลือกสินค้า | SAFECORE บริษัท พูล อัพ จำกัด " key='title' />
    <meta property="og:description" content=" แนะนำเลือกสินค้า |  SAFECORE บริษัท พูล อัพ จำกัด , บริการรักษาความปลอดภัย ,คลังสินค้า, หมู่บ้าน, อาคารสำนักงาน,  สำนักบ้าน,รปภ. โรงงาน ,รปภ. หมู่บ้าน ,รปภ. สำนักงาน รปภ. คลังสินค้า, รปภ. กรุงเทพ ,รปภ. บางนา, ชลบุรี" />
    <meta property="og:image" content="https://i.imgur.com/NhZje1F.png" />
    <meta name="description" content="SAFECORE บริษัท พูล อัพ จำกัด , บริการรักษาความปลอดภัย ,คลังสินค้า, หมู่บ้าน, อาคารสำนักงาน,  สำนักบ้าน,รปภ. โรงงาน ,รปภ. หมู่บ้าน ,รปภ. สำนักงาน รปภ. คลังสินค้า, รปภ. กรุงเทพ ,รปภ. บางนา, ชลบุรี">
    <meta name="keywords" content=" แนะนำเลือกสินค้า , SAFECORE บริษัท พูล อัพ จำกัด , บริการรักษาความปลอดภัย คลังสินค้า,บริการรักษาความปลอดภัย หมู่บ้าน,บริการรักษาความปลอดภัย อาคารสำนักงาน, บริการรักษาความปลอดภัย สำนักบ้าน,รปภ. โรงงาน ,รปภ. หมู่บ้าน ,รปภ. สำนักงาน รปภ. คลังสินค้า, รปภ. กรุงเทพ ,รปภ. บางนา,รปภ. ชลบุรี">


    <?php include('includes/head.php'); ?>

    <style>
        .wizard {
            width: 100%;
        }

        .wizard>.steps .current-info,
        .wizard>.content>.title {
            position: absolute;
            left: -99999px;
        }

        .wizard>.content {
            position: relative;
            width: auto;
            padding: 0;
        }

        .wizard>.content>.body {
            padding: 0 40px;
        }

        .wizard>.content>iframe {
            border: 0 none;
            width: 100%;
            height: 100%;
        }

        .wizard>.steps {
            position: relative;
            display: block;
            width: 100%;
        }

        .wizard>.steps>ul {
            display: table;
            width: 100%;
            table-layout: fixed;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .wizard>.steps>ul>li {
            display: table-cell;
            width: auto;
            vertical-align: top;
            text-align: center;
            position: relative;

        }

        .wizard>.steps>ul>li a {
            position: relative;
            padding-top: 48px;
            margin-top: 40px;
            margin-bottom: 40px;
            display: block;
        }

        .wizard>.steps>ul>li:before,
        .wizard>.steps>ul>li:after {
            content: '';
            display: block;
            position: absolute;
            top: 58px;
            width: 50%;
            height: 2px;
            background-color: #314797;
            z-index: 9;
        }

        .wizard>.steps>ul>li:before {
            left: 0;
        }

        .wizard>.steps>ul>li:after {
            right: 0;
        }

        .wizard>.steps>ul>li:first-child:before,
        .wizard>.steps>ul>li:last-child:after {
            content: none;
        }

        .wizard>.steps>ul>li.current:after,
        .wizard>.steps>ul>li.current~li:before,
        .wizard>.steps>ul>li.current~li:after {
            background-color: #eeeeee;
        }

        .wizard>.steps>ul>li.current>a {
            color: #314797;
            cursor: default;
        }

        .wizard>.steps>ul>li.current .number {
            border-color: #314797;
            color: #314797;
        }

        .wizard>.steps>ul>li.disabled a,
        .wizard>.steps>ul>li.disabled a:hover,
        .wizard>.steps>ul>li.disabled a:focus {
            color: #A5AEB7;
            cursor: default;
        }

        .wizard>.steps>ul>li.done a,
        .wizard>.steps>ul>li.done a:hover,
        .wizard>.steps>ul>li.done a:focus {
            color: #314797;
        }

        .wizard>.steps>ul>li.done .number {
            font-size: 0;
            background-color: #314797;
            border-color: #314797;
            color: #fff;
        }

        .wizard>.steps>ul>li.done .number:after {
            content: '\221A';

            display: inline-block;
            font-size: 16px;
            line-height: 34px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-transition: all 0.15s ease-in-out;
            -o-transition: all 0.15s ease-in-out;
            transition: all 0.15s ease-in-out;
        }

        .wizard>.steps>ul>li.error .number {
            border-color: #F44336;
            color: #F44336;
        }

        @media (max-width: 768px) {
            .wizard>.steps>ul {
                margin-bottom: 20px;
            }

            .wizard>.steps>ul>li {
                display: block;
                float: left;
                width: 50%;
            }

            .wizard>.steps>ul>li>a {
                margin-bottom: 0;
            }

            .wizard>.steps>ul>li:first-child:before,
            .wizard>.steps>ul>li:last-child:after {
                content: '';
            }

            .wizard>.steps>ul>li:last-child:after {
                background-color: #00BCD4;
            }
        }

        @media (max-width: 480px) {
            .wizard>.steps>ul>li {
                width: 100%;
            }

            .wizard>.steps>ul>li.current:after {
                background-color: #314797;
            }
        }

        .wizard>.steps .number {
            background-color: #fff;
            color: #A5AEB7;
            display: inline-block;
            position: absolute;
            top: 0;
            left: 50%;
            margin-left: -19px;
            width: 38px;
            height: 38px;
            border: 2px solid #eeeeee;
            font-size: 14px;
            border-radius: 50%;
            z-index: 10;
            line-height: 34px;
            text-align: center;
        }

        .panel-flat>.wizard>.steps>ul {
            border-top: 1px solid #ddd;
        }

        .wizard>.actions {
            position: relative;
            display: block;
            text-align: center;
            padding: 40px;
            padding-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .wizard>.actions>ul {

            float: left;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .wizard>.actions>ul:after {
            content: '';
            display: table;
            clear: both;
        }

        .wizard>.actions>ul>li {

            float: left;
        }

        .wizard>.actions>ul>li+li {
            margin-left: 10px;

        }

        .wizard>.actions>ul>li>a {

            background: #314797;
            color: #fff;
            display: block;
            padding: 10px 25px;
            font-family: 'AvenirNextDemiBold', 'Helvetica', 'Arial', sans-serif !important;
            border-radius: 0px;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
            border: 2px solid #314797;
        }

        .wizard>.actions>ul>li.disabled>a,
        .wizard>.actions>ul>li.disabled>a:hover,
        .wizard>.actions>ul>li.disabled>a:focus {
            background-color: #fff;
            color: #4A4A49;
            border: 2px solid #EDEDED;
        }

        .wizard>.actions>ul>li.disabled>a[href="#previous"],
        .wizard>.actions>ul>li.disabled>a[href="#previous"]:hover,
        .wizard>.actions>ul>li.disabled>a[href="#previous"]:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        label {
            display: block;
        }

        label.error {
            color: red;
        }



        body input {
            display: none;
        }


        input+div+div {
            width: 100%;
            margin-top: 10px;
        }

        input+div+div label {
            display: block;
            padding: 20px 10px;
            text-align: center;
            transition: all 0.15s ease-in-out;
            background: #fff;
            border-radius: 10px;
            box-sizing: border-box;
            width: 100%;

            cursor: pointer;
        }



        /* input+div+div label:first-child {
            float: left;
            box-shadow: inset 0 0 0 4px #1597ff, 0 15px 15px -10px rgba(0, 125, 225, 0.375);
        } */

        input+div+div label:last-child {
            float: right;
        }



        input#userName:checked~div+div label:first-child {
            box-shadow: inset 0 0 0 0px #1597ff, 0 10px 15px -20px rgba(21, 151, 255, 0);
        }

        input#userName:checked~div+div label:last-child {
            box-shadow: inset 0 0 0 4px #1597ff, 0 15px 15px -10px rgba(0, 125, 225, 0.375);
        }




        input#name:checked~div+div label:first-child {
            box-shadow: inset 0 0 0 4px #1597ff, 0 15px 15px -10px rgba(0, 125, 225, 0.375);
        }

        input#name:checked~div+div label:last-child {
            box-shadow: inset 0 0 0 0px #1597ff, 0 10px 15px -20px rgba(21, 151, 255, 0);
        }

        input#surname:checked~div+div label:first-child {
            box-shadow: inset 0 0 0 0px #1597ff, 0 10px 15px -20px rgba(21, 151, 255, 0);
        }

        input#surname:checked~div+div label:last-child {
            box-shadow: inset 0 0 0 4px #1597ff, 0 15px 15px -10px rgba(0, 125, 225, 0.375);
        }

        input#email:checked~div+div label:first-child {
            box-shadow: inset 0 0 0 0px #1597ff, 0 10px 15px -20px rgba(21, 151, 255, 0);
        }

        input#email:checked~div+div label:last-child {
            box-shadow: inset 0 0 0 4px #1597ff, 0 15px 15px -10px rgba(0, 125, 225, 0.375);
        }



        input#acceptTerms:checked~div+div label:first-child {
            box-shadow: inset 0 0 0 4px #1597ff, 0 15px 15px -10px rgba(0, 125, 225, 0.375);
        }

        input#acceptTerms:checked~div+div label:last-child {
            box-shadow: inset 0 0 0 0px #1597ff, 0 10px 15px -20px rgba(21, 151, 255, 0);
        }

        input#address:checked~div+div label:first-child {
            box-shadow: inset 0 0 0 0px #1597ff, 0 10px 15px -20px rgba(21, 151, 255, 0);
        }

        input#address:checked~div+div label:last-child {
            box-shadow: inset 0 0 0 4px #1597ff, 0 15px 15px -10px rgba(0, 125, 225, 0.375);
        }



        input#acceptTerms2:checked~div+div label:first-child {
            box-shadow: inset 0 0 0 4px #1597ff, 0 15px 15px -10px rgba(0, 125, 225, 0.375);
        }

        input#acceptTerms2:checked~div+div label:last-child {
            box-shadow: inset 0 0 0 0px #1597ff, 0 10px 15px -20px rgba(21, 151, 255, 0);
        }

        input#address2:checked~div+div label:first-child {
            box-shadow: inset 0 0 0 0px #1597ff, 0 10px 15px -20px rgba(21, 151, 255, 0);
        }

        input#address2:checked~div+div label:last-child {
            box-shadow: inset 0 0 0 4px #1597ff, 0 15px 15px -10px rgba(0, 125, 225, 0.375);
        }
    </style>
</head>

<body>
    <?php include('includes/header.php'); ?>



    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2> แนะนำเลือกสินค้า</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (!isset($_POST['userName'])) { ?>
        <section class="contact spad">
            <div class="container">
                <div class="row">
                    <form id="regForm" action="" method="post">
                        <div id="jquery-steps">
                            <h3>สวมใส่ได้ทั้งชายและหญิง</h3>
                            <section>
                                <div id="account-form">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-3 col-sm-6 text-center">
                                            <div class="contact__widget">

                                                <input type="radio" id="userName" checked value="1" name="userName[]">

                                                <div>
                                                </div>
                                                <div>

                                                    <label for="userName">  <img width="100" src='./img/guide/ชาย-หญิง.png' alt=''>ชายและหญิง</label>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3>ปริมาณของปัสสาวะ</h3>
                            <section>
                                <div id="profile-form">
                                    <!-- <input id="name" name="name" type="radio" class="required" />
                            <input id="name" name="name" type="radio" class="required" />
                            <input id="name" name="name" type="radio" class="required" /> -->
                                    <div class="row">
                                        <div class="col-lg-12 col-md-3 col-sm-6 text-center">
                                            <div class="contact__widget">

                                                <input type="radio" id="name" checked class="required" value="1" name="name[]">
                                                <input type="radio" id="surname" value="5" name="name[]">

                                                <div>
                                                </div>
                                                <div>
                                                    <label for="name"> <img width="100" src='./img/guide/น้อย.png' alt=''>น้อย
                                                        <p>(ปัสสาวะไหลซึมเมื่อ ไอ จาม ยกของหนัก หรือ ออกกำลังกาย)</p>
                                                    </label>
                                                    <label for="surname"><img width="100" src='./img/guide/ปานกลาง.png' alt=''> ปานกลาง
                                                        <p>(เคลื่อนไหวช้าเข้าห้องน้ำไม่ทัน)</p>
                                                    </label>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-3 col-sm-6 text-center">
                                            <div class="contact__widget">


                                                <input type="radio" id="email" value="9" name="name[]">
                                                <div>
                                                </div>
                                                <div>

                                                    <label for="email"><img width="100" src='./img/guide/มาก.png' alt=''> &nbsp; &nbsp;มาก
                                                        <p>(กลั้นปัสสาวะไม่ได้)</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>

                            <h3>ความสามารถในการเคลื่อนไหว </h3>
                            <section>
                                <div id="form-1 ">

                                    <!-- <input id="acceptTerms" name="name" type="radio" class="required" />
                            <input id="acceptTerms" name="name" type="radio" class="required" />
                            <input id="acceptTerms" name="name" type="radio" class="required" /> -->
                                    <div class="row">
                                        <div class="col-lg-12 col-md-3 col-sm-6 text-center">
                                            <div class="contact__widget">

                                                <input type="radio" id="acceptTerms" checked class="required" value="1" name="acceptTerms[]">
                                                <input type="radio" id="address" value="2" name="acceptTerms[]">
                                                <div>
                                                </div>
                                                <div>
                                                    <label for="acceptTerms"><img width="100" src='./img/guide/เคลื่อนไหวสะดวก.png' alt='เคลื่อนไหวสะดวก'>เคลื่อนไหวสะดวก</label>
                                                    <label for="address"><img width="100" src='./img/guide/ใช้ไม้เท้าหรือไม้พยุงช่วย.png' alt='ใช้ไม้เท้าหรือไม้พยุงช่วย'>ใช้ไม้เท้าช่วย</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-12 col-md-3 col-sm-6 text-center">
                                            <div class="contact__widget">

                                                <input type="radio" id="acceptTerms2" value="3" name="acceptTerms[]">
                                                <input type="radio" id="address2" value="4" name="acceptTerms[]">
                                                <div>
                                                </div>
                                                <div>
                                                    <label for="acceptTerms2"><img width="100" src='./img/guide/ใช้รถเข็นช่วย.png' alt='ใช้รถเข็นช่วย'>ใช้รถเข็นช่วย</label>
                                                    <label for="address2"><img width="100" src='./img/guide/นอนติดเตียง.png' alt='นอนติดเตียง'>นอนติดเตียง</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    <?php } else { ?>
        <section class="related-product mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title related__product__title">
                            <h2>สินค้าแนะนำ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">


                    <?php
                    include 'includes/conn.php';

                    $number1 = $_POST['userName'][0] + $_POST['name'][0] + $_POST['acceptTerms'][0];
                    $number = intval($number1);
                    //  print_r($number);

                    $all_number = array();

                    if ($number == 3 || $number == 4) {
                        $all_number[] = 3;
                    } elseif ($number == 5) {
                        $all_number[] = 3;
                        $all_number[] = 9;
                    } elseif ($number == 6) {
                        $all_number[] = 9;
                    } elseif ($number == 7 || $number == 8) {
                        $all_number[] = 8;
                    } elseif ($number == 9) {
                        $all_number[] = 8;
                        $all_number[] = 11;
                    } elseif ($number == 10) {
                        $all_number[] = 11;
                    } elseif ($number == 11 || $number == 12) {
                        $all_number[] = 8;
                    } elseif ($number == 13) {
                        $all_number[] = 8;
                        $all_number[] = 11;
                    } elseif ($number == 14) {
                        $all_number[] = 11;
                    } else {
                        $all_number[] = 0;
                    }

                    $all_number2 = implode(",", $all_number);
                    $conn = $pdo->open();

                    try {
                        $stmt = $conn->prepare("SELECT products.photo,products.name,products.id,products.date_create,products.price FROM `products` 
                        INNER JOIN category
                        ON products.category_id = category.id
                        where category.num_formula  IN ($all_number2)
                        AND products.type = '0'
                        ");
                        $stmt->execute();
                        $count = $stmt->rowCount();

                        if (isset($count) && $count > 0) {
                            foreach ($stmt as $row) {
                                $photo = $row['photo'];
                                $name = $row['name'];
                                $id = $row['id'];



                                echo "

                            <div class='col-lg-3 col-md-4 col-sm-6'>
                            <div class='product__item'>
                                <div class='product__item__pic set-bg' data-setbg='./images/upload/product/{$photo}'>
                                
                                </div>
                                <div class='product__item__text'>
                                
                                    <h6><a href='products-details?p={$id}'>{$name}</a></h6>
                                  
                                </div>
                            </div>
                        </div>


                        ";
                                // $i++;

                            }
                        } else {
                            $_SESSION['error'] = 'ไม่พบข้อมูล';
                        }
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }

                    $pdo->close();
                    ?>


                </div>
            </div>
        </section>

    <?php } ?>
    <?php include('includes/footer.php'); ?>

    <?php include('includes/scripts.php'); ?>

    <!-- <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js"></script> -->
    <script src="js/jquery.validate.js"></script>
    <script src="js/jquery.steps.js"></script>
    <script>
        $('#account-form').validate();
        $('#profile-form').validate();
        $('#form-1').validate();
        $('#jquery-steps').steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function(event, currentIndex, newIndex) {
                if (newIndex < currentIndex) {
                    return true;
                }
                var form = $('.body.current form');
                if (form.length == 1) {
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                }
                return true;
            },
            onFinishing: function(event, currentIndex) {

                var form = $('.body.current form');
                if (form.length == 1) {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                }
                return true;
            },
            onFinished: function(event, currentIndex) {
                document.getElementById("regForm").submit();

                // alert("สำเร็จ!");
            }
        });
    </script>

</body>

</html>