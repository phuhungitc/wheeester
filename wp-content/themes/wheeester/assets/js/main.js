var App = {
  headerScroll: function () {
    var header = jQuery('#header_site'); // Assuming your header element has the 'header' tag or class
    if (jQuery(window).scrollTop() > 0) {
      header.addClass('scrolled'); // Add the 'scrolled' class if the scroll position is greater than zero
    }
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 0) {
        header.addClass('scrolled'); // Add the 'scrolled' class when the user scrolls down
      } else {
        header.removeClass('scrolled'); // Remove the 'scrolled' class when the user scrolls back to the top
      }
    });
  },
  btcSlider: function () {
    if (jQuery('#text-carousel').length) {
      var splide = new Splide('#text-carousel', {
        type: 'loop',
        perPage: 1,
        autoWidth: true,
        autoScroll: {
          speed: 3,
        },
        arrows: false,
        pagination: false,
        breakpoints: {
          991: {
            perPage: 1,
          },
        }
      });
      splide.mount(window.splide.Extensions);
    }
    if (jQuery('#gallery-carousel').length) {
      var splide = new Splide('#gallery-carousel', {
        type: 'loop',
        perPage: 1,
        autoWidth: true,
        autoScroll: {
          speed: 3,
        },
        arrows: true,
        pagination: false,
        breakpoints: {
          991: {
            perPage: 1,
          },
        },
        classes: {
          arrows: 'jarrows',
          arrow: 'jarrow',
          prev: 'splide__arrow--prev jprev',
          next: 'splide__arrow--next jnext',
        },
      });
      splide.mount(window.splide.Extensions);
    }
    if (jQuery('#copyright-carousel').length) {
      var splide = new Splide('#copyright-carousel', {
        type: 'loop',
        perPage: 1,
        autoWidth: true,
        autoScroll: {
          speed: 3,
        },
        arrows: false,
        pagination: false,
        breakpoints: {
          991: {
            perPage: 1,
          },
        }
      });
      splide.mount(window.splide.Extensions);
    }
  },
  gsapScroll: function () {
    // Banner section
    if (jQuery(window).width() > 991) {
      if (jQuery('.first_section').length) {
        const ss1TL = gsap.timeline({
          defaults: { duration: 1 },
        });
        // const ss1TL = gsap.timeline({ defaults: {duration: 1} });
        ss1TL.fromTo('.pri_title', { rotation: -5, scale: 1 }, { rotation: -2, scale: 1.5, duration: 0.5 })
          .fromTo('.left_box', { rotation: -17, y: 0 }, { rotation: -5, y: '120px', duration: 0.5 }, '<')
          .fromTo('.right_box', { y: 0 }, { y: '120px', duration: 0.5 }, '<')
          .fromTo('.primary_img', { y: 0 }, { y: '-120px', duration: 0.5 }, '<')
          .fromTo('.primary_img .eye', { scale: 1, xPercent: 0, yPercent: 0 }, { scale: 0.5, xPercent: -110, yPercent: 40, duration: 0.5 }, '<')

          .fromTo('.pri_title', { rotation: -2, scale: 1.5 }, { rotation: 0, scale: 1.1, duration: 0.5 })
          .fromTo('.left_box', { rotation: -5, y: '120px' }, { rotation: 0, y: '100px', duration: 0.5 }, '<')
          .fromTo('.right_box', { y: '120px' }, { y: '100px', duration: 0.5 }, '<')
          .fromTo('.primary_img', { y: '-120px' }, { y: '-100px', duration: 0.5 }, '<')
          .fromTo('.primary_img .eye', { xPercent: -110, yPercent: 40 }, { xPercent: -100, yPercent: 30, duration: 0.5 }, '<')
      }
    }

    if (jQuery(".typingText").length) {
      jQuery(".typingText").each(function (index) {
        const text = new SplitType(jQuery(this), {
          types: "words, chars",
        });
        let textInstance = jQuery(this);

        const tl = gsap.timeline({
          scrollTrigger: {
            trigger: textInstance,
            start: "-=100px 60%",
            end: "60% 60%",
            scrub: 1,
            pin: false,
            // markers: true
          }
        });
        TweenLite.set(textInstance, { perspective: 400 });
        tl.from(text.chars, { y: 10, opacity: 0, stagger: 0.1, duration: 3 })
      });
    }
    if (jQuery('.social_box').length) {
      var img1 = gsap.timeline({
        scrollTrigger: {
          trigger: '.img_1',
          start: '0% 50%',
          end: '75% 75%',
          scrub: 1,
          pin: false,
          // markers: true
        }
      })
      img1.fromTo('.img_1 img', { rotate: '-19deg', opacity: 0 }, { opacity: 1, rotate: '0deg', duration: 1 });
      var img2 = gsap.timeline({
        scrollTrigger: {
          trigger: '.img_2',
          start: '0% 100%',
          end: '75% 75%',
          scrub: 1,
          pin: false,
          // markers: true
        }
      })
      img2.fromTo('.img_2 img', { rotate: '9deg', opacity: 0 }, { opacity: 1, rotate: '0deg', duration: 1 });
      var img3 = gsap.timeline({
        scrollTrigger: {
          trigger: '.img_3',
          start: '0% 50%',
          end: '75% 75%',
          scrub: 1,
          pin: false,
          // markers: true
        }
      })
      img3.fromTo('.img_3 img', { rotate: '8deg', opacity: 0 }, { opacity: 1, rotate: '0deg', duration: 1 });
      var img4 = gsap.timeline({
        scrollTrigger: {
          trigger: '.img_4',
          start: '0% 50%',
          end: '75% 75%',
          scrub: 1,
          pin: false,
          // markers: true
        }
      })
      img4.fromTo('.img_4 img', { rotate: '-17deg', opacity: 0 }, { opacity: 1, rotate: '0deg', duration: 1 });
      var eye = gsap.timeline({
        scrollTrigger: {
          trigger: '.eye_trip',
          start: '0% 50%',
          end: '75% 75%',
          scrub: 1,
          pin: false,
          // markers: true
        }
      })
      eye.fromTo('.eye_trip', { rotation: 30, opacity: 0 }, { rotation: 0, opacity: 1, duration: 1 });
    }
    if (jQuery(".slideCenter").length) {

      jQuery(".slideCenter").each(function (index) {
        let target = jQuery(this);
        gsap.fromTo(target, { clipPath: 'polygon(40% 0, 60% 0, 60% 100%, 40% 100%)' }, {
          clipPath: 'polygon(0% 0, 100% 0, 100% 100%, 0% 100%)', duration: 2, scrollTrigger: {
            trigger: target,
            start: "0% 75%",
            end: "25% 75%",
            scrub: 1,
            pin: false,
            // markers: true,
          }
        })
      });
      jQuery(".slideLeft").each(function (index) {
        let target = jQuery(this);
        gsap.fromTo(target, { x: 50, clipPath: 'polygon(100% 0, 100% 0, 100% 100%, 100% 100%)' }, {
          x: 0, clipPath: 'polygon(0% 0, 100% 0, 100% 100%, 0% 100%)', duration: 2, scrollTrigger: {
            trigger: target,
            start: "0% 75%",
            end: "50% 75%",
            scrub: 1,
            pin: false,
            // markers: true,
          }
        })
      });
      jQuery(".slideRight").each(function (index) {
        let target = jQuery(this);
        gsap.fromTo(target, { clipPath: 'polygon(0 0, 0% 0, 0% 100%, 0 100%)' }, {
          clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0 100%)', duration: 2, scrollTrigger: {
            trigger: target,
            start: "0% 75%",
            end: "25% 75%",
            scrub: 1,
            pin: false,
            // markers: true,
          }
        })
      });
    }
  },
  activeOnScroll: function () {
    if (jQuery('.menu_site').length) {
      // Hàm kiểm tra section active
      function checkActiveSection() {
        var scrollPosition = jQuery(window).scrollTop();
        var windowHeight = jQuery(window).height();
        var foundActive = false;

        jQuery('.menu_site a').each(function () {
          var currentLink = jQuery(this);
          var sectionId = currentLink.attr('href');
          var section = jQuery(sectionId);

          if (section.length) {
            var sectionTop = section.offset().top - 60; // Offset cho mobile
            var sectionBottom = sectionTop + section.outerHeight();

            // Kiểm tra nếu section nằm trong viewport
            if (scrollPosition + windowHeight >= sectionTop &&
              scrollPosition < sectionBottom) {
              jQuery('.menu_site li').removeClass('active');
              currentLink.parent('li').addClass('active');
              foundActive = true;
            }
          }
        });

        // Xử lý khi scroll về đầu trang
        if (!foundActive && scrollPosition < 100) {
          jQuery('.menu_site li').removeClass('active');
          jQuery('.menu_site li:first').addClass('active');
        }
      }

      // Debounce để tối ưu performance
      function debounce(func, wait) {
        var timeout;
        return function () {
          clearTimeout(timeout);
          timeout = setTimeout(func, wait);
        };
      }

      // Gắn event scroll và resize
      jQuery(window).on('scroll', debounce(checkActiveSection, 100));
      jQuery(window).on('resize', debounce(checkActiveSection, 100));

      // Gọi lần đầu khi load trang
      checkActiveSection();
    }
  },
  loadGif: function(){
    $url = jQuery('#lottie-animation').data('url');
    const animationContainer = document.getElementById('lottie-animation');
    let animation = null;
    let hasPlayed = false;

    // Hàm khởi tạo và chạy animation
    function loadAndPlayAnimation() {
      if (!hasPlayed) {
        animation = lottie.loadAnimation({
          container: animationContainer,
          renderer: 'svg', // Hoặc thử 'canvas' nếu SVG không hoạt động
          loop: false,
          autoplay: true,
          path: $url // Thay bằng đường dẫn file JSON thực tế
        });
        hasPlayed = true;
      }
    }

    // Sử dụng Intersection Observer
    if ('IntersectionObserver' in window) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting && !hasPlayed) {
            loadAndPlayAnimation();
            observer.unobserve(animationContainer); // Ngừng theo dõi sau khi chạy
          }
        });
      }, {
        threshold: 0.3, // Chạy khi 30% section xuất hiện (giảm để nhạy hơn trên mobile)
        rootMargin: '0px' // Có thể điều chỉnh nếu cần
      });

      observer.observe(animationContainer);
    } else {
      // Fallback cho các trình duyệt không hỗ trợ Intersection Observer
      function checkScroll() {
        const rect = animationContainer.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        if (rect.top <= windowHeight * 0.7 && rect.bottom >= 0 && !hasPlayed) {
          loadAndPlayAnimation();
        }
      }

      window.addEventListener('scroll', checkScroll);
      window.addEventListener('touchmove', checkScroll); // Hỗ trợ sự kiện chạm trên mobile
      checkScroll(); // Kiểm tra ngay khi load trang
    }

    // Xử lý trường hợp resize hoặc orientation change trên mobile
    window.addEventListener('resize', () => {
      if (!hasPlayed) checkScroll();
    });
  }
};

jQuery(document).ready(function () {
  App.headerScroll();
  App.gsapScroll();
  App.btcSlider();
  App.activeOnScroll();
  App.loadGif();
  Fancybox.bind("[data-fancybox]:not(.splide__slide--clone)", {
    Thumbs: {
      type: "modern",
    },
  });
  Fancybox.bind('.splide__slide:not(.splide__slide--clone) [data-fancybox="gallery"]', {
    loop: true,
  });
});
