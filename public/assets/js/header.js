const quantityList=document.querySelectorAll('.js-quantity-input');
quantityList.forEach((itm)=>{
    itm.addEventListener('input',()=>{
        const counter= document.querySelector('.js-cart-counter');
        counter.classList.remove('hidden');
        counter.classList.add('flex','justify-center','items-center');
        console.log(itm.value);
        counter.innerHTML=itm.value;
    });
});


document.querySelector('.js-account').addEventListener('click',()=>{
    document.querySelector('.js-account-drop-down').classList.toggle('hidden');
});