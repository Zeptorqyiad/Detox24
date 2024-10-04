// Burger
const burgerLine = document.querySelector('.burger__list')
const burgerMenu = document.querySelector('.icon-menu')

burgerLine.addEventListener('click', () => {
   if (burgerLine) {
      burgerLine.classList.toggle('active')
      burgerMenu.classList.toggle('active')
      document.body.classList.toggle('_lock')
   }
})

window.addEventListener('resize', function () {
   if (window.matchMedia('(max-width: 1024px)').matches) {
      burgerLine.classList.remove('active')
      burgerMenu.classList.remove('active')
      document.body.classList.remove('_lock')
   }
})
