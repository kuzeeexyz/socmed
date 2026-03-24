<?php include 'views/header.php'; 
      if(isset($_SESSION['aid'])){
            header("location:profile.php");
        }    
?>        
      <div class="registration_form">
          <p class = "title">Sign Up</p>
                <form action="models/register_account.php" method="POST">
                    <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="kuze@gmail.com">
                    <label for="firstname">First name </label>
                        <input type="text" name="firstname" id="firstname" placeholder="Kuze">
                    <label for="lastname">Last name </label>
                        <input type="text" name="lastname" id="lastname" placeholder="Masachika">
                     <label for="password">Password</label>  
                        <input type="password" name="password" id="password" placeholder="**********">
                    <label for="cpassword">Confirm Password</label>  
                        <input type="password" name="cpassword" id="cpassword" placeholder="**********">
                        <input type="Submit" values="Login">
                        
                <form>
    </div>

<?php include 'views/footer.php'; ?>
