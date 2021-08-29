<?php $PHP_SELF = basename($_SERVER["PHP_SELF"]); ?>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="img/logo.png" width="100" alt=""></a>
    </div>

    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <!-- <li class="<?php if ($PHP_SELF == 'index.php' || $PHP_SELF == '') {
                            echo 'active';
                        } ?>"><a href="./index"><i class="fas fa-home"></i></a></li> -->
            <li class="<?php if ($PHP_SELF == 'products.php') {
                            echo 'active';
                        } ?>"><a href="./products">สินค้า</a></li>
            <li class="<?php if ($PHP_SELF == 'guide.php') {
                            echo 'active';
                        } ?>"><a href="./guide">แนะนำเลือกสินค้า</a></li>
            <li class="<?php if ($PHP_SELF == 'shop.php') {
                            echo 'active';
                        } ?>"><a href="./shop">ร้านค้าออนไลน์</a></li>
            <li class="<?php if ($PHP_SELF == 'blog.php') {
                            echo 'active';
                        } ?>"><a href="./blog">สาระน่ารู้</a></li>
            <li class="<?php if ($PHP_SELF == 'career.php') {
                            echo 'active';
                        } ?>"><a href="./career">สมัครเป็นพาร์ทเนอร์</a></li>
            <li class="<?php if ($PHP_SELF == 'contact.php') {
                            echo 'active';
                        } ?>"><a href="./contact">ติดต่อเรา</a></li>

        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>


</div>

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="./index"><img src="img/logo.png" width="100" alt=""></a>
                </div>
            </div>
            <div class="col-lg-9">
                <nav class="header__menu">
                    <ul>
                        <!-- <li class="<?php if ($PHP_SELF == 'index.php' || $PHP_SELF == '') {
                                        echo 'active';
                                    } ?>"><a href="./index"><i class="fas fa-home"></i></a></li> -->
                        <li class="<?php if ($PHP_SELF == 'products.php') {
                                        echo 'active';
                                    } ?>"><a href="./products">สินค้า</a></li>
                        <li class="<?php if ($PHP_SELF == 'guide.php') {
                                        echo 'active';
                                    } ?>"><a href="./guide">แนะนำเลือกสินค้า</a></li>
                        <li class="<?php if ($PHP_SELF == 'shop.php') {
                                        echo 'active';
                                    } ?>"><a href="./shop">ร้านค้าออนไลน์</a></li>
                        <li class="<?php if ($PHP_SELF == 'blog.php') {
                                        echo 'active';
                                    } ?>"><a href="./blog">สาระน่ารู้</a></li>
                        <li class="<?php if ($PHP_SELF == 'career.php') {
                                        echo 'active';
                                    } ?>"><a href="./career">สมัครเป็นพาร์ทเนอร์</a></li>
                        <li class="<?php if ($PHP_SELF == 'contact.php') {
                                        echo 'active';
                                    } ?>"><a href="./contact">ติดต่อเรา</a></li>

                    </ul>
                </nav>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>