document.onreadystatechange = function() {
    if (document.readyState === 'complete') {
        initializeHeroVideo();
        initializeHeroTestimonyVideo();
        calcAuthenticCtx();
    }
}

window.addEventListener('load', function() {
    calcAuthenticCtx();
});

window.addEventListener('resize', function() {
    calcAuthenticCtx();
});

/**
 * STICKY HEADER
 */
window.onscroll = function() { stickyHeader() };

// Get the header
var header = document.getElementById("header");
var main = document.getElementById("main");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickyHeader() {
    if (window.scrollY > sticky) {
        document.body.classList.add("sticky-header");
    } 
    else {
        document.body.classList.remove("sticky-header");
    }
}

/**
 * HERO VIDEO
 */
var initializeHeroVideo = function() {
    // check video element is exist
    if (document.getElementById('my-video')) {
        var player = videojs('my-video');
        var playButton = document.getElementById('video-play');

        if (playButton) {
            playButton.addEventListener('click', function(event) {
                player.muted = false;
                player.play();

                playButton.classList.add('d-none');
            });
        }

        player.on('ended', function() {
            playButton.classList.remove('d-none')
        });
    }
}

var calcAuthenticCtx = function() {
    var windowWidth = window.innerWidth;
    var containerWidth = document.querySelector('.container').offsetWidth;
    var sideWidth = (windowWidth - containerWidth) / 2;
    var wrapEl$ = document.getElementById('hero-authentic');

    if (wrapEl$) {
        wrapEl$.style.paddingRight = sideWidth + 'px';
    }
}

/**
 * HERO PARTNER SWIPER
 */
const swiperPartner = new Swiper('.hero-partner__slider-swiper', {
    // Optional parameters
    loop: false,

    // Navigation arrows
    navigation: {
        nextEl: '.hero-partner__navigation-next',
        prevEl: '.hero-partner__navigation-prev',
    },

    // Default parameters
    slidesPerView: 1,
    spaceBetween: 10,
    // Responsive breakpoints
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 4,
            spaceBetween: 20
        }
    }
});

/**
 * HERO TESTIMONY SWIPER
 */
const swiperTestimony = new Swiper('.hero-testimony__slider-swiper', {
    // Optional parameters
    loop: false,

    // Navigation arrows
    navigation: {
        nextEl: '.hero-testimony__swiper-next',
        prevEl: '.hero-testimony__swiper-prev',
    },

    // Default parameters
    slidesPerView: 1,
    spaceBetween: 0,
});

/**
 * HERO TESTIMONY VIDEO
 */
var initializeHeroTestimonyVideo = function() {
    var testimonySliders = document.getElementsByClassName('hero-testimony__item');

    for (var i = 0; i < testimonySliders.length; i++) {
        var slideEl$ = testimonySliders[i];
        var videoEl$ = slideEl$.getElementsByTagName('video')[0];
        var videoId = videoEl$.getAttribute('id');

        var player = videojs(videoId);
        // var playButtonEl$ = slideEl$.getElementById('video-play');

        player.aspectRatio('7:6');

        // if (playButtonEl$) {
        //     playButtonEl$.addEventListener('click', function(event) {
        //         player.muted = false;
        //         player.play();

        //         playButtonEl$.classList.add('d-none');
        //     });
        // }

        // player.on('ended', function() {
        //     playButtonEl$.classList.remove('d-none')
        // });
    }
}

/**
 * HERO TEAMWORK SLIDER
 */
const swiperTeamWork = new Swiper('.hero-teamwork__slider-swiper', {
    // Optional parameters
    loop: false,
    autoHeight: true, //enable auto height

    // Navigation arrows
    navigation: {
        nextEl: '.hero-teamwork__swiper-next',
        prevEl: '.hero-teamwork__swiper-prev',
    },

    // Default parameters
    slidesPerView: 2,
    spaceBetween: 60,
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 2,
            spaceBetween: 40
        }
    }
});

/**
 * HERO ARTICLE SLIDER
 */
const swiperArticleLarge = new Swiper('.hero-article__swiper-large', {
    // Optional parameters
    loop: false,
    autoHeight: true, //enable auto height

    // Navigation arrows
    navigation: {
        nextEl: '.hero-article__large-next',
        prevEl: '.hero-article__large-prev',
    },
    pagination: {
        el: '.hero-article__pagination-large',
        renderBullet: function (index, className) {
          return '<span class="' + className + '"></span>';
        },
    },

    // Default parameters
    slidesPerView: 3,
    spaceBetween: 50,
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is >= 640px
        768: {
            slidesPerView: 3,
            spaceBetween: 50
        }
    }
});

/**
 * HERO ARTICLE SLIDER SMALL
 */
const swiperArticleSmall = new Swiper('.hero-article__swiper-small', {
    // Optional parameters
    loop: false,
    autoHeight: true, //enable auto height

    // Navigation arrows
    navigation: {
        nextEl: '.hero-article__small-next',
        prevEl: '.hero-article__small-prev',
    },
    pagination: {
        el: '.hero-article__pagination-small',
        renderBullet: function (index, className) {
          return '<span class="' + className + '"></span>';
        },
    },

    // Default parameters
    slidesPerView: 2,
    spaceBetween: 30,
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is >= 640px
        768: {
            slidesPerView: 3,
            spaceBetween: 20
        }
    }
});

/**
 * HERO ARTICLE SLIDER SMALL
 */
const swiperLokerFeatured = new Swiper('.hero-loker-featured__slider-swiper', {
    // Optional parameters
    loop: false,
    autoHeight: true, //enable auto height

    // Default parameters
    slidesPerView: 2,
    spaceBetween: 30,
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 640px
        768: {
            slidesPerView: 2,
            spaceBetween: 30
        }
    },
    pagination: {
        el: ".hero-loker-featured__slider-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            var number = index + 1;

            if (index.toString().length == 1) {
                number = '0' + number;
            }

            return '<span class="' + className + '">' + number + "</span>";
        },
    },
});

/**
 * HERO BLOG SLIDER
 */
const blogSliderThumb = new Swiper('.hero-blog-slider__swiper-thumb', {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});

const blogSlider = new Swiper('.hero-blog-slider__swiper', {
    // Optional parameters
    loop: false,
    autoHeight: true, //enable auto height

    // Default parameters
    slidesPerView: 1,
    spaceBetween: 0,
    thumbs: {
        swiper: blogSliderThumb,
    },
});

/**
 * HERO UPCOMING EVENTS
 */
const swiperUpcomingEvent = new Swiper('.hero-upcoming-event__swiper', {
    // Optional parameters
    loop: false,
    autoHeight: true, //enable auto height

    // Navigation arrows
    navigation: {
        nextEl: '.hero-article__large-next',
        prevEl: '.hero-article__large-prev',
    },

    // Default parameters
    slidesPerView: 3,
    spaceBetween: 40,
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is >= 640px
        768: {
            slidesPerView: 3,
            spaceBetween: 40
        }
    }
});

/**
 * HERO NEW ARTICLE SWIPER
 */
const newArticleSwiper = new Swiper('.hero-new-article__swiper', {
    // Optional parameters
    loop: false,
    autoHeight: true, //enable auto height

    // Navigation arrows
    navigation: {
        nextEl: '.hero-article__large-next',
        prevEl: '.hero-article__large-prev',
    },
    pagination: {
        el: '.hero-article__pagination',
        renderBullet: function (index, className) {
          return '<span class="' + className + '"></span>';
        },
    },

    // Default parameters
    slidesPerView: 3,
    spaceBetween: 40,
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is >= 640px
        768: {
            slidesPerView: 3,
            spaceBetween: 40
        }
    }
});

/**
 * FULLPAGE JS
 */
// new fullpage('#fullpagex', {
//     // Get your license at https://alvarotrigo.com/fullPage/pricing/
//     licenseKey: 'YOUR LICENSE KEY HERE '
// });

/**
 * Masonry
 */
$('.hero-intro__grid').masonry({
    // options
    itemSelector: '.mgrid-item',
    percentPosition: true,
    gutter: 10
});