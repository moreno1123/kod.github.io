
window.onload = function(){
    setTimeout(function(){
        const pozicija = () => {
            const element = document.querySelectorAll('.tocka');
            
            console.log(element.length)
        
            var x1 = element[0].getBoundingClientRect().left + element[0].getBoundingClientRect().width/2;
            var y1 = element[0].getBoundingClientRect().top + element[0].getBoundingClientRect().height/2;
            var x2 = element[1].getBoundingClientRect().left + element[1].getBoundingClientRect().width/2;
            var y2 = element[1].getBoundingClientRect().top + element[1].getBoundingClientRect().height/2;
        
            const svg = document.querySelector('svg');
        
            let line = document.createElementNS("http://www.w3.org/2000/svg", "line");
        
                line.setAttribute("x1", x1);
                line.setAttribute("y1", y1);
                line.setAttribute("x2", x2);
                line.setAttribute("y2", y2);
                line.setAttribute("stroke", "#fff")
                line.setAttribute("stroke-width", "10px");
        
        svg.appendChild(line);
        
        }
        pozicija();
        
        const pozicijaa = () => {
            const element = document.querySelectorAll('.tocka');
            
            var x1 = element[1].getBoundingClientRect().left + element[1].getBoundingClientRect().width/2;
            var y1 = element[1].getBoundingClientRect().top + element[1].getBoundingClientRect().height/2;
            var x2 = element[2].getBoundingClientRect().left + element[2].getBoundingClientRect().width/2;
            var y2 = element[2].getBoundingClientRect().top + element[2].getBoundingClientRect().height/2;
        
            const svg = document.querySelector('svg');
        
            let line = document.createElementNS("http://www.w3.org/2000/svg", "line");
        
                line.setAttribute("x1", x1);
                line.setAttribute("y1", y1);
                line.setAttribute("x2", x2);
                line.setAttribute("y2", y2);
                line.setAttribute("stroke", "#fff")
                line.setAttribute("stroke-width", "10px");
        
        svg.appendChild(line);
        
        }
        pozicijaa();
        
        const pozicijaaa = () => {
            const element = document.querySelectorAll('.tocka');
            
            var x1 = element[2].getBoundingClientRect().left + element[2].getBoundingClientRect().width/2;
            var y1 = element[2].getBoundingClientRect().top + element[2].getBoundingClientRect().height/2;
            var x2 = element[3].getBoundingClientRect().left + element[3].getBoundingClientRect().width/2;
            var y2 = element[3].getBoundingClientRect().top + element[3].getBoundingClientRect().height/2;
        
            const svg = document.querySelector('svg');
        
            let line = document.createElementNS("http://www.w3.org/2000/svg", "line");
        
                line.setAttribute("x1", x1);
                line.setAttribute("y1", y1);
                line.setAttribute("x2", x2);
                line.setAttribute("y2", y2);
                line.setAttribute("stroke", "#fff")
                line.setAttribute("stroke-width", "10px");
        
        svg.appendChild(line);
        
        }
        pozicijaaa();
    },100);
}



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

