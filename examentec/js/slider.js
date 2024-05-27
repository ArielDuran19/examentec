(function(){

    const sliders = [...document.querySelectorAll('.testimony__body')];
    const buttonNext = document.querySelector('#next');
    const buttonBefore = document.querySelector('#before');

    let value;


    buttonNext.addEventListener('click' , ()=>{
        changuePosition(1);
    });

    buttonBefore.addEventListener('click' , ()=>{
        changuePosition(-1);
    });
    
    const changuePosition = (add)=>{
        const currentTestimony = document.querySelector('.testimony__body--show').dataset.id;
        value = Number(currentTestimony);
        value+= add;


         sliders[Number(currentTestimony)-1].classList.remove('testimony__body--show');
        //3 + 1 = 4 + 1 === 5 rebasa el numero de slider
        if(value === sliders.length+1 || value === 0){

            value = value === 0 ? sliders.length : 1; //arroja el ultimo slider
        }

        sliders[value-1].classList.add('testimony__body--show'); //se cuenta desde el 0 en programcion 

      
       


    }




})();