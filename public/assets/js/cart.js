console.log('eklgg');
const cartBtn = document.querySelector('.js-add-to-cart');
cartBtn.addEventListener('click', async () => {
    const select = document.querySelector('.js-my-select');

    const productQuantity= select.value;
    const productId = window.location.pathname.split('/').pop();
    
    const res = await fetch('http://localhost/E-Commerce-Website/public/cart/updateCart', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({productQuantity : productQuantity, productId:productId }) 
    });
    const data = await res.json();
    const counter=document.querySelector('.js-cart-counter');
    counter.classList.remove('hidden');
    counter.innerHTML = `<p>${data.count}</p>`;
});

