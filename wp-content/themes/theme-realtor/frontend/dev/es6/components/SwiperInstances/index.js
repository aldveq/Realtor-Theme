import Swiper from 'swiper/bundle'

const SwiperInstances = () => {

    if(document.querySelector('.properties-container')) {
        new Swiper('.swiper-container-featured-properties-1', {
            pagination: {
              el: '.swiper-pagination-featured-properties-2',
              type: 'fraction',
            },
            navigation: {
              nextEl: '.swiper-button-next-featured-properties-3',
              prevEl: '.swiper-button-prev-featured-properties-4',
            },
        });

        new Swiper('.swiper-container-featured-properties-5', {
            pagination: {
              el: '.swiper-pagination-featured-properties-6',
              type: 'fraction',
            },
            navigation: {
              nextEl: '.swiper-button-next-featured-properties-7',
              prevEl: '.swiper-button-prev-featured-properties-8',
            },
        });

        
        new Swiper('.swiper-container-featured-properties-9', {
            pagination: {
              el: '.swiper-pagination-featured-properties-10',
              type: 'fraction',
            },
            navigation: {
              nextEl: '.swiper-button-next-featured-properties-11',
              prevEl: '.swiper-button-prev-featured-properties-12',
            },
        });
    }

    if(document.querySelector('.testimonials-container__swiper-container-ratings')) {
      new Swiper('.testimonials-container__swiper-container-ratings', {
        pagination: {
          el: '.testimonials-container__swiper-pagination-ratings',
          clickable: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 30
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50
          },
        }
      });
    }

    if(document.querySelector('.testimonials-container__swiper-container-quote')) {
      new Swiper('.testimonials-container__swiper-container-quote', {
        pagination: {
          el: '.testimonials-container__swiper-pagination-quote',
          clickable: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 30
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50
          },
        }
      });
    }

    if(document.querySelector('.testimonials-container__swiper-container-ratings-two-cols-desktop')) {
      new Swiper('.testimonials-container__swiper-container-ratings-two-cols-desktop', {
        pagination: {
          el: '.testimonials-container__swiper-pagination-ratings-two-cols-desktop',
          clickable: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 30
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 50
          },
        }
      });
    }

    if(document.querySelector('.testimonials-container__swiper-container-quote-two-cols-desktop')) {
      new Swiper('.testimonials-container__swiper-container-quote-two-cols-desktop', {
        pagination: {
          el: '.testimonials-container__swiper-pagination-quote-two-cols-desktop',
          clickable: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 30
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 100
          },
        }
      });
    }

    if(document.querySelector('.badges-container')) {
      new Swiper('.badges-container__swiper-container', {
        pagination: {
          el: '.badges-container__swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 30
          },
          576: {
            slidesPerView: 2,
            spaceBetween: 40
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 40
          },
          1024: {
            slidesPerView: 6,
            spaceBetween: 50
          },
        }
      });
    }

    if(document.querySelector('.dream-houses-container')) {
      new Swiper('.featured-services-swiper-container', {
        navigation: {
          nextEl: '.featured-services-swiper-button-next',
          prevEl: '.featured-services-swiper-button-prev'
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 30
          },
          576: {
            slidesPerView: 2,
            spaceBetween: 40
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 20
          }
        }
      });
    }

}

export default SwiperInstances;