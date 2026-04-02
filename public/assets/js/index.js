const HeartList=document.querySelectorAll('.js-heart');//i'm selecing a list of parents for hearts

HeartList.forEach((itm)=>{
    itm.addEventListener('click',(e)=>{
        if(e.target.matches('.js-red-heart')){
            renderWhiteHeart(itm);
        }
        else if(e.target.matches('.js-white-heart')){//not else specifically targeting white
            renderRedHeart(itm);
        }
    })

});



//hoisting 
function renderRedHeart(elem){
    const html=`
        <img class="js-red-heart absolute top-[3%] right-[2%] h-5 w-5 md:w-6 md:h-6" src="http://localhost/E-Commerce-Website/public/assets/resources/red-heart.png" alt="">
    `
    elem.innerHTML=html;
}

function renderWhiteHeart(elem){
    const html=`
        <img class="js-white-heart absolute top-[3%] right-[2%] h-5 w-5 md:w-6 md:h-6" src="http://localhost/E-Commerce-Website/public/assets/resources/whitre-heart.png" alt="">
    `
    elem.innerHTML=html;
}
