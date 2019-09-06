const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

//Togglar Nav
    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        //Animerar länkar
        navLinks.forEach((link, index) => {
            //Om animationen varit igång, "resetta" den
            if (link.style.animation) {
                link.style.animation = ''
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
            }
        });
        //Burger animering - aktiverar classen .toggle i css.
        burger.classList.toggle('toggle');
    });
}

navSlide();