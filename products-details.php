<?php

// echo $_GET['p'];
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
        $description2 = $row['description2'];
        $description3 = $row['description3'];
        $date_create = thai_datetime($row['date_create']);

        if (isset($row['description_feature_type'])) {
            $description_feature_type = $row['description_feature_type'];
        } else {
            $description_feature_type = '0';
        }
        if (isset($row['description_feature_1'])) {
            $description_feature_1 = $row['description_feature_1'];
        } else {
            $description_feature_1 = '-';
        }
        if (isset($row['description_feature_2'])) {
            $description_feature_2 = $row['description_feature_2'];
        } else {
            $description_feature_2 = '-';
        }
        if (isset($row['description_feature_3'])) {
            $description_feature_3 = $row['description_feature_3'];
        } else {
            $description_feature_3 = '-';
        }
        if (isset($row['description_feature_4'])) {
            $description_feature_4 = $row['description_feature_4'];
        } else {
            $description_feature_4 = '-';
        }
        if (isset($row['description_feature_5'])) {
            $description_feature_5 = $row['description_feature_5'];
        } else {
            $description_feature_5 = '-';
        }
        if (isset($row['description_feature_6'])) {
            $description_feature_6 = $row['description_feature_6'];
        } else {
            $description_feature_6 = '-';
        }


        if ($description_feature_type == 1) {
            $description_feature_type_ima_bg = ' <img src="https://i.imgur.com/O6HmFoZ.png" alt="" />';


            $description_feature_1_ima = './img/products_details/1_1_คุณสมบัติสินค้า.png';
            $description_feature_2_ima = './img/products_details/1_2_คุณสมบัติสินค้า.png';
            $description_feature_3_ima = './img/products_details/1_3_คุณสมบัติสินค้า.png';
            $description_feature_4_ima = './img/products_details/1_4_คุณสมบัติสินค้า.png';
            $description_feature_5_ima = './img/products_details/1_5_คุณสมบัติสินค้า.png';
            $description_feature_6_ima = './img/products_details/1_6_คุณสมบัติสินค้า.png';
        } else {

            $description_feature_type_ima_bg = '<img src="https://i.imgur.com/pZGN2IK.png" alt="" />';


            $description_feature_1_ima = './img/products_details/0_1_คุณสมบัติสินค้า.png';
            $description_feature_2_ima = './img/products_details/0_2_คุณสมบัติสินค้า.png';
            $description_feature_3_ima = './img/products_details/0_3_คุณสมบัติสินค้า.png';
            $description_feature_4_ima = './img/products_details/0_4_คุณสมบัติสินค้า.png';
            $description_feature_5_ima = './img/products_details/0_5_คุณสมบัติสินค้า.png';
            $description_feature_6_ima = './img/products_details/0_6_คุณสมบัติสินค้า.png';
        }

        $size = $row['size'];
        $size_packing = $row['size_packing'];
        $size_recommended = $row['size_recommended'];

        $link_shop = $row['link_shop'];

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
            <meta property="og:url" content="http://pulletdiaper.com/products-details?p=<?php echo $_GET['p']; ?>" />
            <meta property="og:type" content="website" />
            <meta property="og:title" content="<?php echo $name; ?> | SAFECORE บริษัท พูล อัพ จำกัด " key='title' />
            <meta property="og:description" content="<?php echo $name; ?> |  บริษัท พูล อัพ จำกัด" />
            <meta property="og:image" content="http://pulletdiaper.com/<?php echo $photo; ?>" />
            <meta name="description" content="<?php echo $name; ?> | บริษัท พูล อัพ จำกัด">
            <meta name="keywords" content="<?php echo $name; ?>, พูลลิท , บริษัท พูล อัพ จำกัด">



            <?php include('includes/head.php'); ?>

            <style>
                .product-view {
                    margin-bottom: 30px;
                    position: relative
                }

                @media (min-width:768px) {
                    .product-view {
                        margin-bottom: 73px
                    }
                }

                .product-view .product-view__title-row {
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    border-bottom-width: 5px;
                    border-bottom-style: solid;
                    color: #fff;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    height: 200px
                }

                @media (min-width:768px) {
                    .product-view .product-view__title-row {
                        left: 0;
                        position: absolute;
                        top: 0;
                        width: 100%
                    }
                }

                .product-view .product-view__title-row .container {
                    width: 100%
                }

                @media (min-width:768px) {
                    .product-view .product-view__header {
                        clear: none;
                        float: left;
                        margin-left: 41.66666667%;
                        width: 50%
                    }
                }

                @media (max-width:700px) {
                    .product-view .product-view__header {
                        text-align: center
                    }
                }

                .product-view .product-view__header .anchor-btns {
                    margin-top: 10px
                }

                .product-view .product-view__header .anchor-btns .anchor-btn {
                    background-color: #fff;
                    border: 0;
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    color: #4c689d;
                    cursor: pointer;
                    display: inline-block;
                    font-size: 16px;
                    font-weight: 600;
                    margin-top: 10px;
                    padding: 7px 16px 6px;
                    text-decoration: none;
                    text-transform: uppercase
                }

                @media (min-width:458px) {
                    .product-view .product-view__header .anchor-btns .anchor-btn:first-child {
                        margin-right: 20px
                    }
                }

                .product-view .product-view__header .anchor-btns .anchor-btn:hover {
                    background-color: #3d537e;
                    color: #fff
                }

                .product-view .product-view__type {
                    font-size: 21px
                }

                .product-view .product-view__title {
                    font-size: 42px;
                    font-weight: 300;
                    line-height: 40px;
                    margin: 0;
                    padding: 0
                }

                @media (min-width:768px) {
                    .product-view .product-view__title {
                        font-size: 52px;
                        line-height: 50px
                    }
                }

                @media (min-width:640px) {
                    .product-view .product-view__details-cont {
                        clear: none;
                        float: left;
                        width: 50%
                    }
                }

                .product-view .product-view__details {
                    color: #606060;
                    font-size: 16px;
                    text-align: center
                }

                @media (min-width:640px) {
                    .product-view .product-view__details {
                        text-align: left
                    }
                }

                @media (min-width:768px) {
                    .product-view .product-view__details {
                        padding-top: 230px;
                        text-align: left
                    }
                }

                @media (min-width:640px) {
                    .product-view .product-view__image-cont {
                        -webkit-box-sizing: border-box;
                        box-sizing: border-box;
                        float: left;
                        position: relative;
                        width: 41.66666666%
                    }
                }

                @media (max-width:700px) {
                    .product-view .product-view__image-cont {
                        margin-top: 30px
                    }
                }

                @media (min-width:900px) {
                    .product-view .product-view__image-cont {
                        width: 41.66666666%;
                        padding-left: 8.33333333%
                    }
                }

                .product-view .product-view__image {
                    display: block;
                    margin: 0 auto;
                    width: 100%;
                    max-width: 338px
                }

                @media (min-width:768px) {
                    .product-view .product-view__image {
                        margin: 99px auto 0
                    }
                }

                .product-view .product-view__image.product-view__image--hidden {
                    display: none
                }

                .product-view .product-view__incontinence-level {
                    font-size: 30px;
                    font-weight: 600;
                    margin-top: 19px
                }

                .product-view .product-view__sex-and-units-row {
                    overflow: hidden
                }

                .product-view .product-view__sex {
                    font-size: 25px;
                    margin-top: 1px
                }

                @media (min-width:768px) {
                    .product-view .product-view__sex {
                        clear: none;
                        float: left;
                        width: 109px
                    }
                }

                .product-view .product-view__units {
                    color: #4e8088;
                    font-size: 25px;
                    font-weight: 600;
                    margin-top: 2px;
                    text-transform: uppercase
                }

                @media (min-width:768px) {
                    .product-view .product-view__units {
                        clear: none;
                        float: left
                    }
                }

                .product-view .product-view__units.product-view__units--hidden {
                    display: none
                }

                .product-view .product-view__description {
                    font-size: 19px;
                    line-height: 25px;
                    margin-top: 32px
                }

                .product-view .product-view__description ul {
                    margin-bottom: 8px;
                    margin-top: 12px;
                    padding-left: 25px
                }

                .product-view .product-view__sizes-row {
                    margin-top: 17px;
                    overflow: hidden
                }

                .product-view .product-view__size-block-cont {
                    display: inline-block
                }

                .product-view .product-view__size-block {
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    background: transparent;
                    border: 0;
                    cursor: pointer;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column;
                    font-size: 18px;
                    height: 121px;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                    line-height: 22px;
                    text-align: center;
                    width: 180px;
                    color: #606060;
                    background-color: #f6f6f6;
                    position: relative
                }

                .product-view .product-view__size-block:after {
                    bottom: 0;
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    content: "";
                    display: block;
                    left: 0;
                    margin: 0 auto;
                    opacity: 1;
                    position: absolute;
                    right: 0;
                    text-align: center;
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    width: 100%
                }

                @media (min-width:768px) {
                    .product-view .product-view__size-block {
                        clear: none;
                        float: left;
                        margin-right: 10px
                    }
                }

                .product-view .product-view__size-block span {
                    display: block
                }

                .product-view .product-view__size-block.product-view__size-block--selected .product-view__size-block__title {
                    color: #fff !important
                }

                .product-view .product-view__size-block.product-view__size-block--selected.product-view__size-block--unico {
                    background-color: #3b8491
                }

                .product-view .product-view__size-block.product-view__size-block--selected.product-view__size-block--m,
                .product-view .product-view__size-block.product-view__size-block--selected.product-view__size-block--medio,
                .product-view .product-view__size-block.product-view__size-block--selected.product-view__size-block--p-m,
                .product-view .product-view__size-block.product-view__size-block--selected.product-view__size-block--pequeno-medio {
                    background-color: #e73993
                }

                .product-view .product-view__size-block.product-view__size-block--selected.product-view__size-block--g,
                .product-view .product-view__size-block.product-view__size-block--selected.product-view__size-block--grande {
                    background-color: #f36f21
                }

                .product-view .product-view__size-block.product-view__size-block--selected.product-view__size-block--xg {
                    background-color: #94be3f
                }

                .product-view .product-view__size-block.product-view__size-block--selected.product-view__size-block--mx.product-view__size-block--unico {
                    background-color: #00b2ed
                }

                .product-view .product-view__size-block.product-view__size-block--selected.product-view__size-block--mx.product-view__size-block--m,
                .product-view .product-view__size-block.product-view__size-block--selected.product-view__size-block--mx.product-view__size-block--medio,
                .product-view .product-view__size-block.product-view__size-block--selected.product-view__size-block--mx.product-view__size-block--pequeno-medio {
                    background-color: #e31f03
                }

                .product-view .product-view__size-block.product-view__size-block--selected.product-view__size-block--mx.product-view__size-block--g,
                .product-view .product-view__size-block.product-view__size-block--selected.product-view__size-block--mx.product-view__size-block--grande {
                    background-color: #63b01f
                }

                .product-view .product-view__size-block.product-view__size-block--selected.product-view__size-block--mx.product-view__size-block--xg {
                    background-color: #00b2ed
                }

                .product-view .product-view__size-block .product-view__size-block__title {
                    color: #e73993;
                    display: block;
                    /* font-size: 19px; */
                    font-weight: 600;
                    margin-bottom: 1px;
                    text-transform: uppercase
                }


                .product_title {
                    color: #fff;
                    display: block;
                    font-size: 50px;
                    font-weight: 700;
                    margin-bottom: 10px;

                    text-transform: uppercase;
                }





                .product-view .product-view__size-block.mx.product-view__size-block--g:hover:after,
                .product-view .product-view__size-block.mx.product-view__size-block--grande:hover:after {
                    border: none
                }




                .product-view .product-view__links {
                    margin-top: 18px
                }

                .product-view .product-view__links .product-view__link-out {
                    background: #4c689d;
                    border-bottom: 2px solid #3d537e;
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    color: #fff;
                    display: inline-block;
                    font-size: 16px;
                    font-weight: 600;
                    margin-top: 10px;
                    padding: 8px 16px 5px;
                    text-transform: uppercase;
                    text-decoration: none
                }

                @media (min-width:768px) {
                    .product-view .product-view__links .product-view__link-out {
                        margin-right: 16px
                    }
                }

                .product-view .product-view__links .product-view__link-out:hover {
                    text-decoration: none
                }

                .product-view .product-view__links .product-view__link-out__buy {
                    width: 180px;
                    text-align: center;
                    font-size: 18px
                }

                .product-view .product-view__features-diagram-row {
                    margin-top: 60px;
                    overflow: hidden
                }

                .product-view .product-view__features-diagram-row .tabs {
                    /* border-top: 1px solid #f2f2f2; */
                    display: block;
                    height: 75px;
                    width: 100%
                }

                .product-view .product-view__features-diagram-row .tabs .container {
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                    text-align: center
                }

                .product-view .product-view__features-diagram-row .tabs .container .tab {
                    color: #a9a9a9;
                    text-decoration: none;
                    font-size: 18px;
                    line-height: 73px;
                    margin: 0 auto
                }

                @media (max-width:380px) {
                    .product-view .product-view__features-diagram-row .tabs .container .tab {
                        font-size: 15px
                    }
                }

                .product-view .product-view__features-diagram-row .tabs .container .tab:after {
                    height: 1px;
                    bottom: -2px;
                    left: 0;
                    border: none
                }

                .product-view .product-view__features-diagram-row .tabs .container .tab-division {
                    /* border-right: 1px solid #f2f2f2; */
                    display: inline-block;
                    height: 30px;
                    vertical-align: middle;
                    width: 3px
                }



                @media (min-width:980px) {
                    .product-view .product-view__features-diagram-row .product-view__features-diagram-row-content {
                        padding-bottom: 52px
                    }
                }

                .product-view .product-view__features-diagram-row .product-view__features-diagram-row-content .product-view__features-diagram-row__image--mobile {
                    margin: 0 10px
                }

                .product-view .product-view__features-diagram-row .product-view__features-diagram-row-content .product-view__features-diagram-row__image--mobile img {
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    display: block;
                    margin: 0 auto 20px;
                    max-width: 277px;
                    width: 100%
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram-row .product-view__features-diagram-row-content .product-view__features-diagram-row__image--mobile {
                        display: none
                    }
                }

                .product-view .product-view__features-diagram {
                    border-collapse: collapse;
                    display: table;
                    text-align: center;
                    width: 100%
                }

                .product-view .product-view__features-diagram tbody {
                    display: table-row-group;
                    width: 100%
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram tbody {
                        display: table-row-group
                    }
                }

                .product-view .product-view__features-diagram tr {
                    display: table-row;
                    width: 100%
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram tr {
                        display: table-row
                    }
                }

                .product-view .product-view__features-diagram td {
                    padding: 0;
                    vertical-align: top;
                    width: 50%
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram td {
                        vertical-align: middle;
                        width: 50%
                    }
                }

                .product-view .product-view__features-diagram img {
                    display: block;
                    margin-bottom: 10px;
                    margin-left: auto;
                    margin-right: auto;
                    max-width: 100%;
                    vertical-align: middle;
                    width: 80px
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram img {
                        display: inline-block;
                        margin-bottom: 0;
                        width: 80px
                    }
                }

                @media (min-width:1024px) {
                    .product-view .product-view__features-diagram img {
                        width: 108px
                    }
                }

                .product-view .product-view__features-diagram .product-view__features-diagram__center-col {
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    display: none;
                    padding-left: 10px;
                    padding-right: 10px;
                    text-align: center;
                    width: 100%
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram .product-view__features-diagram__center-col {
                        display: table-cell;
                        width: 46%
                    }
                }

                .product-view .product-view__features-diagram .product-view__features-diagram__center-col img {
                    width: auto
                }

                .product-view .product-view__features-diagram .product-view__features-diagram__text {
                    display: inline-block;
                    font-size: 16px;
                    max-width: 120px;
                    vertical-align: middle
                }

                .product-view .product-view__features-diagram .product-view__features-diagram__text .product-view__features-diagram__title {
                    font-size: 15px;
                    font-weight: 600;
                    line-height: 24px;
                    margin-bottom: 8px;
                    margin-top: 8px
                }

                .product-view .product-view__features-diagram .product-view__features-diagram__col-left {
                    display: table-cell;
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    margin-bottom: 20px;
                    padding-bottom: 15px;
                    padding-top: 15px
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram .product-view__features-diagram__col-left {
                        float: none;
                        margin-bottom: 0;
                        text-align: right;
                        width: auto
                    }

                    .product-view .product-view__features-diagram .product-view__features-diagram__col-left .product-view__features-diagram__text {
                        margin-right: 20px
                    }
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram .product-view__features-diagram__col-left img:first-of-type {
                        display: none
                    }
                }

                .product-view .product-view__features-diagram .product-view__features-diagram__col-left img:nth-of-type(2) {
                    display: none
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram .product-view__features-diagram__col-left img:nth-of-type(2) {
                        display: inline-block
                    }
                }

                .product-view .product-view__features-diagram .product-view__features-diagram__col-right {
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    display: table-cell;
                    margin-bottom: 20px;
                    padding-bottom: 15px;
                    padding-top: 15px
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram .product-view__features-diagram__col-right {
                        float: none;
                        margin-bottom: 0;
                        min-width: 260px;
                        text-align: left;
                        width: auto
                    }

                    .product-view .product-view__features-diagram .product-view__features-diagram__col-right .product-view__features-diagram__text {
                        margin-left: 20px
                    }
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram .product-view__features-diagram__col-left__cell1 {
                        padding-right: 68px
                    }
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram .product-view__features-diagram__col-left__cell2 {
                        padding-right: 83px
                    }
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram .product-view__features-diagram__col-left__cell3 {
                        padding-right: 36px
                    }
                }

                .product-view .product-view__features-diagram .product-view__features-diagram__col-left__cell3 .product-view__features-diagram__text {
                    max-width: 140px
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram .product-view__features-diagram__col-right__cell1 {
                        padding-left: 68px
                    }
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram .product-view__features-diagram__col-right__cell2 {
                        padding-left: 83px
                    }
                }

                @media (min-width:980px) {
                    .product-view .product-view__features-diagram .product-view__features-diagram__col-right__cell3 {
                        padding-left: 36px
                    }
                }

                .product-view .product-view__instructions {
                    margin-top: 30px;
                    text-align: center
                }

                @media (min-width:640px) {
                    .product-view .product-view__instructions {
                        margin-top: 66px
                    }
                }

                .product-view .product-view__instructions .product-view__instructions__tabs-row {
                    overflow: hidden;
                    width: 100%
                }

                @media (min-width:640px) {
                    .product-view .product-view__instructions .product-view__instructions__tabs-row {
                        display: table
                    }
                }

                .product-view .product-view__instructions .product-view__instructions__tabs-row .product-view__instructions__tabs-row__col {
                    vertical-align: bottom
                }

                @media (min-width:640px) {
                    .product-view .product-view__instructions .product-view__instructions__tabs-row .product-view__instructions__tabs-row__col {
                        display: table-cell;
                        width: 33%
                    }
                }

                .product-view .product-view__instructions .product-view__instructions__tabs-row .product-view__instructions__tab-button {
                    background: transparent;
                    border: 0;
                    color: #4c689d;
                    cursor: pointer;
                    font-size: 19px;
                    font-weight: 600;
                    padding: 12px 10px;
                    position: relative
                }

                @media (min-width:640px) {
                    .product-view .product-view__instructions .product-view__instructions__tabs-row .product-view__instructions__tab-button {
                        font-size: 19px
                    }
                }

                .product-view .product-view__instructions .product-view__instructions__tabs-row .product-view__instructions__tab-button.product-view__instructions__tab-button--active:after {
                    background: #4c689d;
                    bottom: 0;
                    content: "";
                    display: block;
                    height: 3px;
                    left: 50%;
                    margin-left: -40px;
                    position: absolute;
                    width: 80px
                }

                .product-view .product-view__instructions .product-view__instructions__steps-row {
                    border: 1px solid #c3c3c3;
                    overflow: hidden;
                    padding-bottom: 20px;
                    padding-top: 20px;
                    width: 100%
                }

                .product-view .product-view__instructions .product-view__instructions__steps-row .product-view__instructions--tab-content {
                    display: none
                }

                .product-view .product-view__instructions .product-view__instructions__steps-row .product-view__instructions--tab-content.product-view__instructions--tab-content--active {
                    display: block
                }

                @media (min-width:640px) {
                    .product-view .product-view__instructions .product-view__instructions__steps-row .product-view__instructions__step {
                        clear: none;
                        float: left;
                        width: 50%
                    }
                }

                @media (min-width:768px) {
                    .product-view .product-view__instructions .product-view__instructions__steps-row .product-view__instructions__step {
                        clear: none;
                        float: left;
                        width: 33%
                    }
                }

                .product-view .product-view__instructions .product-view__instructions__steps-row .product-view__instructions__step.product-view__instructions__step--unique {
                    text-align: center;
                    width: 100%
                }

                .product-view .product-view__instructions .product-view__instructions__steps-row .product-view__instructions__step.product-view__instructions__step--unique .product-view__instructions__step__text {
                    max-width: 100%
                }

                .product-view .product-view__instructions .product-view__instructions__steps-row .product-view__instructions__step__image {
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    margin-left: 20px;
                    margin-right: 20px;
                    max-width: 100%;
                    width: 200px
                }

                @media (min-width:640px) {
                    .product-view .product-view__instructions .product-view__instructions__steps-row .product-view__instructions__step__image {
                        margin-left: 0;
                        margin-right: 0
                    }
                }

                .product-view .product-view__instructions .product-view__instructions__steps-row .product-view__instructions__step__number {
                    color: #4c689d;
                    font-size: 28px;
                    font-weight: 600
                }

                .product-view .product-view__instructions .product-view__instructions__steps-row .product-view__instructions__step__text {
                    font-size: 20px;
                    line-height: 22px;
                    margin: 7px auto;
                    max-width: 250px
                }

                .product-view .product-view__other-products {
                    margin-top: 57px;
                    text-align: center
                }

                .product-view .product-view__other-products .product-view__other-products__title {
                    color: #3965a0;
                    font-size: 29px
                }

                .product-view .product-view__other-products .product-view__other-products__title strong {
                    font-weight: 600
                }

                .product-view .product-view__other-products .row {
                    overflow: hidden
                }


                .button {
                    text-align: center;
                    align-items: flex-start;
                    cursor: default;
                    background: #314797;
                    color: #fff;
                    box-sizing: border-box;
                    margin: 0em;

                    padding: 20px 10px;
                    -webkit-box-pack: center;

                    justify-content: center;
                    line-height: 22px;
                    text-align: center;



                }

                .button2 {
                    text-align: center;
                    align-items: flex-start;
                    cursor: default;
                    background: #E73993;
                    color: #fff;
                    box-sizing: border-box;
                    margin: 0em;

                    padding: 20px 10px;
                    -webkit-box-pack: center;

                    justify-content: center;
                    line-height: 22px;
                    text-align: center;



                }

                .button3 {
                    text-align: center;
                    align-items: flex-start;
                    cursor: default;
                    background: #E73993;
                    color: #fff;
                    box-sizing: border-box;
                    margin: 0em;

                    padding: 20px 10px;
                    -webkit-box-pack: center;

                    justify-content: center;
                    line-height: 22px;
                    text-align: center;



                }

                .primary-btn2 {

                    padding: 10px 28px 10px;
                    color: #ffffff;
                    text-transform: uppercase;

                    background: #314797;
                    letter-spacing: 2px;
                }

                .product__details__text .primary-btn2 {
                    padding: 16px 28px 14px;
                    margin-right: 6px;
                    margin-bottom: 5px;
                }
            </style>

        </head>

        <body>
            <?php include('includes/header.php'); ?>



            <!-- Breadcrumb Section Begin -->
            <!-- <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="breadcrumb__text">
                                <h2><?php echo $name; ?></h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Breadcrumb Section End -->


            <section class="product-details spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="product__details__pic">
                                <div class="product__details__pic__item">
                                    <img class="product__details__pic__item--large" src="<?php echo $photo; ?>" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="product__details__text">
                                <h2><?php echo $name; ?></h2>
                                <ul>
                                    <div class="row">
                                        <div class="col-6">

                                            <div class="button2">

                                                <h1 class="product_title">
                                                    M
                                                </h1>
                                                <div class="product-view__size-block__title">
                                                    <p><b>ขนาดเอวที่แนะนำ</b> <br> ไม่เกิน 32 นิ้ว</p>
                                                </div>
                                                <div itemprop="description">
                                                    <p><b>ขนาดบรรจุ</b> <br> แพ็คละ 25 ชิ้น / ยกลัง 4 แพ็ค</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div class="button">

                                                <h1 class="product_title">
                                                    L
                                                </h1>
                                                <div class="product-view__size-block__title">
                                                    <p><b>ขนาดเอวที่แนะนำ</b> <br> ไม่เกิน 32 นิ้ว</p>
                                                </div>
                                                <div itemprop="description">
                                                    <p><b>ขนาดบรรจุ</b> <br> แพ็คละ 25 ชิ้น / ยกลัง 4 แพ็ค</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <li>
                                        <h3 class="mt-5 mb-0">วิธีใช้</h3><?php echo $description2; ?>
                                    </li>
                                    <!--<li><b>ขนาดบรรจุ </b> <span><?php echo $size_packing; ?></span></li>
                                    <li><b>ขนาดเอวที่แนะนำ </b> <span><?php echo $size_recommended; ?></span></li> -->

                                </ul>

                                <a href="./shop" class="primary-btn mt-5">กดสั่งซื้อ</a>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product-view" itemscope>
                                <div class="product-view__features-diagram-row">
                                    <div class="product-view__features-diagram-row-content" id="benefits">
                                        <div class="container">
                                            <div class="product-view__features-diagram-row__image--mobile">
                                                <?php echo $description_feature_type_ima_bg; ?>

                                            </div>

                                            <table class="product-view__features-diagram">
                                                <tr>
                                                    <td class="product-view__features-diagram__col-left product-view__features-diagram__col-left__cell1">
                                                        <img src="<?php echo $description_feature_1_ima; ?>" alt="" />
                                                        <div class="product-view__features-diagram__text">
                                                            <div class="product-view__features-diagram__title">
                                                                <?php echo $description_feature_1; ?>
                                                            </div>

                                                        </div>
                                                        <img src="<?php echo $description_feature_1_ima; ?>" alt="" />
                                                    </td>
                                                    <td rowspan="3" class="product-view__features-diagram__center-col">
                                                        <?php echo $description_feature_type_ima_bg; ?>
                                                    </td>
                                                    <td class="product-view__features-diagram__col-right product-view__features-diagram__col-right__cell1">
                                                        <img src="<?php echo $description_feature_4_ima; ?>" alt="" />
                                                        <div class="product-view__features-diagram__text">
                                                            <div class="product-view__features-diagram__title">
                                                                <?php echo $description_feature_2; ?>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-view__features-diagram__col-left product-view__features-diagram__col-left__cell2">
                                                        <img src="<?php echo $description_feature_2_ima; ?>" alt="" />
                                                        <div class="product-view__features-diagram__text">
                                                            <div class="product-view__features-diagram__title">
                                                                <?php echo $description_feature_3; ?>
                                                            </div>

                                                        </div>
                                                        <img src="<?php echo $description_feature_2_ima; ?>" alt="" />
                                                    </td>
                                                    <td class="product-view__features-diagram__col-right product-view__features-diagram__col-right__cell2">
                                                        <img src="<?php echo $description_feature_5_ima; ?>" alt="" />
                                                        <div class="product-view__features-diagram__text">
                                                            <div class="product-view__features-diagram__title">
                                                                <?php echo $description_feature_4; ?>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-view__features-diagram__col-left product-view__features-diagram__col-left__cell3">
                                                        <img src="<?php echo $description_feature_3_ima; ?>" alt="" />
                                                        <div class="product-view__features-diagram__text">
                                                            <div class="product-view__features-diagram__title">
                                                                <?php echo $description_feature_5; ?>
                                                            </div>

                                                        </div>
                                                        <img src="<?php echo $description_feature_3_ima; ?>" alt="" />
                                                    </td>
                                                    <td class="product-view__features-diagram__col-right product-view__features-diagram__col-right__cell3">
                                                        <img src="<?php echo $description_feature_6_ima; ?>" alt="" />
                                                        <div class="product-view__features-diagram__text">
                                                            <div class="product-view__features-diagram__title">
                                                                <?php echo $description_feature_6; ?>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- <div class="product__details__tab"> -->
                                <!-- <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">วิธีสวมใส่ 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">วิธีใช้</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" aria-selected="false">วิธีสวมใส่</a>
                                    </li>
                                </ul> -->
                                <div class="tab-content">
                                    <!-- <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                        <div class="product__details__tab__desc">
                                            <h4><b>คุณสมบัติสินค้า</b></h4>

                                        </div>
                                    </div> -->
                                    <!-- <div class="tab-pane" id="tabs-2" role="tabpanel"> -->
                                    <div class="product__details__tab__desc">
                                        <h4><b>วิธีสวมใส่</b></h4>
                                        <?php echo $description3; ?>
                                    </div>
                                    <!-- </div> -->
                                    <!-- <div class="tab-pane" id="tabs-3" role="tabpanel">
                                        <div class="product__details__tab__desc">
                                            <h4><b>วิธีสวมใส่</b></h4>
                                            <?php echo $description3; ?>
                                        </div>
                                    </div> -->
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </section>



            <section class="related-product">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title related__product__title">
                                <h2>สินค้าอื่นๆ</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row ">


                        <?php

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