// JavaScript Document
        $(function() {
            var myElement = document.getElementById('banner-main')
            var hm = new Hammer(myElement);
            hm.on("swipeleft", function() {
                $('.next').carousel('next')
            })
            hm.on("swiperight", function() {
                $('.nextup').carousel('prev')
            })
        })

