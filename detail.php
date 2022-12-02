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
                                <div class="bg-inner" data-aos="fade-up">
                                    <div class="content">
                                        <div class="breadcrumb-block">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <ol class="breadcrumb" data-aos="fade-left">
                                                        <li>
                                                            <a href="index.php" class="link">
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
                                        <div class="head-topic" data-aos="fade-up">
                                            <div class="row align-items-center">
                                                <div class="col-md">
                                                    <div class="whead">
                                                        <div class="topic text-primary">
                                                            เต่ามะเฟือง
                                                            Leatherback turtle Dermochelys coriacea
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="info text-primary">
                                                        <div class="views">
                                                            <span class="feather icon-calendar"></span>
                                                            <div class="txt">12 เม.ย. 2565</div>
                                                        </div>
                                                        <div class="date">
                                                            <span class="feather icon-eye"></span>
                                                            <div class="txt">69</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="editor-content" data-aos="fade-up">
                                            <div class="title">
                                                สถานภาพของเต่ามะเฟือง
                                            </div>
                                            <p>
                                                วันที่ 19 มกราคม 2563 รับแจ้งจากชาวบ้าน พบรอยการขึ้นวางไข่ของเต่ามะเฟืองอีก 1 รัง เป็นรังที่ 6 <br>
                                                1. พ.ร.บ.สงวนและคุ้มครองสัตว์ป่าพ.ศ.2535: สัตว์ป่าคุ้มครอง <br>
                                                2. IUCNRed List: VU แนวโน้มประชากร: ลดลง <br>
                                                3. สำนักงานนโยบายและสิ่งแวดล้อม (2548): CR, (2558): CR <br>
                                                4. กรมทรัพยากรทางทะเลและชายฝั่ง: เสนอเป็น CR เนื่องจากสถิติการวางไข่ลดลงมากกว่า 95%ในช่วงเวลา 50 ปี และแหล่งวางไข่ได้รับการคุกคามจากการพัฒนาพื้นที่ชายฝั่ง
                                            </p>
                                            <div class="title">
                                                คุณลักษณะของชนิดพันธุ์
                                            </div>
                                            <p>&emsp;&emsp;เต่ามะเฟือง (Leatherback sea turtle, Dermochelys coriacea) เป็นเต่าทะเลที่มีขนาดใหญ่ที่สุดในโลก ขนาดโตเต็มที่ยาว 210 เซนติเมตร หนัก 900 กิโลกรัม กระดองเป็นหนังหนาสีดำมีจุดประสีขาว มีร่องสันนูนตามยาว 7 สัน อาศัยอยู่ในทะเลเปิดกินแมงกะพรุนเป็นอาหารหลัก ในประเทศไทยพบวางไข่เฉพาะบริเวณชายหาดฝั่งตะวันตกของจังหวัดพังงาและภูเก็ต</p>
                                            <div class="img-desc">
                                                พื้นที่สีแดงแสดงแหล่งวางไข่ของเต่าทะเลในประเทศไทย วงเส้นสีน้ำตาลแสดงพื้นทีพบการวางไข่เต่ามะเฟือง
                                            </div>
                                            <div class="thumb">
                                                <figure>
                                                    <img src="assets/img/upload/content-map.jpg" alt="&quot;กรมทะเล&quot; ปลื้ม โครงการชายหาดปลอดบุหรี่ คว้ารางวัลยอดเยี่ยมระดับโลก ในวันงดสูบบุหรี่โลก">
                                                </figure>
                                            </div>
                                            <div class="title">
                                                หาดทะเลนอก-หาดประพาส จ.ระนอง
                                            </div>
                                            <p>
                                                มีสถิติการวางไข่เต่าทะเลประมาณ 5 รังต่อปี เป็นเต่าชนิดเต่ามะเฟือง เต่าตนุ และเต่าหญ้า หาดประพาสตั้งอยู่ในเขตอุทยานแห่งชาติแหลมสน ซึ่งตั้งอยู่ในคาบสมุทรอินโดจีนทางฝั่งทะเลอันดามันของประเทศไทย ในท้องที่อำเภอเมืองระนอง อำเภอกะเปอร์ กิ่งอำเภอสุขสำราญ จังหวัดระนอง และอำเภอคุระบุรีจังหวัดพังงา อยู่ในระหว่างเส้นรุ้งที่ 9 องศา 16 ลิบดา - 9 องศา 40 ลิบดา เหนือและอยู่ระหว่างเส้นแวงที่ 98 องศา 19 ลิบดา - 98 องศา 31 ลิบดา ตะวันออก มีอาณาเขตติดต่อทิศเหนือจดอ่าวอ่าง ทิศใต้จดป่าสงวนแห่งชาติป่าเลนคลองม่วงกลวง และป่าแหลมหน้าทุ่ง จังหวัดระนอง ป่าสงวนแห่งชาติเทือกเขานมสาว แปลงที่ 2 จังหวัดพังงา และป่าสงวนแห่งชาติป่าทุ่งนาดำ และป่าควนปากเตรียม จังหวัดพังงา ทิศตะวันออกจดคลองเตรียม ทิศตะวันตกจดทะเลอันดามัน
                                            </p>
                                            <p>
                                                ข้อมูล : สถาบันวิจัยและพัฒนาทรัพยากรทางทะเล ชายฝั่งทะเลและป่าชายเลน <br>
                                                วันที่ : 25 ธันวาคม 2561
                                            </p>
                                            <div class="iframe-container">
                                                <iframe class="responsive-iframe" src="https://www.youtube.com/embed/4r9TbKLCus0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>

                                        <div class="gallery" data-aos="fade-up">
                                            <div class="whead">
                                                <div class="topic text-primary">
                                                    แกลลอรี่รูปภาพ
                                                </div>
                                            </div>
                                            <div class="gallery-slider">
                                                <?php for ($i = 1; $i <= 6; $i++) { ?>
                                                    <div class="item" data-aos="fade-up">
                                                        <a href="assets/img/upload/gallery3.jpg" data-fancybox="gallery">
                                                            <div class="cover">
                                                                <img class="img-cover lazy" src="assets/img/upload/gallery3.jpg" alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>

                                        <div class="attachment" data-aos="fade-up">
                                            <div class="whead">
                                                <div class="topic text-primary">
                                                    เอกสารแนบ
                                                </div>
                                            </div>
                                            <div class="attach-slider">
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