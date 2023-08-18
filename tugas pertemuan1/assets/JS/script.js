window.addEventListener("scroll", function(){
    var header = this.document.querySelector("header");
    header.classList.toggle("sticky", this.window.scrollY > 0);
})

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('active');
};


const sr = ScrollReveal ({
    distance: '60px',
    duration: 2500,
    reset: true
})

sr.reveal('.about-text',{delay:200, origin:'top'})
sr.reveal('.about-img',{delay:400, origin:'top'})
sr.reveal('.home, .ktk, .cont',{delay:200,origin:'top'})