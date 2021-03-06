</main>

<footer>
    <div class="footer-info">
        <div class="contact-us">
            <h2>Contact Us</h2>
            <p>
                Cabot Cruises<br>
                1268 E Center St.<br>
                Spanish Fork, UT 84660
            </p>
            <h2>Phone:</h2>
            <p><a href="tel:+18005559450">1-800-555-9450</a></p>
            <h2>Hours of Operation:</h2>
            <p>Monday - Friday 9am - 5pm</p>
        </div>
        <div class="newsletter">
            <h2>News Letter</h2>
            <p>
                Subscribe to our email list and stay up-to-date with our honest offers and latest specials.
            </p>
            <input type="email">
            <button>Subscribe</button>
        </div>
        <div class="why-cabot">
            <h2>Why Cabot Cruises</h2>
            <p>
                Cabot Cruises is a travel agency providing the best cruise deals on our online travel website.
                We can help you with all inclusive vaca8ons including discounted cruises.
                </br>
                We do not sell travel to residents of Delaware, Iowa, Florida, Hawaii and Washington state because
                those states are just weird. If you are a resident of one of these states, call your congressman and tell them
                to change the regulaions.
            </p>
        </div>
    </div>
    <div class="social-wrap">
        <div class="social-icons">
            <a><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="facebook logo"></a>
            <a><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="instagram logo"></a>
            <a><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="twitter logo"></a>
            <a><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.svg" alt="youtube logo"></a>
            <a><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="linkedin logo"></a>
        </div>
    </div>
    <p class="copyright">© 2020 &bull; Austin Wright &bull; <a href="#">Login</a></p>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>
<script>
    const hamburger = document.getElementById("menu");
    const x = document.getElementById('x');
    const ddMenu = document.getElementById('dd-menu');
    const ddSubMenu = document.getElementById('dd-sub-menu');
    const subNav = document.getElementById('sub-nav');
    const lgDdSubMenu = document.getElementById('lg-dd-menu');
    $('.sub-menu').css('display', 'none');
    $('.agent-menu').children('a').click( function(){
        console.log('Clicked Agent Menu');
        if($('.sub-menu').css('display') === 'none'){
            $('.sub-menu').css('display', 'flex');
        } else {
            $('.sub-menu').css('display', 'none');
        }
    })
    function showMenu() {
        menu.style.display = "none";
        x.style.display = "initial";
        ddMenu.style.display = "flex";
    }
    function hideMenu() {
        menu.style.display = "initial";
        x.style.display = "none";
        ddMenu.style.display = "none";
        ddSubMenu.style.display = 'none';
    }
    function subMenu() {
        ddSubMenu.style.display = ddSubMenu.style.display === 'none' ?
        'flex'
        :
        'none';
    }
    function subNavMenu() {
        subNav.style.display = 'flex';
    }
    function subNavMenuOff() {
        subNav.style.display = 'none';
    }
    function lgSubMenu() {
        subNav.style.display = subNav.style.display === 'none' ? 'flex' : 'none';
    }
        $('.hero-slider').slick({
            arrows: false,
            dots: true,
            draggable: true,
            swipe: true,
            toucheToMove: true,
            cssEase: 'ease-out'
        })
    $(document).ready(function () {
        var url = window.location;
        $('ul li a[href="'+ url +'"]').addClass('active');
        $('ul li a').filter(function() {
             return this.href == url;
        }).addClass('active');
    });
    (function(){
        let lazyLoadInstances = [];
        let callback_enter = function(el) {
            let oneLL = new LazyLoad({
                container: el
            });
            lazyLoadInstances.push(oneLL);
        }
        let lazyLazy = new LazyLoad({
            elements_selector: ".lazyContainer",
            callback_enter: callback_enter
        });
        console.log("load");
    })();
</script>
<script type="application/ld+json">
    {
        "@type": "TravelAgency",
        "name": "Cabot Cruises",
        "openHours": "Mon-Fri 09:00-17:00",
        "phone": "+18005559450",
        "address": {
            "@type": "PostalAddress",
            "street": "1268 E Center St.",
            "city": "Spanish Fork",
            "state": "UT",
            "zipCode": "84660"
        }
    }
</script>
</body>
</html>