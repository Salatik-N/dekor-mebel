// Slick slider settings

//slick
$(document).on('ready', function () {
    
    $(".skyfolio-items").slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 1500,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });

});

$(".slider").slick({

    infinite: false,

    responsive: [{

        breakpoint: 99999,
        settings: {
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1500,
            slidesToShow: 3,
            infinite: true
        }

    }, {

        breakpoint: 3500,
        settings: {
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1500,
            slidesToShow: 3,
            infinite: true
        }

    }, {

        breakpoint: 2000,
        settings: {
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1500,
            slidesToShow: 3,
            infinite: true
        }

    }, {

        breakpoint: 1600,
        settings: {
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1500,
            slidesToShow: 3,
            infinite: true
        }

    }, {

        breakpoint: 1200,
        settings: {
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1500,
            slidesToShow: 2,
            infinite: true
        }

    }, {

        breakpoint: 758,
        settings: {
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1500,
            slidesToShow: 1,
            infinite: true,
            dots: true
        }

    }, {

        breakpoint: 300,
        settings: "unslick" // destroys slick

    }]
});

// jQuery(document).ready(function($){
//     function start_slick(){
//         $(".skyfolio-items").slick({
//             arrows: false,
//             autoplay: true,
//             autoplaySpeed: 1500,
//             infinite: true,
//             slidesToShow: 3,
//             slidesToScroll: 3
//         });
//     }
//     window.setTimeout( start_slick, 2000 );
//   });

// Offers on service page

var offerButton1 = document.querySelectorAll('.offer-button-1');
var offerButton2 = document.querySelectorAll('.offer-button-2');
var offerButton3 = document.querySelectorAll('.offer-button-3');

var offerContent1 = document.getElementById('offer-1');
var offerContent2 = document.getElementById('offer-2');
var offerContent3 = document.getElementById('offer-3');

var offerCTA1 = document.getElementById('offer-cta-1');
var offerCTA2 = document.getElementById('offer-cta-2');
var offerCTA3 = document.getElementById('offer-cta-3');

var offerCTABasic = document.getElementById('.offer-cta-basic');

function showOffer1() {
    offerContent1.classList.remove("hidden");
    offerContent2.classList.add('hidden');
    offerContent3.classList.add('hidden');
    offerCTA1.classList.style.display = "flex";
    offerCTA2.classList.style.display = "none";
    offerCTA3.classList.style.display = "none";
    offerCTABasic.classList.add('hidden');
    $.scrollTo($('#offer-1'), 1000);
    sticky.update();
};

function showOffer2() {
    offerContent1.classList.add('hidden');
    offerContent2.classList.remove("hidden");
    offerContent3.classList.add('hidden');
    offerCTA1.classList.style.display = "none";
    offerCTA2.classList.style.display = "flex";
    offerCTA3.classList.style.display = "none";
    offerCTABasic.classList.add('hidden');
    $.scrollTo($('#offer-2'), 1000);
    sticky.update();
};

function showOffer3() {
    offerContent1.classList.add('hidden');
    offerContent2.classList.add('hidden');
    offerContent3.classList.remove("hidden");
    offerCTA1.classList.style.display = "none";
    offerCTA2.classList.style.display = "none";
    offerCTA3.classList.style.display = "flex";
    offerCTABasic.classList.add('hidden');
    $.scrollTo($('#offer-3'), 1000);
    sticky.update();
};

// functions for adding and removing classes



function activeStatusButton1(e) {
    var elems = document.querySelectorAll(".active");
    [].forEach.call(offerButton1, function (el) {
        el.classList.remove("active");
    });
    e.target.className = "active";
}

function activeStatusButton2(e) {
    var elems = document.querySelectorAll(".active");
    [].forEach.call(offerButton2, function (el) {
        el.classList.remove("active");
    });
    e.target.className = "active";
}

function activeStatusButton3(e) {
    var elems = document.querySelectorAll(".active");
    [].forEach.call(offerButton3, function (el) {
        el.classList.remove("active");
    });
    e.target.className = "active";
}


// make functions on click

offerButton1.forEach(function (btn1) {
    btn1.addEventListener('click', function () {
        showOffer1();
        activeStatusButton1();
    });
    var sidebar = new StickySidebar('.sticky-sidebar', {
        topSpacing: 40,
        bottomSpacing: 20,
        containerSelector: '.sticky-container',
        innerWrapperSelector: '.sticky-sidebar__inner'
    });
});

offerButton2.forEach(function (btn2) {
    btn2.addEventListener('click', function () {
        showOffer2();
        activeStatusButton2();
    });
    var sidebar = new StickySidebar('.sticky-sidebar2', {
        topSpacing: 40,
        bottomSpacing: 20,
        containerSelector: '.sticky-container2',
        innerWrapperSelector: '.sticky-sidebar2__inner'
    });
});

offerButton3.forEach(function (btn3) {
    btn3.addEventListener('click', function () {
        showOffer3();
        activeStatusButton3();
    });
    var sidebar = new StickySidebar('.sticky-sidebar3', {
        topSpacing: 40,
        bottomSpacing: 20,
        containerSelector: '.sticky-container3',
        innerWrapperSelector: '.sticky-sidebar3__inner'
    });
});


