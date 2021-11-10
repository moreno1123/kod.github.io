const proces = () => {
    
    const hover = document.querySelector('.process_line.one');
    const hoverr = document.querySelectorAll('.process_line_text');
    const proc = document.querySelector('.process_line.two');
    const procc = document.querySelector('.process_line.three');
    const proccc = document.querySelector('.process_line.four');

    const tekst = document.querySelector('.process_line_text.one p');
    const tekstt = document.querySelector('.process_line_text.two p');
    const teksttt = document.querySelector('.process_line_text.three p');
    const tekstttt = document.querySelector('.process_line_text.four p');



    if(window.innerWidth > 900){
        proc.addEventListener('mouseover', () =>{
            proc.classList.toggle('process_active');
            tekst.style.fontSize = "2rem";
            tekst.innerHTML = "1";

            tekstt.style.fontSize = "0.8rem";
            tekstt.innerHTML = "Implementation phase";
        })
        proc.addEventListener('mouseout', () =>{
            proc.classList.remove('process_active');
            tekst.style.fontSize = "0.8rem";
            tekst.innerHTML = "Strategy built out";

            tekstt.style.fontSize = "2rem";
            tekstt.innerHTML = "2";
        })

        procc.addEventListener('mouseover', () =>{
            procc.classList.toggle('process_active');
            tekst.style.fontSize = "2rem";
            tekst.innerHTML = "1";

            teksttt.style.fontSize = "0.8rem";
            teksttt.innerHTML = "Conversion optimatization";
        })
        procc.addEventListener('mouseout', () =>{
            procc.classList.remove('process_active');
            tekst.style.fontSize = "0.8rem";
            tekst.innerHTML = "Strategy built out";

            teksttt.style.fontSize = "2rem";
            teksttt.innerHTML = "3";
        })

        proccc.addEventListener('mouseover', () =>{
            proccc.classList.toggle('process_active');
            tekst.style.fontSize = "2rem";
            tekst.innerHTML = "1";

            tekstttt.style.fontSize = "0.8rem";
            tekstttt.innerHTML = "Results";
        })
        proccc.addEventListener('mouseout', () =>{
            proccc.classList.remove('process_active');
            tekst.style.fontSize = "0.8rem";
            tekst.innerHTML = "Strategy built out";

            tekstttt.style.fontSize = "2rem";
            tekstttt.innerHTML = "4";
        })
    }else{

        var counter = 0;
        var counterr = 0;
        var counterrr = 0;
        var counterrrr = 0;

        hover.onclick = function () {

            counterrrr++;
            counter = 0;
            counterr = 0;
            counterrr = 0;
            
            hover.classList.toggle('process_active');
            proc.classList.remove('process_active');   
            procc.classList.remove('process_active');  
            proccc.classList.remove('process_active');   

            
            tekstt.style.fontSize = "2rem";
            tekstt.innerHTML = "2";

            teksttt.style.fontSize = "2rem";
            teksttt.innerHTML = "3";

            tekstttt.style.fontSize = "2rem";
            tekstttt.innerHTML = "4";

            tekst.style.fontSize = "0.8rem";
            tekst.innerHTML = "Strategy built out";


            if (counterrrr % 2 == 0) {
                console.log('bok')
                hover.classList.remove('process_active');
    
                tekst.style.fontSize = "2rem";
                tekst.innerHTML = "1";
            }
        };
        
        proc.onclick = function () {
            counter++;
            counterr = 0;
            counterrr = 0;
            counterrrr = 0;

            proc.classList.toggle('process_active');
            hover.classList.remove('process_active');   
            procc.classList.remove('process_active');  
            proccc.classList.remove('process_active');   

            
            tekst.style.fontSize = "2rem";
            tekst.innerHTML = "1";

            teksttt.style.fontSize = "2rem";
            teksttt.innerHTML = "3";

            tekstttt.style.fontSize = "2rem";
            tekstttt.innerHTML = "4";

            tekstt.style.fontSize = "0.8rem";
            tekstt.innerHTML = "Implementation phase";


            if (counter % 2 == 0) {
                hover.classList.toggle('process_active');
                proc.classList.remove('process_active');
                tekst.style.fontSize = "0.8rem";
                tekst.innerHTML = "Strategy built out";
    
                tekstt.style.fontSize = "2rem";
                tekstt.innerHTML = "2";
            }
        };

        procc.onclick = function () {
            counterr++;
            counter = 0;
            counterrr = 0;
            counterrrr = 0;

            hover.classList.remove('process_active');   
            proc.classList.remove('process_active');  
            proccc.classList.remove('process_active');   

            procc.classList.toggle('process_active');

            tekst.style.fontSize = "2rem";
            tekst.innerHTML = "1";
            
            tekstt.style.fontSize = "2rem";
            tekstt.innerHTML = "2";
            
            tekstttt.style.fontSize = "2rem";
            tekstttt.innerHTML = "4";
            
            teksttt.style.fontSize = "0.8rem";
            teksttt.innerHTML = "Conversion optimization";


            if (counterr % 2 == 0) {
                hover.classList.toggle('process_active');
                procc.classList.remove('process_active');
                tekst.style.fontSize = "0.8rem";
                tekst.innerHTML = "Strategy built out";
    
                teksttt.style.fontSize = "2rem";
                teksttt.innerHTML = "3";
            }
        };
        proccc.onclick = function () {
            counterrr++;
            counter = 0;
            counterr = 0;
            counterrrr = 0;

            hover.classList.remove('process_active');   
            proc.classList.remove('process_active');  
            procc.classList.remove('process_active');     

            proccc.classList.toggle('process_active');

            tekst.style.fontSize = "2rem";
            tekst.innerHTML = "1";

            tekstt.style.fontSize = "2rem";
            tekstt.innerHTML = "2";

            teksttt.style.fontSize = "2rem";
            teksttt.innerHTML = "3";

            tekstttt.style.fontSize = "0.8rem";
            tekstttt.innerHTML = "Results";

            if (counterrr % 2 == 0) {
                hover.classList.toggle('process_active');
                proccc.classList.remove('process_active');
                tekst.style.fontSize = "0.8rem";
                tekst.innerHTML = "Strategy built out";
    
                tekstttt.style.fontSize = "2rem";
                tekstttt.innerHTML = "4";
            }
        };

    }
}
proces();

const pozicijahome = () => {
    const element = document.querySelectorAll('.process_line_text');
    
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
        line.setAttribute("stroke-width", "5px");

svg.appendChild(line);

}
pozicijahome();

const pozicijahomee = () => {
    const element = document.querySelectorAll('.process_line_text');
    
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
        line.setAttribute("stroke-width", "5px");

svg.appendChild(line);

}
pozicijahomee();

const pozicijahomeee = () => {
    const element = document.querySelectorAll('.process_line_text');
    
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
        line.setAttribute("stroke-width", "5px");

svg.appendChild(line);

}
pozicijahomeee();