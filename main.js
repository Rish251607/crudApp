burger = document.querySelector('.burger')
container = document.querySelector('.container')
leftcont = document.querySelector('.leftcont')
rightcont = document.querySelector('.rightcont')

burger.addEventListener('click', () => {
  rightcont.classList.toggle('v-class');
  leftcont.classList.toggle('v-class');
  container.classList.toggle('h-nav');
})


// // JS for background:
// function setTheme(theme) {
//   if (theme === 'day') {
//     document.body.style.backgroundColor = 'white';
//     document.body.style.color = 'black';
//   } else if (theme === 'night') {
//     document.body.style.backgroundColor = '#333';
//     document.body.style.color = 'white';
//   }
// }


// // JS for inside form
// function setTheme(theme) {
//   var formElements = document.querySelectorAll('.form-group');

//   if (theme === 'day') {
//       // Set day theme
//       formElements.forEach(function (element) {
//           element.style.backgroundColor = 'white';
//           element.style.color = 'black';
//       });
//   } else if (theme === 'night') {
//       // Set night theme
//       formElements.forEach(function (element) {
//           element.style.backgroundColor = '#333';
//           element.style.color = 'white';
//       });
//   }
// }

// // JS for background + inside forum.
function setTheme(theme) {
  var formElements = document.querySelectorAll('.form-group');

  if (theme === 'day') {
    document.body.style.backgroundColor = 'white';
    document.body.style.color = 'black';
    formElements.forEach(function (element) {
      // element.style.backgroundColor = 'white';
      element.style.color = 'black';
  });
  } else if (theme === 'night') {
    document.body.style.backgroundColor = '#333';
    document.body.style.color = 'white';
    formElements.forEach(function (element) {
      // element.style.backgroundColor = '#333';
      element.style.color = 'black';
  });
  }
}










