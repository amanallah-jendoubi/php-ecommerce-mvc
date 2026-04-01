<?php
    $nameErr=0;
    $emailErr=0;
    $passwordErr=0;
    $exist=null;
    $name="";
    $email="";
    $password="";


    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        if($name && $email && $password){//user hass no blank fields
            include 'db-connection.php';
            try{
                $sql1="select count(name) from users where email= ?";
                $stmt=$conn->prepare($sql1);
                $stmt->execute([$email]);
                $count=$stmt->fetchColumn();
                if($count>0){
                    $exist=1;
                }
                else{
                    $sql2="insert into users(name,email,password) values (?,?,?)";
                    $stmt=$conn->prepare($sql2);
                    $stmt->execute([$name,$email,$password]);
                    session_start();
                    header("Location: index.php");
                    exit();
                }
            }catch(PDOException $e){
                echo 'error '.$e->getMessage();
            }
            $conn=null;
            $stmt=null;
        }
        else{
            if(!$name){
                $nameErr=1;
            }
            if(!$email){
                $emailErr=1;
            }
            if(!$password){
                $passwordErr=1;
            }
        }
    }
?>


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
    <title>Sign Up</title>
</head>
<body>
    <?php 
    include 'header.php'; 
    ?>
    <main>
    <div class="sm:flex sm:justify-between">
        <div class="w-[60%] mx-auto p-2 sm:w-[50%] sm:mx-0 sm:flex sm:justify-center sm:items-center md:w-[50%]">
            <div class="md:w-[70%] lg:w-[50%]">
                <h1 class="text-center font-semibold text-2xl">Create an account</h1>
                <form action="sign-up.php" method="post">
                    <div class="flex flex-col mb-3 ">
                        <label class="mb-1 font-medium" for="name">Name</label>
                        <input class="focus:outline-none ring-1 <?php echo ($nameErr == 1) ? 'ring-red-500' : 'ring-orange-500';?> p-2 rounded-lg focus:bg-orange-50 text-sm" name="name" type="text" id="name" value="<?php echo $name;?>" >
                        <?php
                            if($nameErr==1){
                                echo "<p class='text-red-600'>Enter your name</p>";
                            }                        
                        ?>                 
                    </div> 
                    <div class="flex flex-col mb-3 ">
                        <label class="mb-1 font-medium" for="email">Email</label>
                        <input class="focus:outline-none ring-1 <?php echo ($emailErr == 1 || $exist==1) ? 'ring-red-500' : 'ring-orange-500'; ?> p-2  rounded-lg focus:bg-orange-50 text-sm" name="email" type="text" id="email" value="<?php echo $email ?>">
                        <?php if($emailErr==1):?>
                            <p class='text-red-600'>Enter your email</p>
                        <?php elseif($exist==1):?>
                            <p class='text-red-600'>invalid email</p>                     
                        <?php endif; ?>  
                    </div>       
                    <div class="flex flex-col mb-3 ">
                        <label class="mb-1 font-medium" for="pass">Password</label>
                        <input class="focus:outline-none ring-1 <?php echo ($passwordErr == 1) ? 'ring-red-500' : 'ring-orange-500'; ?> p-2  rounded-lg focus:bg-orange-50" type="password" name='password' id="pass" value="<?php echo $password ?>">
                        <?php if($passwordErr==1):?>
                            <p class="text-red-600">Enter your password</p>
                        <?php endif; ?>                 
                    </div>     
                    <div class="flex justify-center items-center mt-10">
                        <button type="submit" class="bg-orange-500 hover:bg-orange-600 p-3 px-5 rounded-full text-sm text-white md:text-base ">Create Account</button>
                    </div>
                    <a href="login.php"><p class="text-center mt-4 text-gray-600 mouse:hover:underline">Already have account? Log In</p></a>
                </form>
            </div>     
        </div> 
        
        <div class="hiddden sm:block bg-orange-200 rounded-l-lg w-[50%]">
            <img class="hidden sm:block" src="./resources/login.png" alt="">
        </div>
    </div>





    </main>
    
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
</body>
</html>



//data lost when sublit fails i need to keep it