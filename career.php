<?php

if (isset($_POST['add'])) {
    include 'includes/conn.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $tal = $_POST['tal'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $proviance = $_POST['proviance'];
    $district = $_POST['district'];
    $subdistrict = $_POST['subdistrict'];
    $postcode = $_POST['postcode'];
    $business_type = $_POST['business_type'];

    $specify = $_POST['specify'];

    $conn = $pdo->open();

    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM career WHERE fname=:fname AND date_create = NOW()");
    $stmt->execute(['fname' => $fname]);
    $row = $stmt->fetch();

    if ($row['numrows'] > 0) {
        $_SESSION['error'] = 'โปรดลองใหม่อีกครั้ง';
    } else {
        try {



            $stmt = $conn->prepare("INSERT INTO `career`( `fname`, `lname`, `tal`, `email`, `address`, `proviance`,
            `district`, `subdistrict`, `postcode`, `business_type`,`specify`) VALUES 
            (:fname,:lname,:tal,:email,:address,:proviance,:district,:subdistrict,:postcode,:business_type,:specify)");

            $stmt->execute([
                'fname' => $fname, 'lname' => $lname, 'tal' => $tal, 'email' => $email,
                'address' => $address, 'proviance' => $proviance, 'district' => $district,
                'subdistrict' => $subdistrict, 'postcode' => $postcode, 'business_type' => $business_type,
                'specify' => $specify
            ]);
            if ($stmt) {
                $_SESSION['success'] = 'ทางบริษัทได้รับข้อมูลของท่านเรียบร้อยแล้ว กรุณารอการติดต่อกลับจากเจ้าหน้าที่';
            } else {
                $_SESSION['error'] = 'ไม่สำเร็จ';
            }
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }

    $pdo->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>สมัครเป็นพาร์ทเนอร์ | บริษัท พูล อัพ จำกัด </title>
    <meta property="og:url" content="http://pulletdiaper.com/career.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="สมัครเป็นพาร์ทเนอร์ | SAFECORE บริษัท พูล อัพ จำกัด " key='title' />
    <meta property="og:description" content="สมัครเป็นพาร์ทเนอร์ |  SAFECORE บริษัท พูล อัพ จำกัด , บริการรักษาความปลอดภัย ,คลังสินค้า, หมู่บ้าน, อาคารสำนักงาน,  สำนักบ้าน,รปภ. โรงงาน ,รปภ. หมู่บ้าน ,รปภ. สำนักงาน รปภ. คลังสินค้า, รปภ. กรุงเทพ ,รปภ. บางนา, ชลบุรี" />
    <meta property="og:image" content="https://i.imgur.com/NhZje1F.png" />
    <meta name="description" content="SAFECORE บริษัท พูล อัพ จำกัด , บริการรักษาความปลอดภัย ,คลังสินค้า, หมู่บ้าน, อาคารสำนักงาน,  สำนักบ้าน,รปภ. โรงงาน ,รปภ. หมู่บ้าน ,รปภ. สำนักงาน รปภ. คลังสินค้า, รปภ. กรุงเทพ ,รปภ. บางนา, ชลบุรี">
    <meta name="keywords" content="สมัครเป็นพาร์ทเนอร์ , SAFECORE บริษัท พูล อัพ จำกัด , บริการรักษาความปลอดภัย คลังสินค้า,บริการรักษาความปลอดภัย หมู่บ้าน,บริการรักษาความปลอดภัย อาคารสำนักงาน, บริการรักษาความปลอดภัย สำนักบ้าน,รปภ. โรงงาน ,รปภ. หมู่บ้าน ,รปภ. สำนักงาน รปภ. คลังสินค้า, รปภ. กรุงเทพ ,รปภ. บางนา,รปภ. ชลบุรี">

    <style>
        #hidden_div {
            display: none;
        }
    </style>
    <?php include('includes/head.php'); ?>
</head>

<body>
    <?php include('includes/header.php'); ?>


    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2> สมัครเป็นพาร์ทเนอร์</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>สำหรับผู้ประกอบการ</h4>
                <form method="post" action>
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>ชื่อ<span>*</span></p>
                                        <input name="fname" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p> นามสกุล<span>*</span></p>
                                        <input name="lname" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p> เบอร์โทรศัพท์<span>*</span></p>
                                        <input name="tal" type="number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p> อีเมล<span>*</span></p>
                                        <input type="email" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>ที่อยู่<span>*</span></p>
                                <input name="address" type="text" placeholder=" " required class="checkout__input__add">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>จังหวัด<span>*</span></p>
                                        <select id="Proviance" name="proviance" required>
                                            <option value="" selected>- เลือก -</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>เขต/อำเภอ<span>*</span></p>
                                        <select name="district" id="District" required></select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>ตำบล/แขวง<span>*</span></p>
                                        <select name="subdistrict" id="Subdistrict" required></select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>รหัสไปรษณีย์<span>*</span></p>
                                        <!-- <select name="Postcode" id="Postcode"></select> -->
                                        <input name="postcode" id="Postcode" type="text" required readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>ประเภทธุรกิจ<span>*</span></p>
                                        <select name="business_type" onchange="showDiv('hidden_div', this)" id="business_type" class="form-select form-select-lg mb-3" required aria-label=".form-select-lg example">
                                            <option value="โรงพยาบาล">โรงพยาบาล</option>
                                            <option value="คลีนิค">คลินิก</option>
                                            <option value="ศูนย์ดูแลผู้สูงอายุ">ศูนย์ดูแลผู้สูงอายุ</option>
                                            <option value="ร้านขายยา/อุปกรณ์การแพทย์">ร้านขายยา/อุปกรณ์การแพทย์</option>
                                            <option value="หน่วยงานราชการ">หน่วยงานราชการ</option>
                                            <option value="0">อื่นๆ โปรดระบุ</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 " id="hidden_div">
                                    <div class="checkout__input">
                                        <p>โปรดระบุ<span>*</span></p>
                                        <!-- <select name="Postcode" id="Postcode"></select> -->
                                        <input name="specify" id="specify" type="text">
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-12 text-center">
                                <button type="submit" name="add" class="site-btn">ลงทะเบียน</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <?php include('includes/footer.php'); ?>

    <?php include('includes/scripts.php'); ?>


    <script>
        // document.getElementById("specify").required = false;
        function showDiv(divId, element) {
            document.getElementById(divId).style.display = element.value == 0 ? 'block' : 'none';
            document.getElementById("specify").required = element.value == 0 ? 'true' : 'false';
        }
    </script>

    <script>
        $.get('getdata.php?Proviance=Proviance', function(data) {
            var result = JSON.parse(data);
            $.each(result, function(index, item) {
                $('#Proviance').append(
                    $('<option></option>').val(item.id).html(item.name_th)
                );
            });
        });
    </script>

</body>

</html>