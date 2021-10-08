    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script>
        $(document).ready(function(){
        $('.news-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
           responsive: [
        {
        breakpoint: 1024,
        settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
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
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        //Blink for Style
        function JavaBlink() 
        {
            var blinks = document.getElementsByTagName('JavaBlink');
            for (var i = blinks.length - 1; i >= 0; i--) {
                var s = blinks[i];
                s.style.visibility = (s.style.visibility === 'visible') ? 'hidden' : 'visible';
            }
            window.setTimeout(JavaBlink, 1000);
        }
        if (document.addEventListener) document.addEventListener("DOMContentLoaded", JavaBlink, false);
        else if (window.addEventListener) window.addEventListener("load", JavaBlink, false);
        else if (window.attachEvent) window.attachEvent("onload", JavaBlink);
        else window.onload = JavaBlink;
        
        // Time Picker
        $(document).ready(function () {
            $('#datetimepicker3').datetimepicker({
                format: 'HH:mm'
            });
        });
    </script>
</body>

</html>