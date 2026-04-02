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

    <title>Home Page</title>
</head>
<body>
    <?php 
    include 'header.view.php';
    ?>
    <main class="w-[80%] mx-auto">
        <section class="mb-12">
            <div class="flex mb-5">
                <div class="w-4 mr-2 bg-[#DB4444]"></div>
                <h3 class="text-[#DB4444] font-bold text-xl ">Categories</h3>
            </div>
            <h2 class="text-2xl font-bold mb-5">Browse By Category</h2>
            <div class="grid justify-items-center grid-rows-2 grid-cols-3 gap-y-8 gap-x-9 lg:w-[60%] mx-auto">
                <a href="<?php echo ROOT; ?>/electronics">
                    <div class="p-1 mouse:hover:ring-2 mouse:hover:ring-[#DB4444]">
                        <img src="<?php echo ROOT; ?>/assets/resources/electronics.png" alt="">
                        <p class="text-sm font-semibold text-center mt-1">Electronics</p>
                    </div>
                </a>
                <a href="<?php echo ROOT; ?>/furniture">
                    <div class="p-1 mouse:hover:ring-2 mouse:hover:ring-[#DB4444]" >
                        <img src="<?php echo ROOT; ?>/assets/resources//living.png" alt="">
                        <p class="text-sm font-semibold text-center mt-1">Furniture</p>
                    </div>
                </a>
                <a href="<?php echo ROOT; ?>/clothing">
                    <div class="p-1 mouse:hover:ring-2 mouse:hover:ring-[#DB4444]">
                        <img src="<?php echo ROOT; ?>/assets/resources/clothing.png" alt="">
                        <p class="text-sm font-semibold text-center mt-1">Clothing</p>
                    </div>
                </a>
                <a href="<?php echo ROOT; ?>/sports">
                    <div class="p-1 mouse:hover:ring-2 mouse:hover:ring-[#DB4444]">
                        <img src="<?php echo ROOT; ?>/assets/resources/sports-logo.png" alt="">
                        <p class="text-sm font-semibold text-center mt-1">Sports</p>
                    </div>
                </a>
                <a href="<?php echo ROOT; ?>/groceries">
                    <div class="p-1 mouse:hover:ring-2 mouse:hover:ring-[#DB4444]">
                        <img src="<?php echo ROOT; ?>/assets/resources/groceries.png" alt="">
                        <p class="text-sm font-semibold text-center mt-1">Groceries</p>
                    </div>
                </a>
                <a href="<?php echo ROOT; ?>/toys">
                    <div class="p-1 mouse:hover:ring-2 mouse:hover:ring-[#DB4444]">
                        <img src="<?php echo ROOT; ?>/assets/resources/toys.png" alt="">
                        <p class="text-sm font-semibold text-center mt-1">Toys</p>
                    </div>
                </a>
            </div>
        </section>


        <section class="mb-12">
            <div class="flex mb-5">
                <div class="w-4 mr-2 bg-[#DB4444]"></div>
                <h3 class="text-[#DB4444] font-bold text-xl ">Todays</h3>
            </div>
            <h2 class="text-2xl font-bold mb-5">Flash Sales</h2>         
            <div class="flex overflow-x-auto gap-3">            <!--Horizontal scroll-->
                <div class="shrink-0 basis-[90%] md:basis-[45%]">
                    <div class="relative w-[100%] mx-auto bg-gray-50 rounded-md">
                        <img class="max-w-[100%] object-cover mx-auto"  src="<?php echo ROOT; ?>/assets/resources//coat.png" alt="">
                        <div class="js-heart">
                        <img class="js-white-heart absolute top-[3%] right-[2%] h-5 w-5 md:w-6 md:h-6" src="<?php echo ROOT; ?>/assets/resources/whitre-heart.png" alt="">
                        </div>
                    </div>
                    <h3>Gucci duffle bag</h3>
                    <div class="flex">
                        <p class="mr-4">$260</p>
                        <p class="text-gray-500 line-through">$360</p>
                    </div>
                    <div>
                        <div class="flex gap-x-1">
                            <img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt="">
                        </div>
                        <p>(65)</p>
                    </div>
                </div>
                <div class="shrink-0 basis-[90%] md:basis-[45%]">
                    <div class="relative w-[100%] mx-auto bg-gray-50 rounded-md">
                        <img class="max-w-[100%] object-cover mx-auto"  src="<?php echo ROOT; ?>/assets/resources//coat.png" alt="">
                        <div class="js-heart">
                        <img class="js-white-heart absolute top-[3%] right-[2%] h-5 w-5 md:w-6 md:h-6" src="<?php echo ROOT; ?>/assets/resources/whitre-heart.png" alt="">
                        </div>
                    </div>
                    <h3>Gucci duffle bag</h3>
                    <div class="flex">
                        <p class="mr-4">$260</p>
                        <p class="text-gray-500 line-through">$360</p>
                    </div>
                    <div>
                        <div class="flex gap-x-1">
                            <img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt="">
                        </div>
                        <p>(65)</p>
                    </div>
                </div>
                <div class="shrink-0 basis-[90%] md:basis-[45%]">
                    <div class="relative w-[100%] mx-auto bg-gray-50 rounded-md">
                        <img class="max-w-[100%] object-cover mx-auto"  src="<?php echo ROOT; ?>/assets/resources//coat.png" alt="">
                        <div class="js-heart">
                        <img class="js-white-heart absolute top-[3%] right-[2%] h-5 w-5 md:w-6 md:h-6" src="<?php echo ROOT; ?>/assets/resources/whitre-heart.png" alt="">
                        </div>
                    </div>
                    <h3>Gucci duffle bag</h3>
                    <div class="flex">
                        <p class="mr-4">$260</p>
                        <p class="text-gray-500 line-through">$360</p>
                    </div>
                    <div>
                        <div class="flex gap-x-1">
                            <img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt="">
                        </div>
                        <p>(65)</p>
                    </div>
                </div>

            </div>
        </section>


        <section class="mb-12">
            <div class="flex mb-5">
                <div class="w-4 mr-2 bg-[#DB4444]"></div>
                <h3 class="text-[#DB4444] font-bold text-xl ">This Month</h3>
            </div>
            <h2 class="text-2xl font-bold mb-5">Best Selling Products</h2>         <!--Horizontal scroll-->
            <div class="flex overflow-x-auto gap-3">            <!--Horizontal scroll-->
                <div class="shrink-0 basis-[90%] md:basis-[45%]">
                    <div class="relative w-[100%] mx-auto bg-gray-50 rounded-md">
                        <img class="max-w-[100%] object-cover mx-auto"  src="<?php echo ROOT; ?>/assets/resources//coat.png" alt="">
                        <div class="js-heart">
                        <img class="js-white-heart absolute top-[3%] right-[2%] h-5 w-5 md:w-6 md:h-6" src="<?php echo ROOT; ?>/assets/resources/whitre-heart.png" alt="">
                        </div>
                    </div>
                    <h3>Gucci duffle bag</h3>
                    <div class="flex">
                        <p class="mr-4">$260</p>
                        <p class="text-gray-500 line-through">$360</p>
                    </div>
                    <div>
                        <div class="flex gap-x-1">
                            <img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt="">
                        </div>
                        <p>(65)</p>
                    </div>
                </div>
                <div class="shrink-0 basis-[90%] md:basis-[45%]">
                    <div class="relative w-[100%] mx-auto bg-gray-50 rounded-md">
                        <img class="max-w-[100%] object-cover mx-auto"  src="<?php echo ROOT; ?>/assets/resources//coat.png" alt="">
                        <div class="js-heart">
                        <img class="js-white-heart absolute top-[3%] right-[2%] h-5 w-5 md:w-6 md:h-6" src="<?php echo ROOT; ?>/assets/resources/whitre-heart.png" alt="">
                        </div>
                    </div>
                    <h3>Gucci duffle bag</h3>
                    <div class="flex">
                        <p class="mr-4">$260</p>
                        <p class="text-gray-500 line-through">$360</p>
                    </div>
                    <div>
                        <div class="flex gap-x-1">
                            <img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt="">
                        </div>
                        <p>(65)</p>
                    </div>
                </div>
                <div class="shrink-0 basis-[90%] md:basis-[45%]">
                    <div class="relative w-[100%] mx-auto bg-gray-50 rounded-md">
                        <img class="max-w-[100%] object-cover mx-auto"  src="<?php echo ROOT; ?>/assets/resources//coat.png" alt="">
                        <div class="js-heart">
                        <img class="js-white-heart absolute top-[3%] right-[2%] h-5 w-5 md:w-6 md:h-6" src="<?php echo ROOT; ?>/assets/resources/whitre-heart.png" alt="">
                        </div>
                    </div>
                    <h3>Gucci duffle bag</h3>
                    <div class="flex">
                        <p class="mr-4">$260</p>
                        <p class="text-gray-500 line-through">$360</p>
                    </div>
                    <div>
                        <div class="flex gap-x-1">
                            <img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt=""><img src="<?php echo ROOT; ?>/assets/resources/fullStar.png" alt="">
                        </div>
                        <p>(65)</p>
                    </div>
                </div>

            </div>
        </section>
        <?php include 'footer-service.view.php'?>
    </main>

<?php 
include 'footer.view.php';
?>
    <script src="<?php echo ROOT; ?>/assets/js/index.js"></script>
</body>
</html>