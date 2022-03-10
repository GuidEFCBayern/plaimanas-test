<?php date_default_timezone_set('Asia/Bangkok'); $valUpdate="?v=".date('Ymd').time();?>
<!DOCTYPE html>
<html lang="EN">

<head>
    <?php 
	include('inc/metatag.php');
	include('inc/loadcss.php');
	?>
</head>
<body>

    <?php include('inc/preloader.php'); ?>
    
    <div class="global-container">
        <?php include('inc/header.php'); ?>

        <section class="site-container">

            <div class="main-slider slick-limitdot" data-aos="fade-up">
                <?php for($i=1;$i<=1;$i++){ ?>
                    <div class="item image">
                        <div class="wrapper">
                            <figure class="cover">
                                <div class="slide-image slide-media" style="background-image:url('assets/img/upload/mockup.jpg');">
                                    <img data-lazy="assets/img/upload/mockup.jpg" class="lazy">
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="item video">
                        <div class="wrapper">
                            <div class="video-container">
                                <video class="slide-video slide-media" autoplay loop muted>
                                    <source src="assets/img/upload/mockup.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="container">
                <div class="wg-item-list">
                    <ul class="item-list">
                        <li>
                            <div class="box">
                                <a href="#" class="link">
                                    <div class="thumb">
                                        <div class="text-box">
                                            <div class="mark-effect"></div>
                                            <div id="trigger1"></div>
                                            <h1 class="title" id="pin1">NEW</h1>
                                            <div class="height section-pin1"></div>
                                        </div>
                                        <figure class="cover" data-aos="fade-up">
                                            <img src="assets/img/upload/mockup2.jpg" alt="Sed egestas, nibh a condimentum imperdiet" class="lazy">
                                        </figure>
                                    </div>
                                    <div class="content">
                                        <h4 class="txt" data-aos="fade-down">Sed egestas, nibh a condimentum imperdiet</h4>
                                        <p class="desc" data-aos="fade-up">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare, nisl non rhoncus commodo,
                                            turpis elit ultricies justo, vitae molestie quam justo ut lacus. Proin vitae
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <a href="#" class="link">
                                    <div class="thumb">
                                        <div class="text-box">
                                            <div class="mark-effect"></div>
                                            <div id="trigger2"></div>
                                            <h2 class="title" id="pin2">things</h2>
                                            <div class="height section-pin2"></div>
                                        </div>
                                        <figure class="cover" data-aos="fade-up">
                                            <img src="assets/img/upload/mockup3.jpg" alt="Sed egestas, nibh a condimentum imperdiet" class="lazy">
                                        </figure>
                                    </div>
                                    <div class="content">
                                        <h4 class="txt" data-aos="fade-down">Sed egestas, nibh a condimentum imperdiet</h4>
                                        <p class="desc" data-aos="fade-up">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare, nisl non rhoncus commodo,
                                            turpis elit ultricies justo, vitae molestie quam justo ut lacus. Proin vitae
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <a href="#" class="link">
                                    <div class="thumb">
                                        <div class="text-box -flex-cen">
                                            <h3 class="title">collection 01</h3>
                                        </div>
                                        <div class="video-container">
                                            <video class="slide-video slide-media" autoplay loop muted>
                                                <source src="assets/img/upload/mockup.mp4" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                        <figure class="cover" data-aos="fade-up">
                                            <img src="assets/img/upload/mockup4.jpg" alt="Sed egestas, nibh a condimentum imperdiet" class="lazy">
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <a href="#" class="link">
                                    <div class="thumb">
                                        <div class="text-box -flex-cen">
                                            <h4 class="title">collection 02</h4>
                                        </div>
                                        <div class="video-container">
                                            <video class="slide-video slide-media" autoplay loop muted>
                                                <source src="assets/img/upload/mockup.mp4" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                        <figure class="cover" data-aos="fade-right">
                                            <img src="assets/img/upload/mockup5.jpg" alt="Sed egestas, nibh a condimentum imperdiet" class="lazy">
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <a href="#" class="link">
                                    <div class="thumb">
                                        <div class="text-box -flex-cen">
                                            <h4 class="title">collection 03</h4>
                                        </div>
                                        <div class="video-container">
                                            <video class="slide-video slide-media" autoplay loop muted>
                                                <source src="assets/img/upload/mockup.mp4" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                        <figure class="cover" data-aos="fade-left">
                                            <img src="assets/img/upload/mockup6.jpg" alt="Sed egestas, nibh a condimentum imperdiet" class="lazy">
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </section>

        <?php
        	include('inc/footer.php');
        	include('inc/modal.php');
        ?>
    </div>

    <?php include('inc/loadscript.php'); ?>

</body>

</html>