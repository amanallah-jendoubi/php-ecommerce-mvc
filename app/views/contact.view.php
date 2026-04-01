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


    <title>Contact</title>
</head>
<body>
   <?php 
   include 'header.view.php';
   ?>
    <main class="w-[90%] mx-auto md:w-[50%]">
        <section class="contact">
            <div class="mb-14">
                <h1 class="text-center font-semibold text-2xl">Contact our team</h1>
                <p class="text-center">Got any questions ? <span>Chat to our friendly team 24/7 for help <span class="block">or call us on <span class="text-[#DB4444] block">+88015-88888-9999</span></span></p>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-col mb-3 ">
                    <label class="mb-1 font-medium" for="">First Name</label>
                    <input class="focus:outline-none ring-1 ring-orange-500 p-2  rounded-md" type="text" name="" id="">
                </div>

                <div class="flex flex-col mb-3 ">
                    <label class="mb-1 font-medium" for="">Last Name</label>
                    <input type="text" class="focus:outline-none ring-1 ring-orange-500 p-2 rounded-md">
                </div>

                <div class="flex flex-col mb-3 ">
                    <label class="mb-1 font-medium" for="">Email</label>
                    <input type="text" class="focus:outline-none ring-1 ring-orange-500 p-2 rounded-md">
                </div>

                <div class="flex flex-col ">
                    <label class="mb-1 font-medium" for="">Message</label>
                    <textarea name="" id="" class="focus:outline-none ring-1 ring-orange-500 p-2 rounded-md"></textarea>
                </div>
            </div>
            <div class="flex justify-center items-center mt-10">
                <button class="bg-orange-500 p-3 rounded-lg text-sm text-white md:text-base">Send message</button>
            </div>
        </section>




    </main>
<?php 
include 'footer.view.php';
?>
    
</body>
</html>