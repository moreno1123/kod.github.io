if (window.innerWidth > 991) {
    var s = skrollr.init();
        skrollr.menu.init(s, {
            animate: true,
            easing: 'sqrt',
            scale: 2,
            duration: function(currentTop, targetTop) {
                return 500;
            },
            complexLinks: false,
            updateUrl: false 
        });
    }


    const lis = document.getElementById("lista");
    const burger = document.getElementById("burger");
    const logo = document.getElementById("logo");
    
    
    burger.onclick = function(){
        lis.classList.toggle('lista_active')
        burger.classList.toggle('toggle')
    }

    lis.onclick = function(e){
        lis.classList.remove('lista_active')
        burger.classList.remove('toggle')
    } 

    logo.onclick = function(e){
        lis.classList.remove('lista_active')
        burger.classList.remove('toggle')
    } 

    

