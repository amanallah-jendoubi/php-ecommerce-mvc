<!DOCTYPE html>
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
    <title>Account</title>
</head>
<body>

    <?php 
    include 'header.view.php';
    ?>
    <main class="w-[95%] md:w-[85%] md:flex  mx-auto ">
        <img class="block w-[50%] mx-auto object-contain md:mx-0" src="<?php echo ROOT.'/assets/resources/categories/'.$data[0]->category_code.'/'.$data[0]->id.'.jpg' ?>" alt="">
        <div>
            <h1 class ='font-semibold'><?php echo $data[0]->name ?></h1>
            <div class ="flex">
                <div class="flex gap-x-1 mr-5">
                    <img class="object-contain" src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt="">
                </div>
                <p>(150 Reviews)</p>
            </div>
            <?php echo $data[0]->quantity > 0 ?"<p class='text-green-600'>In Stock</p>" :  "<p class='text-red-600'>Not Available</p>" ?>
            <p class="font-medium"><?php echo '$'.$data[0]->price ?></p>
            <p><?php echo $data[0]->description ?></p>
            <div class="flex mt-2">
                <p class="mr-3">Quantiy:</p>
                <select class="js-my-select border-black border" name="quantity">
                    <?php for($i = 1; $i <= 10; $i++): ?>
                        <option value="<?php echo $i ?>" <?php echo $i == 1 ? 'selected' : '' ?>>
                            <?php echo $i ?>
                        </option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class ='flex flex-col items-center'>
                <a class=" js-add-to-cart bg-orange-400 hover:bg-[#DB4444] w-[50%] p-3 px-5 rounded-full text-sm text-white text-center md:text-base mb-4 mt-2">Add to cart</a>
                <a class="bg-orange-600 hover:bg-[#DB4444] w-[50%] p-3 px-5 rounded-full text-sm text-white text-center md:text-base">Buy Now</a>
            </div>
        </div>
    </main>
    
    <footer>
        <?php
        include 'footer.view.php';
        ?>
    </footer>
    <script src="<?php echo ROOT; ?>/assets/js/cart.js"></script>
</body>
</html>

