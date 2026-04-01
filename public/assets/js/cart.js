//missing generelization
const plusBtn=document.querySelectorAll('.js-plus');
plusBtn.addEventListener('click',()=>{
    const quantity=document.querySelector('.js-quantity');
    quantity.innerHTML=Number(quantity.innerHTML)+1;
    if(Number(quantity.innerHTML)===2){//only one time render
        document.querySelector('.js-delete').remove();
        const minusBtn = document.createElement("img");
        minusBtn.classList.add('js-minus', 'h-5', 'w-5', 'lg:h-7', 'lg:w-7', 'mouse:hover:cursor-pointer');
        minusBtn.src='./resources/minus.png';
        minusBtn.addEventListener('click',()=>{
            if(Number(quantity.innerHTML)>1){
                quantity.innerHTML=Number(quantity.innerHTML)-1;
                if(Number(quantity.innerHTML)==1) {//replace with delete button
                    minusBtn.remove();
                    const deleteBtn=document.createElement('img');
                    deleteBtn.src='./resources/garbage.png';
                    deleteBtn.classList.add('js-delete', 'h-5', 'w-5', 'lg:h-7', 'lg:w-7', 'mouse:hover:cursor-pointer');
                    document.querySelector('.js-product-quantity').prepend(deleteBtn); 
                }
            }
        });
        document.querySelector('.js-product-quantity').prepend(minusBtn);
    }
});

//good
const products= document.querySelectorAll('.js-product-quantity');
products.forEach((product)=>{
    product.addEventListener('click',(e)=>{
        if(e.target.matches('.js-delete')){
            product.remove();
        }
    })



});

