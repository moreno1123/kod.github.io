// submit forma 

function onSubmit(token) {
    document.getElementById("form").submit();
}


// navigacija------------------------

const navSlide = () =>{
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.lista');
    const navLinks = document.querySelectorAll('.lista_button');
    const navLinkss = document.querySelectorAll('.menu_content li'); 

    burger.addEventListener('click', () =>{
        nav.classList.toggle('lista_active')

        navLinks.forEach((link, index)  => {
            if(link.style.animation){
                link.style.animation = ''
            } else{
                link.style.animation = `lista_button_fade 0.3s ease forwards ${index / 7 + 0.5}s`
            }
        });
        navLinkss.forEach((link, index)  => {
            if(link.style.animation){
                link.style.animation = ''
            } else{
                link.style.animation = `lista_button_fade 0.3s ease forwards ${index / 7 + 1}s`
            }
        });
        burger.classList.toggle('toggle');
    });
}
navSlide(); 

// navigacija logo-------------------------

const header = document.querySelector('.header_pozadina');
const pozadina = document.getElementById('observer');
const logo = document.getElementById('inq');
const logo_1 = document.getElementById('inq_2');

const pozadina_opcije = {
    // threshold: 0.2
};

const pozadina_observer = new IntersectionObserver(function (entries, pozadina_observer) {
    entries.forEach( entry => {
        if(!entry.isIntersecting){
            header.classList.toggle('header_active');
        }else{
            header.classList.remove('header_active');
        }
        if(!entry.isIntersecting){
            logo.classList.toggle('logo_active');
        }else{
            logo.classList.remove('logo_active');
        }
        if(!entry.isIntersecting){
            logo_1.classList.toggle('logo_activee');
        }else{
            logo_1.classList.remove('logo_activee');
        }
    })
}, pozadina_opcije);
pozadina_observer.observe(pozadina);


// procesi pocetna str---------------------------------


const processHover = () => {
    const hover = document.querySelectorAll('.process_line_text');
    const hoverr = document.querySelector('.process_line.one');


    for(i=0;i<hover.length;i++){
            hover[1].onmouseover = function () {
                hoverr.classList.remove('process_active')
            };
            hover[1].onmouseout = function () {
                hoverr.classList.toggle('process_active')
            };
            hover[2].onmouseover = function () {
                hoverr.classList.remove('process_active')
            };
            hover[2].onmouseout = function () {
                hoverr.classList.toggle('process_active')
            };
            hover[3].onmouseover = function () {
                hoverr.classList.remove('process_active')
            };
            hover[3].onmouseout = function () {
                hoverr.classList.toggle('process_active')
            };
    } 
}
processHover();



//what podcrte--------------------------------

const what = document.querySelectorAll('.what_tekst');

const opcije = {
    threshold: 0.6
}

const observer = new IntersectionObserver(function(entries, opcije){
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.toggle('active');
        }else{
            entry.target.classList.remove('active');
        }
    })
}, opcije);

what.forEach(div => {
    observer.observe(div)
})

