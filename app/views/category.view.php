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
    <main class="w-[95%] mx-auto grid gap-3 grid-cols-2 sm:grid-cols-3 xl:grid-cols-4">
        <?php foreach ($data as $product): ?>
        <div>
            <div class="relative w-[100%] mx-auto bg-gray-50 rounded-md">
                <img class="max-w-[100%] object-cover mx-auto"  src="<?php echo ROOT; ?>/assets/resources/categories/<?php echo $product->category_code.'/'.$product->id?>.jpg" alt="">
                <div class="js-heart">
                <img class="js-white-heart absolute top-[3%] right-[2%] h-5 w-5 md:w-6 md:h-6" src="<?php echo ROOT; ?>/assets/resources/whitre-heart.png" alt="">
                </div>
            </div>
            <h3><?php echo $product->name ?></h3>
            <div class="flex">
                <p class="mr-4"><?php echo $product->price ?></p>
            </div>
            <div>
                <div class="flex gap-x-1">
                    <img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt="">
                </div>
                <p>(65)</p>//count people
            </div>
        </div>
        <?php endforeach; ?>
    </main>
    <?php 
        include 'footer.view.php';
    ?>
    <script src="<?php echo ROOT; ?>/assets/js/index.js"></script>
</body>
</html>