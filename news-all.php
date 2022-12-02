<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/metatag.php'); ?>
    <?php include('inc/loadstyle.php'); ?>
    <style>
        :root {
            --color-primary: #0B8BF6;
            /* --color-primary: #ff2c66; */

            /* color player button */
            --color-gradient-style: linear-gradient(135deg, #0B8BF6 0%, #00CBF4 100%);
        }
    </style>
</head>

<body>

    <div class="global-container">
        <?php include('inc/header.php'); ?>

        <section class="site-container">
            <div class="inner-page">
                <div class="about-us">
                    <div class="section-I" style="background-image: url(assets/img/background/inner-page-bg-section1.png), url(assets/img/background/inner-page-bg-section2.png); background-color: var(--color-primary);">
                        <!-- <div class="section-I" style="background-image: url(assets/img/background/inner-page-bg-section1.png), url(assets/img/background/inner-page-bg-section2.png), linear-gradient(0deg, #0B8BF6 0%, #4CAAF8 100%); background-color: var(--color-primary)"> -->
                        <div class="inner-wrapper">
                            <div class="graphic -tree">
                                <img src="assets/img/static/tree.png" alt="tree graphic">
                            </div>
                            <div class="graphic -II">
                                <img src="assets/img/static/boat.png" alt="boat graphic">
                            </div>
                            <div class="top-banner" data-aos="fade-down">
                                <div class="banner-slide">
                                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                                        <div class="item image">
                                            <div class="cover">
                                                <img class="img-cover lazy" src="assets/img/upload/top-banner.png" alt="top-graphic">
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="container">
                                <div class="bg-inner">
                                    <div class="content">
                                        <div class="breadcrumb-block">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <ol class="breadcrumb" data-aos="fade-left">
                                                        <li>
                                                            <a href="#" class="link">
                                                                <div class="home-link">
                                                                    <div class="icon -home">
                                                                        <img src="assets/img/icon/home.svg" alt="">
                                                                    </div>
                                                                    <div class="txt">
                                                                        หน้าหลัก
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="javascript:void(0);" class="link">
                                                                เต่ามะเฟือง
                                                                Leatherback turtle Dermochelys coriacea
                                                            </a>
                                                        </li>
                                                    </ol>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="share-link" data-aos="fade-right">
                                                        <a href="#" class="link">
                                                            <span class="fa fa-facebook"></span>
                                                        </a>
                                                        <a href="#" class="link">
                                                            <span class="fa fa-twitter"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter">
                                            <div class="form-default">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-3">
                                                        <div class="form-group order" data-aos="fade-up">
                                                            <label class="control-label">
                                                                <span class="feather icon-filter"></span>
                                                            </label>
                                                            <select class="select-control form-control" name="sortnews" style="width: 100%;">
                                                                <option value="1">ข่าวล่าสุด</option>
                                                                <option value="2">ข่าวเก่าสุด</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-7 col-lg-5">
                                                        <div class="form-group search" data-aos="fade-up">
                                                            <input name="keyword" class="form-control search-label" placeholder="คำค้นหา" value="" type="text">
                                                            <button type="submit" class="btn btn-primary" title="ค้นหา"><span class="fa fa-search"></span></button>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4">
                                                        <div class="form-group list" data-aos="fade-up">
                                                            <label class="control-label">
                                                                <span class="feather icon-list"></span>
                                                            </label>
                                                            <label class="control-label txt">
                                                                จำนวนที่แสดง
                                                            </label>
                                                            <select class="select-control form-control" name="sortnews" style="width: 100%;">
                                                                <option value="1">15</option>
                                                                <option value="2">10</option>
                                                                <option value="2">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="news">
                                            <p class="typo-md mb-5">ผลลัพท์การค้นหา <span>20</span> รายการ</p>
                                            <div class="news-slide">
                                                <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                    <div class="item" data-aos="fade-up">
                                                        <div class="new">
                                                            <!-- <a href="#" class="link"> -->
                                                            <div class="cover">
                                                                <img class="img-cover lazy" src="assets/img/upload/news.jpg" alt="">
                                                            </div>
                                                            <div class="detail">
                                                                <div class="title text-primary typo-md fw-medium mb-1">
                                                                    เหตุการณ์สำคัญทางทะเล/ชายฝั่งประจำวันที่ 29 ธันวาคม 2564
                                                                </div>
                                                                <div class="desc txt-wrap typo-20">
                                                                    ข่าวด้านบวก 1 เรื่อง / ข่าวด้านลบ -ไม่มี- / เหตุการณ์ทั่วไปปกติ
                                                                </div>
                                                                <div class="info mb-3">
                                                                    <div class="date">
                                                                        <span class="feather icon-calendar"></span>
                                                                        <div class="txt">12 เม.ย. 2565</div>
                                                                    </div>
                                                                    <div class="views">
                                                                        <span class="feather icon-eye"></span>
                                                                        <div class="txt">69</div>
                                                                    </div>
                                                                </div>
                                                                <div class="read-more">
                                                                    <a href="detail.php" class="btn btn-border-primary">อ่านต่อ</a>
                                                                </div>
                                                            </div>
                                                            <!-- </a> -->
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="news-list">
                                                <?php for ($i = 1; $i <= 8; $i++) { ?>
                                                    <div class="item" data-aos="fade-up">
                                                        <div class="new">
                                                            <!-- <a href="#" class="link"> -->
                                                            <div class="row">
                                                                <div class="col-xl-4 col-lg-5 col-md-6">
                                                                    <div class="cover">
                                                                        <img class="img-cover lazy" src="assets/img/upload/news.jpg" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-8 col-lg-7 col-md-6">
                                                                    <div class="detail">
                                                                        <div class="title text-primary typo-lg fw-medium mb-1">
                                                                            เหตุการณ์สำคัญทางทะเล/ชายฝั่งประจำวันที่ 29 ธันวาคม 2564
                                                                        </div>
                                                                        <div class="desc txt-wrap typo-md">
                                                                            ข่าวด้านบวก 1 เรื่อง / ข่าวด้านลบ -ไม่มี- / เหตุการณ์ทั่วไปปกติ
                                                                        </div>
                                                                        <div class="info mb-3">
                                                                            <div class="date">
                                                                                <span class="feather icon-calendar"></span>
                                                                                <div class="txt">12 เม.ย. 2565</div>
                                                                            </div>
                                                                            <div class="views">
                                                                                <span class="feather icon-eye"></span>
                                                                                <div class="txt">69</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="read-more">
                                                                            <a href="detail.php" class="btn btn-border-primary">อ่านต่อ</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- </a> -->
                                                        </div>
                                                    </div>

                                                <?php } ?>
                                            </div>
                                            <div class="page" >
                                                <div class="row align-items-center">
                                                    <div class="col-lg-auto" data-aos="fade-left">
                                                        <p class="m-0">จำนวนหน้า <span>457</span> หน้า</p>
                                                    </div>
                                                    <div class="col" data-aos="fade-right">
                                                        <nav aria-label="Page navigation">
                                                            <ul class="pagination justify-content-end align-items-center">
                                                                <li class=" pagination-prev">
                                                                    <a class="page-link" href="#">
                                                                        หน้าแรก
                                                                    </a>
                                                                </li>
                                                                <li class="page-item disabled">
                                                                    <a class="page-link" href="#" tabindex="-1">
                                                                        <span class="feather icon-chevron-left"></span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#">
                                                                        <span class="feather icon-chevron-right"></span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-jump">
                                                                    <select class="select-control form-control" name="sortnews" style="width: 100%;">
                                                                        <option value="1">หน้าสุดท้าย</option>
                                                                        <option value="2">10</option>
                                                                        <option value="2">5</option>
                                                                    </select>
                                                                </li>
                                                                <li class="pagination-next">
                                                                    <a class="page-link" href="#">
                                                                        หน้าสุดท้าย
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include('inc/footer.php'); ?>
    </div>

    <?php include('inc/loadscript.php'); ?>


</body>

</html>