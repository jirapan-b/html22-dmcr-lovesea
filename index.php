<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/metatag.php'); ?>
    <?php include('inc/loadstyle.php'); ?>
    <style>
        :root {
            --color-primary: #0b8bf6;

            /* color player button */
            --color-gradient-style: linear-gradient(#0B8BF6 0%, #00CBF4 100%);
        }
    </style>
</head>

<body>

    <div class="global-container">
        <?php include('inc/header.php'); ?>

        <section class="site-container">
            <div class="home-page">
                <div class="section-I" style="background-image: url(assets/img/background/bg-section1.png); background-position: center -65px;">
                    <div class="inner-wrapper">
                        <div class="graphic -tree">
                            <img src="assets/img/static/tree.png" alt="tree graphic">
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
                            <div class="announce my-3" data-aos="fade-up">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="head">
                                            <div class="icon">
                                                <img src="assets/img/icon/megaphone.svg" alt="">
                                            </div>
                                            <div class="txt typo-lg">ประกาศ</div>
                                        </div>
                                    </div>
                                    <div class="col pl-0">
                                        <div class="body typo-md">
                                            <!-- <div class="marquee"> -->
                                            <marquee scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()" loop="infinite">
                                                <ul class="item-list">
                                                    <li>
                                                        <a href="detail.php">
                                                            <span>
                                                                วันที่ 19 มกราคม 2563 รับแจ้งจากชาวบ้าน พบรอยการขึ้นวางไข่ของเต่ามะเฟืองอีก 1 รัง เป็นรังที่ 6 โดยมีขนาดความกว้างช่วงพาย 180 ซม. ความกว้าง
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="detail.php">
                                                            <span>
                                                                วันที่ 20 มกราคม 2563 รับแจ้งจากชาวบ้าน พบรอยการขึ้นวางไข่ของเต่ามะเฟืองอีก 1 รัง เป็นรังที่ 6 โดยมีขนาดความกว้างช่วงพาย 180 ซม. ความกว้าง
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="detail.php">
                                                            <span>
                                                                วันที่ 21 มกราคม 2563 รับแจ้งจากชาวบ้าน พบรอยการขึ้นวางไข่ของเต่ามะเฟืองอีก 1 รัง เป็นรังที่ 6 โดยมีขนาดความกว้างช่วงพาย 180 ซม. ความกว้าง
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </marquee>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content -I">
                                <div class="board" data-aos="fade-down">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-5 mb-4 text-center">
                                            <div class="title">
                                                <div class="wtxt text-stroke-70 fw-bold typo-70">เต่ามะเฟือง</div>
                                            </div>
                                            <div class="subtitle typo-36 fw-medium">หาดบ่อดาน 2 อ.ท้ายเหมือง จ.พังงา</div>
                                            <a href="#" class="btn btn-wood typo-lg">ไปหาดบ่อดาน 2</a>
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="desc typo-md">
                                                วันที่ 14 มกราคม 2563 สำนักงานทรัพยากรทางทะเลและชายฝั่งที่ 6 (พังงา) ร่วมกับฐานทัพเรือพังงา เดินตรวจตราเฝ้าระวังฯ (เดินเต่า) พบร่องรอยการขึ้นมาวางไข่ของเต่ามะเฟือง บริเวณชายหาดบ่อดาน อ.ท้ายเหมือง เมื่อวัดขนาดรอยของแม่เต่ามะเฟือง มีขนาดความกว้างจากพายซ้ายถึงพายขวา 180 เซนติเมตร ขนาดความกว้างช่วงอก 80 เซนติเมตร หลังจากขุดหาไข่เต่ากว่า 2 ชั่วโมง พบไข่เต่ามะเฟืองที่ระดับความลึก 80 เซนติเมตร นับเป็นรังที่ 5 ในรอบปีนี้ เมื่อตรวจสอบจำนวนไข่ พบไข่ดี 22 ฟอง และไข่ลม 40 ฟอง และพิจารณาสถานที่ตั้งของหลุมแล้ว เพื่อการจัดการที่ดี จึงย้ายไข่มาไว้บริเวณศูนย์เฝ้าระวังและติดตามสถานการณ์เต่ามะเฟืองหาดบ่อดาน
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content -II">
                                <div class="table-responsive" data-aos="fade-up">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>JD No.</th>
                                                <th>รอบปี</th>
                                                <th>ว ด ป ขึ้นวางไข่</th>
                                                <th>สถานที่</th>
                                                <th>ตำบล</th>
                                                <th>อำเภอ</th>
                                                <th>จังหวัด</th>
                                                <th>การจัดการ</th>
                                                <th>ว ด ป ฟักลงทะเล</th>
                                                <th>จำนวนลูกเต่า</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 1; $i <= 11; $i++) { ?>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2562</td>
                                                    <td>17-11-62</td>
                                                    <td>หาดท้ายเหมือง</td>
                                                    <td>ท้ายเหมือง</td>
                                                    <td>ท้ายเหมือง</td>
                                                    <td>พังงา</td>
                                                    <td>ย้ายรัง</td>
                                                    <td>19-01-63</td>
                                                    <td>30</td>
                                                </tr>
                                            <?php } ?>
                                            <tr>
                                                <td colspan="9">รวม</td>
                                                <td>351</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-II" style="background-image: url(assets/img/background/bg-section2.png);">
                    <div class="inner-wrapper">
                        <div class="graphic -II">
                            <img src="assets/img/static/boat.png" alt="boat graphic">
                        </div>
                        <div class="container">
                            <div class="cctv">
                                <div class="whead" data-aos="fade-down">
                                    <div class="wtxt text-light text-center">
                                        แผนผังกล้อง CCTV
                                    </div>
                                </div>
                                <div class="cctv-slide">
                                    <div class="item" data-aos="fade-up">
                                        <a href="assets/img/upload/map1.jpg" data-fancybox="cctv">
                                            <div class="cover">
                                                <img class="img-cover lazy" src="assets/img/upload/map1.jpg" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item" data-aos="fade-up">
                                        <a href="assets/img/upload/map2.jpg" data-fancybox="cctv">
                                            <div class="cover">
                                                <img class="img-cover lazy" src="assets/img/upload/map2.jpg" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item" data-aos="fade-up">
                                        <a href="assets/img/upload/map3.jpg" data-fancybox="cctv">
                                            <div class="cover">
                                                <img class="img-cover lazy" src="assets/img/upload/map3.jpg" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item" data-aos="fade-up">
                                        <a href="assets/img/upload/map1.jpg" data-fancybox="cctv">
                                            <div class="cover">
                                                <img class="img-cover lazy" src="assets/img/upload/map1.jpg" alt="">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="section-III" style="background-image: url(assets/img/background/bg-section3.png); background-position: center 40px;"> -->
                <div class="section-III" style="background-image: url(assets/img/background/inner-page-bg-section2.png); background-color: var(--color-primary); background-size: contain; background-position: bottom;">
                    <div class="inner-wrapper">
                        <div class="container">
                            <div class="knowledge">
                                <div class="whead" data-aos="fade-down">
                                    <div class="wtxt text-light text-center">
                                        องค์ความรู้
                                    </div>
                                </div>
                                <!-- <div class="slider-wrapper"> -->
                                <div class="kl-slide">
                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                        <div class="item" data-aos="fade-up">
                                            <a href="detail.php" class="link">
                                                <div class="cover">
                                                    <img class="img-cover lazy" src="assets/img/upload/turtle.jpg" alt="">
                                                </div>
                                                <div class="detail">
                                                    <div class="date mb-1">
                                                        <div class="icon">
                                                            <img src="assets/img/icon/calendar.svg" alt="calendar icon">
                                                        </div>
                                                        <div class="txt typo-xs">
                                                            20 มิ.ย. 2564
                                                        </div>
                                                    </div>
                                                    <div class="title text-primary typo-md fw-medium mb-1">เต่ามะเฟือง</div>
                                                    <div class="desc txt-wrap typo-20">กรมทรัพยากรทางทะเลและชายฝั่ง ได้กำหนด
                                                        มาตรการในการดูแลพื้นที่วางไข่เต่ามะเฟือง กรมทรัพยากรทางทะเลและชายฝั่ง ได้กำหนด
                                                        มาตรการในการดูแลพื้นที่วางไข่เต่ามะเฟือง
                                                    </div>
                                                    <div class="read-more">
                                                        <button class="btn btn-border-primary">อ่านต่อ</button>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                                <!-- </div> -->
                                <div class="btn- text-center" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                                    <a href="about-us.php" class="btn btn-wood typo-lg">รู้จัก...เต่ามะเฟือง</a>
                                </div>
                            </div>
                        </div>
                        <div class="img-bg img-gap" style="background-image: url(assets/img/background/bg-section1.png);">
                            <div class="container">
                                <div class="knowledge">
                                    <div class="whead" data-aos="fade-down">
                                        <div class="wtxt text-light text-center">
                                            องค์ความรู้
                                        </div>
                                    </div>
                                    <!-- <div class="slider-wrapper"> -->
                                    <div class="kl-slide">
                                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                                            <div class="item" data-aos="fade-up">
                                                <a href="detail.php" class="link">
                                                    <div class="cover">
                                                        <img class="img-cover lazy" src="assets/img/upload/turtle.jpg" alt="">
                                                    </div>
                                                    <div class="detail">
                                                        <div class="date mb-1">
                                                            <div class="icon">
                                                                <img src="assets/img/icon/calendar.svg" alt="calendar icon">
                                                            </div>
                                                            <div class="txt typo-xs">
                                                                20 มิ.ย. 2564
                                                            </div>
                                                        </div>
                                                        <div class="title text-primary typo-md fw-medium mb-1">เต่ามะเฟือง</div>
                                                        <div class="desc txt-wrap typo-20">กรมทรัพยากรทางทะเลและชายฝั่ง ได้กำหนด
                                                            มาตรการในการดูแลพื้นที่วางไข่เต่ามะเฟือง กรมทรัพยากรทางทะเลและชายฝั่ง ได้กำหนด
                                                            มาตรการในการดูแลพื้นที่วางไข่เต่ามะเฟือง
                                                        </div>
                                                        <div class="read-more">
                                                            <button class="btn btn-border-primary">อ่านต่อ</button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <!-- </div> -->
                                    <div class="btn- text-center" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                                        <a href="about-us.php" class="btn btn-wood typo-lg">รู้จัก...เต่ามะเฟือง</a>
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


    <script>

    </script>

</body>

</html>