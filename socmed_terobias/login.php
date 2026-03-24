 <?php 
 include 'views/header.php';
 if(isset($_SESSION ['aid'])){
     header("location:profile.php");
 }
 ?>
        
        <div class = "registration_form">
            <p class = "title">Log In</p>
            <form action = "models/login_account.php" method="POST">
                <?php
                if(isset($_GET['err'])){
                    echo "<p class=\"alert\">";
                    echo "Invalid Email or Password";
                    echo "</p>";
                }
                ?>
                <label for ="email">Email</label>
                    <input type ="email" name="email" id="email" placeholder="kuze@gmail.com">
                <label for ="password">Password</label>
                    <input type ="password" name="password" id="password" placeholder=" ">
                    <input type ="submit" values="Signup">
                    
            </form>
        </div>            
        
    <?php include 'views/footer.php'; 