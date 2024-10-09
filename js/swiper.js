// HospitalSwiper

const hospitalSwiper = new Swiper('.hospital-swiper', {
   spaceBetween: 10,
   slidesPerView: 1,
   centeredSlides: true,
   scrollbar: {
      el: '.swiper-scrollbar',
   },
})

// Custom Slider

const windowWidth = window.innerWidth
offset = 0

const sliderBlock = document.querySelector('.reviews-rs__items')
const leftArrow = document.querySelector('.arrow-left')
const rightArrow = document.querySelector('.arrow-right')
leftArrow.setAttribute('disabled', true)

leftArrow.addEventListener('click', function () {
   rightArrow.removeAttribute('disabled', true)
   offset -= 393
   sliderBlock.style.left = -offset + 'px'
   if (offset === 0) {
      leftArrow.setAttribute('disabled', true)
   }
})
rightArrow.addEventListener('click', function () {
   leftArrow.removeAttribute('disabled', true)
   offset += 393
   if (offset === 1179) {
      rightArrow.setAttribute('disabled', true)
   }
   sliderBlock.style.left = -offset + 'px'
})

// Review Swiper

const ReviewSwiper = new Swiper('.review-swiper', {
   spaceBetween: 10,
   centeredSlides: true,
   scrollbar: {
      el: '.swiper-scrollbar',
   },
})
