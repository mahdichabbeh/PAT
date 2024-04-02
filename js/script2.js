let valueDisplays = document.querySelectorAll(".num");
let interval = 4000;

valueDisplays.forEach((valueDisplay) => {
  let startValue = 0;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue += 1;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});
const hamburger = document.querySelector('.hamburger'); 
/*const secondIcon = document.querySelector('.hamburger');*/
const menu = document.querySelector('.navbar');  
const icon = document.querySelector('.hamburger img'); 
 hamburger.addEventListener('click', () => {   menu.classList.toggle('active');   icon.classList.toggle('close');  
 if (icon.classList.contains('close')) {     icon.setAttribute('src', '../assets/close.png');/* secondIcon.style.transform = 'translate(325px,-1px)';*/  } 
 else {     icon.setAttribute('src', '../assets/menu.png'); secondIcon.style.transform = 'none';  } });


