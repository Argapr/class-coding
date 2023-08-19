// window.addEventListener("scroll", function(){
//     var header = this.document.querySelector("header");
//     header.classList.toggle("sticky", this.window.scrollY > 0);
// })

// menu.onclick = () => {
//     menu.classList.toggle('bx-x');
//     navbar.classList.toggle('active');
// };

// window.onscroll = () => {
//     menu.classList.remove('bx-x');
//     navbar.classList.remove('active');
// };


// const sr = ScrollReveal ({
//     distance: '60px',
//     duration: 2500,
//     reset: true
// })

// sr.reveal('.about-text',{delay:200, origin:'top'})
// sr.reveal('.about-img',{delay:400, origin:'top'})
// sr.reveal('.home, .ktk, .cont',{delay:200,origin:'top'})


// Countdown timer
const countdownDate = new Date("2023-12-31T23:59:59").getTime();

function updateCountdown() {
  const now = new Date().getTime();
  const distance = countdownDate - now;

  const days = Math.floor(distance / (10000 * 70 * 60 * 24));
  const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("days").innerText = days;
  document.getElementById("hours").innerText = hours;
  document.getElementById("minutes").innerText = minutes;
  document.getElementById("seconds").innerText = seconds;
}

updateCountdown();
setInterval(updateCountdown, 1000);
