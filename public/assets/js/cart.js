const cartBtn = document.querySelector('.js-add-to-cart');
if (cartBtn){
    cartBtn.addEventListener('click', async () => {
        const select = document.querySelector('.js-my-select');
        const productQuantity= select.value;
        const productId = window.location.pathname.split('/').pop();
        const res = await fetch('http://localhost/E-Commerce-Website/public/cart/updateCart', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({productQuantity : productQuantity, productId:productId}) 
        });
        const data = await res.json();
        const counter=document.querySelector('.js-cart-counter');
        counter.classList.remove('hidden');
        counter.innerHTML = `<p>${data.count}</p>`;
    });
}


//js for the plus button on the cart page (event delegation)
const productList=document.querySelectorAll('.js-product');
if (productList){
    productList.forEach((product)=>{//for each selected product
        product.addEventListener('click',async(event)=>{
            if (event.target.classList.contains('js-plus')) {//when i click the plus button 
                const newQuantity=Number(product.querySelector('.js-product-quantity').innerHTML)+1;
                const res = await fetch('http://localhost/E-Commerce-Website/public/cart/updateCart', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({productQuantity : newQuantity, productId:}) 
                        });
                const data = await res.json();
                const counter=document.querySelector('.js-cart-counter');







                product.querySelector('.js-product-quantity').innerHTML=newQuantity+1;
            }
            if (event.target.classList.contains('js-delete')) {//when i click the delete button
                product.remove();
            }



        /* const productQuantity = product.querySelector('.js-product-quantity');
            const res = await fetch('http://localhost/E-Commerce-Website/public/cart/updateCart', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({productQuantity : productQuantity, productId:productId}) 
            });
            const data = await res.json();
            const counter=document.querySelector('.js-cart-counter');
            counter.classList.remove('hidden');
            counter.innerHTML = `<p>${data.count}</p>`;*/

            });

        });
    }


/*
document.getElementById('todo-list').addEventListener('click', (event) => {
  if (event.target.classList.contains('delete-btn')) {
    const todoItem = event.target.closest('.todo-item');
    todoItem.remove();
  }
});*/