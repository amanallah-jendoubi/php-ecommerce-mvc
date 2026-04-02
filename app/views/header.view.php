   <header class="mb-12">
        <p class="bg-black  text-slate-200 py-6 font-mono text-base text-center">
        Winter Sale And Free Express Delivery
        <span class="block font-semibold sm:inline " > OFF 50%!</span>
        </p>       
        <div class="nav-container w-[90%] mx-auto">
            <div class="flex justify-between">
                <h2 class="font-bold text-3xl my-3 md:pt-1 lg:pt-1 lg:text-4xl">Exclusive</h2>
                <nav class="my-3 hidden md:block">
                    <ul class="flex justify-center">
                        <a href="<?php echo ROOT?>/home"><li class="m-4 mouse:hover:text-red-500 mouse:hover:underline mouse:hover:underline-offset-4">Home</li></a>
                        <a href="<?php echo ROOT?>/contact"><li class="m-4 mouse:hover:text-red-500 mouse:hover:underline mouse:hover:underline-offset-4">Contact</li></a>
                        <a href="<?php echo ROOT?>/signUP"><li class="m-4 mouse:hover:text-red-500 mouse:hover:underline mouse:hover:underline-offset-4">Sign Up</li></a>
                        <a href="<?php echo ROOT?>/about"><li class="m-4  mouse:hover:text-red-500 mouse:hover:underline mouse:hover:underline-offset-4">About</li></a>
                    </ul>
                </nav>
                <label class="relative sm:flex sm:items-center sm: hidden w-[40%] md:w-[30%] lg:w-[40%]">
                    <img class="absolute left-7 lg:left-10 top-1/2 -translate-y-1/2 w-5 h-5 object-contain" src="<?php echo ROOT ?>/assets/resources/search.png" alt="search icon">
                    <input class=" bg-gray-100 focus:outline-none focus:ring-1 focus:ring-black shadow-md rounded-full p-2 pl-11 mx-auto w-[90%]" type="text" id="search" name="search" placeholder="Search">
                </label>
                <div class="flex justify-center items-center">
                        <a  class="js-cart-link relative p-2 mr-2" href="<?php echo ROOT?>/cart">
                            <img src="<?php echo ROOT ?>/assets/resources/Cart1 with buy.png" alt="shop">
                            <div class="js-cart-counter flex justify-center <?php  if($_SESSION['cart']['count']==0) echo  'hidden'; ?> absolute rounded-full bg-orange-500  text-white w-6 h-6 top-0 right-0">
                                <p><?php  if (isset($_SESSION ['cart']['count'])) echo $_SESSION ['cart']['count'] ?></p>
                            </div>
                        </a>
                    <?php if(!empty($path)):?>
                        <div class="relative">
                            <img class="js-account w-9 h-9" src="<?php echo $path ?>" alt="">
                            <div class="js-account-drop-down hidden absolute right-0 top-10 bg-white shadow-lg rounded-lg w-48 pb-3 z-50">
                                <div class="flex mb-2 mouse:hover:bg-gray-100 hover:cursor-pointer py-1">
                                    <img class="mr-1 w-8 h-8" src="<?php echo ROOT ?>/assets/resources/manage-account.png" alt="">
                                    <a href="<?php echo ROOT?>/account" class="">My Account</a>
                                </div>
                                <div class="flex mb-2 mouse:hover:bg-gray-100 hover:cursor-pointer py-1">
                                    <img class="mr-1 w-8 h-8" src="<?php echo ROOT ?>/assets/resources/order.png" alt="">
                                    <p class="">My Order</p>
                                </div>
                                <div class="flex mouse:hover:bg-gray-100 hover:cursor-pointer py-1">
                                    <img class="mr-1 w-8 h-8" src="<?php echo ROOT ?>/assets/resources/logout.png" alt="">
                                    <a href="<?php echo ROOT?>/logout" class="block">Logout</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <label class="relative block sm:hidden mx-auto w-[90%]">
                <img class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 object-contain" src="<?php echo ROOT ?>/assets/resources/search.png" alt="search icon">
                <input class=" bg-gray-100 focus:outline-none focus:ring-1 focus:ring-black shadow-md rounded-full p-2 pl-11 mx-auto w-[90%]" type="text" id="search" name="search" placeholder="Search">
            </label>
            <nav class="my-3 md:hidden">
                <ul class="flex justify-center">
                    <a href="<?php echo ROOT?>/home"><li class="m-4 mouse:hover:text-red-500 mouse:hover:underline mouse:hover:underline-offset-4">Home</li></a>
                    <a href="<?php echo ROOT?>/contact"><li class="m-4 mouse:hover:text-red-500 mouse:hover:underline mouse:hover:underline-offset-4">Contact</li></a>
                    <a href="<?php echo ROOT?>/signUp"><li class="m-4 mouse:hover:text-red-500 mouse:hover:underline mouse:hover:underline-offset-4">Sign Up</li></a>
                    <a href="<?php echo ROOT?>/about"><li class="m-4  mouse:hover:text-red-500 mouse:hover:underline mouse:hover:underline-offset-4">About</li></a>
                </ul>
            </nav>
        </div>
    </header>
    <script src="<?php echo ROOT; ?>/assets/js/header.js"></script>

