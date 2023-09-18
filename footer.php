<!--  Footer Section Start  ------------>

<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="images/footer-logo.png" alt="footer-logo">
                <p class="footer-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero incidunt ratione harum in ducimus. Assumenda, facere dolores placeat deleniti ipsum mollitia vero beatae sapiente voluptatibus fuga! Laudantium reiciendis unde est!</p>
                <div class="cont-footer">
                    <i class="fa fa-phone"></i> Phone: <a href="tel:+44 123 123 4444"> +44 123 123 4444 </a> <br>
                    <i class="fa fa-envelope"></i> Email: <a href="tel:info@delnowacademics"> info@delnowacademics </a>
                </div>

            </div>

            <div class="col-lg-3">
                <div class="footer-link">
                    <h4> Our Services </h4>
                    <ul>
                        <li><a href="sample-service.php">Dissertation Help</a></li>
                        <li><a href="sample-service.php">Assignment Help</a></li>
                        <li><a href="sample-service.php">Essay Help</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-link">
                    <h4> Useful links </h4>
                    <ul>
                        <li><a href="terms-and-conditions.php">Terms And Conditions</a></li>
                        <li><a href="privacy-policy.php">Privacy Policy </a></li>
                        <li><a href="our-process.php">Our Process</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="faqs.php">Faqs</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 ">
                <div class="footer-img">
                    <img class="img-fluid" src="images/US-Payments.png" alt="payment-method"> <br> <br>
                    <img class="img-fluid" src="images/secure.png" alt="secure-payment">
                </div>
            </div>

        </div>

    </div>
</section>

<!--  Footer Section Start  ------------>



<script src="js/jquery.min.js"></script>

<script src="js/menu.js"></script>

<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<script type="text/javascript" src="slick/slick.min.js"></script>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>

<script>
    jQuery(document).ready(function() {
        'use strict';
        $('.logo-slider').slick({
            dots: false,
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 500,
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        $('.testimonial-slider').slick({
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });


    });


    /*ready*/
</script>




</body>

</html>