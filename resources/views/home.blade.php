<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Teamwork Official</title>
        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>


{{--        Edit--}}
        <link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/fontAwesome.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/light-box.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/owl-carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/templatemo-style.css') }}">
        <script src="{{ asset('home/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    </head>
    <body>

    <div id="home">
    </div>
{{--    <embed src="{{ asset('background-music.mp3') }}"  autostart="true" loop="true" height="0">--}}
    <script src="{{ mix('js/app.js') }}"></script>

{{--    Script --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="{{ asset('home/js/vendor/bootstrap.min.js') }}"></script>

    <script src="{{ asset('home/js/plugins.js') }}"></script>
    <script src="{{ asset('home/js/main.js') }}"></script>

    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();

            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;

            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }

            lastScrollTop = st;
        }
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        function difference(){
            // const axios = require('axios');
            diff = [];
            axios.get('http://worldtimeapi.org/api/timezone/Asia/Dhaka')
                .then(function(response){
                    // console.log(response);

                    var month = [0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

                    var dt1 = response.data.datetime;
                    // console.log(dt1);
                    var m1 = parseInt(dt1.substr(5,6));
                    var d1 = parseInt(dt1.substr(8,9));
                    var h1 = parseInt(dt1.substr(11,12));
                    var mn1 = parseInt(dt1.substr(14,15));
                    var s1 = parseInt(dt1.substr(17,18));

                    // console.log(dt1+" "+m1+" "+d1+" "+h1+" "+mn1+" "+s1);
                    var dt2 = new Date("2019-01-15 21:30:00")
                    var m2 = dt2.getMonth()+1;
                    var d2 = dt2.getDate();
                    var h2 = dt2.getHours();
                    var mn2 = dt2.getMinutes();
                    var s2 = dt2.getSeconds();
                    dt1 = new Date(2019, m1, d1, h1, mn1,s1).getTime();
                    dt2 = new Date(2019, m2, d2, h2, mn2, s2).getTime();


                    // console.log(dt2+" "+m2+" "+d2+" "+h2+" "+mn2+" "+s2);
                    var s3,mn3, h3, d3, m3 = 0;

                    if(s2 >= s1){
                        s3 = s2-s1;
                    } else {
                        s3 = 60-s1+s2;
                        mn1++;
                    }

                    if(mn2 >= mn1){
                        mn3 = mn2-mn1;
                    } else {
                        mn3 = 60-mn1+mn2;
                        h1++;
                    }

                    if(h2 >= h1){
                        h3 = h2 - h1;
                    } else {
                        h3 = 24-h1+h2;
                        d1++;

                    }
                    if(d2 >= d1){
                        d3 = d2 - d1;
                    } else {
                        d3 = month[d1]-d1+d2;
                        m1++;
                    }
                    if(m2 >= m1){
                        m3 = m2 - m1;
                    } else {
                        m3 = 12-m1+m2;
                    }
                    console.log(m3+"/"+d3+" "+h3+":"+mn3+":"+s3);
                    console.log(dt2-dt1);
                });
        }

        var x = setInterval(function(){

        }, 1000);
    </script>
    </body>
</html>
