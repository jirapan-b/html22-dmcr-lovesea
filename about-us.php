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

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

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
                                <div class="bg-inner" data-aos="fade-up">
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
                                                        <li>
                                                            <a href="#" class="link">
                                                                รู้จัก....เต่ามะเฟือง
                                                            </a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="javascript:void(0);" class="link">
                                                                เกี่ยวกับเรา
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
                                        <div class="head-topic" data-aos="fade-up">
                                            <div class="row align-items-center">
                                                <div class="col-md">
                                                    <div class="whead">
                                                        <div class="topic text-primary">
                                                            เกี่ยวกับเรา
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="info text-primary">
                                                        <div class="date">
                                                            <span class="feather icon-calendar"></span>
                                                            <div class="txt">12 เม.ย. 2565</div>
                                                        </div>
                                                        <div class="views">
                                                            <span class="feather icon-eye"></span>
                                                            <div class="txt">69</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="editor-content" data-aos="fade-up">
                                            <!-- <?php for ($i = 1; $i <= 2000; $i++) { ?>
                                                test
                                                <?php } ?> -->
                                            <p>
                                                กรมทรัพยากรทางทะเลและชายฝั่ง โดยสำนักงานทรัพยากรทางทะเลและชายฝั่งที่ 6 (พังงา) ศูนย์วิจัยทรัพยากรทางทะเลและชายฝั่งทะเลอันดามันตอนบน และศูนย์ปฏิบัติการอุทยานแห่งชาติทางทะเลที่ 2 (ภูเก็ต) รับแจ้งจาก คุณสมยศ เสาเวียง ชาวบ้านท่านุ่น พบร่องรอยการขึ้นมาวางไข่ของเต่ามะเฟือง บริเวณชายหาดบางขวัญ ม.8 ต.โคกกลอย อ.ตะกั่วทุ่ง จ.พังงา ผลการตรวจสอบพื้นที่ พบที่พิกัด 420999 E 909142 N (ห่างจากศูนย์เฝ้าระวังฯ หาดบางขวัญ ไปทางทิศเหนือ 1,000 เมตร) วัดขนาดความกว้างของรอยพายคู่หน้าได้ 160 ซม. ขนาดความกว้างช่วงอก 100 ซม. ขุดค้นหาไข่เต่ามะเฟืองพบที่ระดับความลึก 65 ซม. ตำแหน่งที่วางไข่ไม่ได้รับผลกระทบจากระดับน้ำทะเลท่วมถึง จึงติดตั้งเครื่องวัดอุณหภูมิ เพื่อติดตามพัฒนาการของไข่ และกลบหลุม กั้นคอก เพื่อเฝ้าระวังให้เป็นไปตามหลักวิชาการต่อไป
                                            </p>
                                            <div class="thumb">
                                                <figure>
                                                    <img src="assets/img/upload/เต่ามะเฟือง.jpg" alt="&quot;กรมทะเล&quot; ปลื้ม โครงการชายหาดปลอดบุหรี่ คว้ารางวัลยอดเยี่ยมระดับโลก ในวันงดสูบบุหรี่โลก">
                                                </figure>
                                            </div>
                                        </div>

                                        <div class="attachment" data-aos="fade-up">
                                            <div class="whead">
                                                <div class="topic text-primary">
                                                    เอกสารแนบ
                                                </div>
                                            </div>
                                            <div class="attach-slider" data-aos="fade-up">
                                                <?php for ($i = 1; $i <= 3; $i++) { ?>
                                                    <div class="item">
                                                        <div class="box">
                                                            <div class="row">
                                                                <div class="col-sm-auto pb-2">
                                                                    <div class="icon">
                                                                        <img src="assets/img/static//pdf-graphic.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="title text-primary typo-md fw-medium mb-1">
                                                                        พระราชบัญญัติส่งเสริมการบริหารจัดการทรัพยากรทาง ทะเลและชายฝั่ง พ.ศ. 2558.pdf
                                                                    </div>
                                                                    <div class="row align-items-end">
                                                                        <div class="col-xl">
                                                                            <div class="desc">
                                                                                <div class="type">
                                                                                    ประเภทไฟล์ : <span>PDF</span>
                                                                                </div>
                                                                                <div class="download-total">
                                                                                    จำนวนดาวน์โหลด : <span>45</span>
                                                                                </div>
                                                                                <div class="size">
                                                                                    ขนาด : <span>0.06 mb</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-auto">
                                                                            <a href="#" class="btn btn-border-primary">
                                                                                Download
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="btn-back" data-aos="fade-left">
                                            <a href="#" class="btn btn-border-primary">
                                                <span class="feather icon-arrow-left"></span>
                                                ย้อนกลับ
                                            </a>
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