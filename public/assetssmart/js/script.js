// JavaScript For Sticky Header

window.addEventListener("scroll", function () {
  const header = document.querySelector(".navbar");
  header.classList.toggle("sticky", window.scrollY > 0);
});

// Rental Products Slider JavaScript

$(".rental-products-slider").owlCarousel({
  loop: true,
  margin: 20,
  nav: false,
  autoplay: true,
  autoplayTimeout: 2000,
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 4,
    },
  },
});

// Requested Car Slider JavaScript

$(".requested-car-slider").owlCarousel({
  loop: true,
  margin: 20,
  nav: true,
  dots: false,
  autoplay: true,
  autoplayTimeout: 2000,
  responsive: {
    0: {
      items: 2,
      margin: 0,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 4,
    },
  },
  navText: [
    '<img src="assets/images/left-arrow-icon.svg"/>',
    '<img src="assets/images/right-arrow-icon.svg"/>',
  ],
});

