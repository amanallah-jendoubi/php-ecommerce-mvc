<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
        extend: {
            screens: {
            'mouse': {'raw': '(hover: hover)'},
            }
        }
        }
    }
    </script>

    <title>Cart</title>
</head>


<body>
    <?php 
    include 'header.view.php';
    ?>
    <main class="w-[95%] mx-auto bg-slate-50">
        <div class="js-product flex flex-col">
            <div class="flex justify-between font-semibold bg-white shadow-lg p-4 mb-10">
                <h3 class="w-[20%] text-center">Product</h3>
                <h3 class="w-[20%] text-center">Price</h3>
                <h3 class="w-[20%] text-center">Quantity</h3>
                <h3 class="w-[20%] text-center">Subtotal</h3>
            </div>

            <?php foreach($data as $product) :?>
            <div class="flex justify-between items-center bg-white shadow-lg ">
                <div class="flex flex-col w-[20%]">
                    <img class="block ml-3" src="<?php echo ROOT; ?>/assets/resources/categories/<?php echo $product->category_code.'/'.$product->id?>.jpg" alt="">
                    <p class="text-center"><?php echo $product->name ?></p>
                </div>
                <p class="js-product-price w-[20%] text-center"><?php echo '$'.$product->price ?></p>
                <div class="w-[20%] ">
                    <div class="js-product-quantity lg:w-[80%] lg:mx-auto flex justify-between items-center ring-2 ring-[#DB4444] rounded-full p-1 lg:p-2">
                        <img class="js-delete h-5 w-5 lg:h-7 lg:w-7 mouse:hover:cursor-pointer" src="./assets/resources/garbage.png" alt="">
                        <p class="js-quantity font-semibold"><?php echo $_SESSION['cart']['products'][$product->id]?></p>
                        <img class="js-plus h-5 w-5 lg:h-7 lg:w-7 mouse:hover:cursor-pointer" src="./assets/resources/plus.png" alt="">
                    </div>
                </div>
                <p class="js-product-subtotal w-[20%] text-center">$650</p>
            </div>

            <?php endforeach ?>

        </div>





        
        <div class="w-[60%] mx-auto border border-black bg-white mt-20 p-6 rounded-lg">
            <h3 class="text-center font-semibold text-xl mb-1">Cart Total</h3>
            <div class="bordeer border-b-2 border-gray-300 flex justify-between">
                <p>Subtotal</p>
                <p class="js-subtotal" ></p>
            </div> 
            <div class="bordeer border-b-2 border-gray-300 flex justify-between">
                <p>Shipping</p>
                <p>Free</p>
            </div>
            <div class="flex justify-between text-red-700 font-medium">
                <p>Total</p>
                <p class="js-total"></p>
            </div>
            <div class="flex justify-center items-center mt-10">
                <button class="bg-orange-600 hover:bg-[#DB4444] p-3 px-5 rounded-full text-sm text-white md:text-base">Process to checkout</button>
            </div>
        </div>
    




    </main>

<?php 
include 'footer.view.php';
?> 

<script src="./assets/js/header.js"></script>
<script src="./assets/js/cart.js"></script>
</body>
</html>