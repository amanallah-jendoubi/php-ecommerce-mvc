console.log('eklgg');
const cartBtn = document.querySelector('.js-add-to-cart');
cartBtn.addEventListener('click', async () => {
    let count = 0;
    const select = document.querySelector('.js-my-select');
    const quantity = select.value;
    const id=document.querySelector('.');

    count += parseInt(quantity); // Convert string to number
    
    const res = await fetch('http://localhost/E-Commerce-Website/public/cart/updateCart', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ quantity: count}) 
    });
    const data = await res.json();
    const counter=document.querySelector('.js-cart-counter');
    counter.classList.remove('hidden');
    counter.innerHTML = `<p>${data.count}</p>`;
});

