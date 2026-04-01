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
    <main>
    <div class="sm:flex sm:justify-between">
        <div class="w-[60%] mx-auto p-2 sm:w-[50%] sm:mx-0 sm:flex sm:justify-center sm:items-center md:w-[50%]">
            <div class="md:w-[70%] lg:w-[50%]">
                <h1 class="text-center font-semibold text-2xl mb-8">Edit your profile</h1>
                <div class="flex justify-center items-center">
                    <img class="max-w-[100%]" src="<?php echo ROOT;?>/assets/resources/user200.png" alt="">
                </div>
                <form action="<?php echo ROOT ?>/account/modify" method="post">
                    <div class="flex flex-col mb-3 ">
                        <label class="mb-1 font-medium" for="name">Name</label>
                        <input class="focus:outline-none ring-1 <?php  echo isset($errors['name']) ? 'ring-red-500' : 'ring-orange-500'; ?> p-2 rounded-lg focus:bg-orange-50 text-sm" name="name" type="text" id="name" value="<?php echo isset($old['name']) ? $old['name'] : ''; ?>" >
                        <?php
                            if(isset($errors['name'])){
                                echo "<p class='text-red-600'>".$errors['name']."</p>";
                            }                        
                        ?>                 
                    </div>      
                    <div class="flex flex-col mb-3 ">
                        <label class="mb-1 font-medium" for="pass">Current Password</label>
                        <input class="focus:outline-none ring-1 <?php echo  (isset($errors['password'])) ? 'ring-red-500' : 'ring-orange-500'; ?> p-2  rounded-lg focus:bg-orange-50" type="password" name='password' id="pass" value="<?php echo (isset($old['password']) ? $old['password'] : '')?>">
                        <?php 
                            if(isset($errors['password'])){
                                echo "<p class='text-red-600'>".$errors['password']."</p>";
                            }
                        ?>                
                    </div> 
                    <div class="flex flex-col mb-3 ">
                        <label class="mb-1 font-medium" for="pass">New Password</label>
                        <input class="focus:outline-none ring-1 <?php echo  (isset($errors['password'])) ? 'ring-red-500' : 'ring-orange-500'; ?> p-2  rounded-lg focus:bg-orange-50" type="password" name='password' id="pass" value="<?php echo (isset($old['password']) ? $old['password'] : '')?>">
                        <?php 
                            if(isset($errors['password'])){
                                echo "<p class='text-red-600'>".$errors['password']."</p>";
                            }
                        ?>                
                    </div> 
                    <div class="flex flex-col mb-3 ">
                        <label class="mb-1 font-medium" for="pass">Confirm New Password</label>
                        <input class="focus:outline-none ring-1 <?php echo  (isset($errors['password'])) ? 'ring-red-500' : 'ring-orange-500'; ?> p-2  rounded-lg focus:bg-orange-50" type="password" name='password' id="pass" value="<?php echo (isset($old['password']) ? $old['password'] : '')?>">
                        <?php 
                            if(isset($errors['password'])){
                                echo "<p class='text-red-600'>".$errors['password']."</p>";
                            }
                        ?>                
                    </div>     
                    <div class="flex justify-center items-center mt-10">
                        <button type="submit" class="bg-orange-500 hover:bg-orange-600 p-3 px-8 rounded-full text-sm text-white md:text-base ">Save</button>
                    </div>
                </form>
            </div>     
        </div> 
        
        <div class="hiddden sm:block bg-orange-200 rounded-l-lg w-[50%]">
            <img class="hidden sm:block" src="<?php echo ROOT ;?>/assets/resources/login.png" alt="">
        </div>
    </div>





    </main>
    
    <footer>
        <?php
        include 'footer.view.php';
        ?>
    </footer>
</body>
</html>



