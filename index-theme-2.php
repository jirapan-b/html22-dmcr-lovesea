<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/metatag.php'); ?>
    <?php include('inc/loadstyle.php'); ?>
    <style>
        :root {
            --color-primary: #ff2c66;

            /* color player button */
            --color-gradient-style: linear-gradient(180deg, #ff2c66 0%, #fc8896 100%);
            /* --color-footer: #d5a4ca; */
        }
    </style>
</head>

<body>

    <div class="global-container">
        <?php include('inc/header.php'); ?>

        <section class="site-container">
            <div class="home-page">
                <div class="section-I" style="background-image: url(assets/img/background/pink-bg-section1.png); background-position: center -65px;">
                    <div class="inner-wrapper">
                        <div class="graphic -tree">
                            <img src="assets/img/static/pink-tree.png" alt="tree graphic">
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
                                            <div class="marquee">
                                                <a href="detail.php">
                                                    <span>
                                                        วันที่ 19 มกราคม 2563 รับแจ้งจากชาวบ้าน พบรอยการขึ้นวางไข่ของเต่ามะเฟืองอีก 1 รัง เป็นรังที่ 6 โดยมีขนาดความกว้างช่วงพาย 180 ซม. ความกว้าง
                                                    </span>
                                                </a>
                                            </div>
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
                                            <div class="desc typo-lg">วางไข่ครั้งแรก 19 มกราคม 2563 <br>
                                                วันที่ 326 หลังการวางไข่</div>
                                            <!-- <a href="#" class="btn btn-wood typo-lg">ไปหาดบ่อดาน 2</a> -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="desc typo-md">
                                                วันที่ 22 มกราคม 2564 เวลา 06.00 น. กรมทรัพยากรทางทะเลและชายฝั่ง โดยสำนักงานทรัพยากรทางทะเลและชายฝั่งที่ 6 (พังงา) ศูนย์วิจัยทรัพยากรทางทะเลและชายฝั่งทะเลอันดามันตอนบน และศูนย์ปฏิบัติการอุทยานแห่งชาติทางทะเลที่ 2 (ภูเก็ต) รับแจ้งจาก คุณสมยศ เสาเวียง ชาวบ้านท่านุ่น พบร่องรอยการขึ้นมาวางไข่ของเต่ามะเฟือง บริเวณชายหาดบางขวัญ ม.8 ต.โคกกลอย อ.ตะกั่วทุ่ง จ.พังงา ผลการตรวจสอบพื้นที่ พบที่พิกัด 420999 E 909142 N (ห่างจากศูนย์เฝ้าระวังฯ หาดบางขวัญ ไปทางทิศเหนือ 1,000 เมตร) วัดขนาดความกว้างของรอยพายคู่หน้าได้ 160 ซม. ขนาดความกว้างช่วงอก 100 ซม. ขุดค้นหาไข่เต่ามะเฟืองพบที่ระดับความลึก 65 ซม. ตำแหน่งที่วางไข่ไม่ได้รับผลกระทบจากระดับน้ำทะเลท่วมถึง จึงติดตั้งเครื่องวัดอุณหภูมิ เพื่อติดตามพัฒนาการของไข่ และกลบหลุม กั้นคอก เพื่อเฝ้าระวังให้เป็นไปตามหลักวิชาการต่อไป
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="graphic wave">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1280.991" height="103.855" viewBox="0 0 1390.991 103.855">
                                        <defs>
                                            <!-- <radialGradient id="radial-gradient" cx="0.103" cy="0.752" r="6.403" gradientTransform="matrix(0.027, 1, -0.147, 0.004, -0.014, -0.275)" gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#ffe4ba" />
                                                <stop offset="0.297" stop-color="#ffe3b8" />
                                                <stop offset="1" stop-color="#ffdca0" />
                                            </radialGradient> -->
                                            <radialGradient id="radial-gradient" cx="0.103" cy="0.752" r="6.403" gradientTransform="matrix(0.027, 1, -0.147, 0.004, -0.014, -0.275)" gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#ffddd3" />
                                                <stop offset="0.297" stop-color="#ffdad1" />
                                                <stop offset="1" stop-color="#ffccca" />
                                            </radialGradient>
                                        </defs>
                                        <path id="wave1" data-name="wave1" d="M2231.623,921.183s-1.482-88.6,78.377-87.366,189.231,44.762,301,32.452,170.177-30.2,389.949-4.344,176.321-47.8,327.021-13.334,217.636-32.008,262.03-14.773,30.58,100.947,30.58,100.947Z" transform="translate(-2231.621 -830.91)" fill="url(#radial-gradient)" />
                                        <path id="wave2" data-name="wave2" d="M3622.611,921.183s1.482-88.6-78.377-87.365-189.231,44.762-301,32.452-170.177-30.2-389.949-4.344-176.321-47.8-327.021-13.334-217.636-32.008-262.03-14.773-30.58,100.947-30.58,100.947Z" transform="translate(-2231.621 -830.91)" fill="url(#radial-gradient)" style="visibility: hidden;" />
                                    </svg>
                                </div>
                            </div>
                            <div class="content -III">
                                <div class="cctv-ch" data-aos="fade-up">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-10 col-12">
                                            <div class="frame">
                                                <div class="broadcast">
                                                    <div class="top-ch typo-xl fw-medium">CCTV 01</div>
                                                    <div class="iframe-container">
                                                        <iframe id="videoContainer-section-1" class="responsive-iframe" src="https://g3.ipcamlive.com/player/player.php?alias=nakwan1&amp;autoplay=1" allowfullscreen=""></iframe>
                                                    </div>
                                                </div>
                                                <div class="bg">
                                                    <img src="assets/img/static/tablet.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="channel">
                                                <div class="ch-slider">
                                                    <div class="item">
                                                        <a href="#" class="ch active" id="cctv-btn">
                                                            <div class="thumbnail">
                                                                <img src="assets/img/static/egg-active.png" alt="">
                                                                <div class="player-btn">
                                                                    <!-- <span class="fa fa-play"></span> -->
                                                                    <span class="fa fa-stop"></span>
                                                                </div>
                                                                <div class="data">
                                                                    <div class="txt">
                                                                        CCTV
                                                                    </div>
                                                                    <div class="ch-no text-primary text-stroke-48">
                                                                        01
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                        <div class="item">
                                                            <a href="#" class="ch" id="cctv-btn">
                                                                <div class="thumbnail">
                                                                    <img src="assets/img/static/egg.png" alt="">
                                                                    <div class="player-btn">
                                                                        <span class="fa fa-play"></span>
                                                                        <!-- <span class="fa fa-stop"></span> -->
                                                                    </div>
                                                                    <div class="data">
                                                                        <div class="txt">
                                                                            CCTV
                                                                        </div>
                                                                        <div class="ch-no text-primary text-stroke-48">
                                                                            01
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-II" style="background-image: url(assets/img/background/pink-bg-section2.png);">
                    <div class="inner-wrapper">
                        <div class="graphic -II">
                            <img src="assets/img/static/pink-tree.png" alt="tree graphic">
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
                <div class="section-III" style="background-image: url(assets/img/background/pink-bg-section3.png); background-position: center 40px;">
                    <div class="inner-wrapper">
                        <div class="container">
                            <div class="knowledge">
                                <div class="whead" data-aos="fade-down">
                                    <div class="wtxt text-light text-center">
                                        องค์ความรู้
                                    </div>
                                </div>
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
                                                            <img src="assets/img//icon/calendar.svg" alt="calendar icon">
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
                                <div class="btn- text-center" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                                    <a href="about-us.php" class="btn btn-wood typo-lg">รู้จัก...เต่ามะเฟือง</a>
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