let inputs = document.querySelector('input[type="tel"]')
let im = new Inputmask('+7 (999) 999-99-99')
im.mask(inputs)

// validate

function validateForms(selector, rules) {
   new window.JustValidate(selector, {
      rules: rules,
      submitHandler: function (form, values, ajax) {
         console.log(form)
      },
   })
}

validateForms('.popup-form', {
   fio: { required: true },
})
